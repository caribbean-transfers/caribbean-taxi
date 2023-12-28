<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiTrait;
use App\Traits\SeoTrait;

class ProcessController extends Controller{
    use ApiTrait, SeoTrait;
    public $seo = [];

    public function handler(Request $request){
        $this->seoData("search-result");

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',
            'currency' => 'required|in:USD,MXN',
            'language' => 'required|in:en,es',

            'from' => 'required|max:150',
            'from_latitude' => 'required',
            'from_longitude' => 'required',
            'from_pickup_date' => 'required|date_format:Y-m-d H:i',
            
            'to' => 'required|max:150',
            'to_latitude' => 'required',
            'to_longitude' => 'required',
            'to_pickup_date' => [
                'required_if:type,RT',
                'date_format:Y-m-d H:i',
            ],
            
            'passengers' => 'required|integer|min:1|max:35',
            'service' => 'integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('home');
        }
        
        Session::put( 'quote', $request->all() );
        
        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home');
        endif;

        $data = ApiTrait::quote($quote);

        return view('process.search', ['data' => $data, 'seo' => $this->seo]);
    }

    public function search(){
        $this->seoData("search-result");

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home');
        endif;

        $data = ApiTrait::quote($quote);
        return view('process.search', ['data' => $data, 'seo' => $this->seo]);
    }

    public function handlerCheckout(Request $request){
        $this->seoData("checkout");

        $validator = Validator::make($request->all(), [
            'id' => 'integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('step.one');
        }
        
        Session::put( 'quote_id', $request->id );

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home');
        endif;

        $data = ApiTrait::quote($quote);
        if(isset( $data['error'] )):
            return redirect()->route('home');
        endif;

        $id = $request->id;
        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });
        
        $item = array_values($item);

        if( !isset($item[0]) ):
            return redirect()->route('step.one');
        endif;

        $data['items'] = $item[0];
        
        $form = session()->get('client_data');
        
        return view('process.checkout', ['quote' => $quote, 'data' => $data, 'form' => $form, 'seo' => $this->seo]);
    }

    public function checkout(){
        $this->seoData("checkout");
        
        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home');
        endif;

        $id = session()->get('quote_id');
        if( $id == NULL ):
            return redirect()->route('home');
        endif;

        $data = ApiTrait::quote($quote);
        if(isset( $data['error'] )):
            return redirect()->route('home');
        endif;
        
        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });

        $item = array_values($item);

        if( !isset($item[0]) ):
            return redirect()->route('step.one');
        endif;

        $data['items'] = $item[0];
        
        $form = session()->get('client_data');

        return view('process.checkout', ['quote' => $quote, 'data' => $data, 'form' => $form, 'seo' => $this->seo]);
    }

    public function processingHandler(Request $request){
        $this->seoData("processing");

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',            
            'first_name' => 'required|max:75',
            'last_name' => 'max:75',
            'email' => 'required|email|max:80',
            'phone' => 'max:25',
            'special_request' => 'max:150',
            'payment_type' => 'required|in:paypal,credit_card,cash',
            'token' => 'required', 
            
            'arrival_airline' => 'max:25',
            'arrival_flight_number' => 'max:25'
        ]);

        Session::put( 'client_data', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'special_request' => $request->special_request,
            'arrival_airline' => (( isset( $request->arrival_airline ) )? $request->arrival_airline : ''),
            'arrival_flight_number' => (( isset($request->arrival_flight_number) )? $request->arrival_flight_number : ''),
        ] );

        if ($validator->fails()) {
            return redirect()->route('step.two');
        }

        $data = ApiTrait::create($request);

        if(isset( $data['error'] )):
            return redirect()->route('step.two', ['code' => $data['error']['code'], 'message' => $data['error']['message'][0] ]);
        endif;

        Session::put( 'reservation', $data);
        
        $payment_link = '/gracias';
        if( in_array( $request->payment_type, ['paypal','credit_card'] ) ):
            $payment_data = [
                "type" => (( $request->payment_type == 'paypal' )? 'PAYPAL' : 'STRIPE'),
                "id" => $data['config']['id'],
                "language" => "es",
                "success_url" => "/gracias",
                "cancel_url" => "/cancelar"
            ];
            $payment_data = ApiTrait::paymentLink($payment_data);
            $payment_link = $payment_data['url'];
        endif;

        return view('process.processing', [ 'payment' => $payment_link, 'seo' => $this->seo, 'data' => $data ]);
    }

    public function success(){
        $this->seoData("thank-you");
        return view('process.thank-you', ['seo' => $this->seo]);
    }

    public function error(){
        $this->seoData("cancel");
        return view('process.cancel', ['seo' => $this->seo]);
    }

    public function login(){
        $rez = session()->get('reservation');
        if( $rez ):
            return redirect()->route('reservation.detail');
        endif;

        $this->seoData("login");
        return view('process.login', ['seo' => $this->seo]);
    }

    public function loginHandler(Request $request){        
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:75',
            'email' => 'required|email|max:75',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login');
        }

        $item = [
            "code" => $request->code,
            "email" => $request->email,
            "language" => 'es'
        ];

        $data = ApiTrait::checkReservation($item);
        
        if( isset( $data['error'] ) ):
            return view('process.login', ['data' => $item]);
        endif;

        Session::put( 'reservation', $data);
        return redirect()->route('reservation.detail');
    }

    public function reservationDetail(Request $request){
        $this->seoData("reservation-detail");
        if(isset( $request->logout )):
            session()->forget('reservation');
            return redirect()->route('login');
        endif;

        $rez = session()->get('reservation');
        if( $rez == NULL ):
            return redirect()->route('login');
        endif;

        $payment_links = [
            "PAYPAL" => NULL,
            "STRIPE" => NULL,
        ];

       if($rez['payments']['total'] <= 0):
            $payment_data = [
                "type" => 'PAYPAL',
                "id" => $rez['config']['id'],
                "language" => "es",
                "success_url" => "/gracias",
                "cancel_url" => "/cancelar"
            ];
            
            $paypal = ApiTrait::paymentLink($payment_data);
            if(!isset( $paypal['error'] )):
                $payment_links['PAYPAL'] = $paypal['url'];
            endif;
            
            $payment_data = [
                "type" => 'STRIPE',
                "id" => $rez['config']['id'],
                "language" => "es",
                "success_url" => "/gracias",
                "cancel_url" => "/cancelar"
            ];            
            $stripe = ApiTrait::paymentLink($payment_data);
            if(!isset( $stripe['error'] )):
                $payment_links['STRIPE'] = $stripe['url'];
            endif;
        endif;

        return view('process.reservation-detail', ['rez' => $rez, 'payment_link' => $payment_links, 'seo' => $this->seo]);
    }
}