@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/checkout.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/checkout.min.css') }}" rel="stylesheet">
    <script>
        const item_config = {
            flight_required: `{!! (int) $data['places']['config']['flight_required'] !!}`,
            service_type: `{!! $quote['type'] !!}`
        };
    </script>
    <script src="{{ mix('/assets/js/process/checkout.min.js') }}" defer></script>
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.checkout')
    @php
        //dd($quote);
        //dd($data);
        $time = [
            "one_way_date" => date("Y-m-d", strtotime($data['places']['one_way']['init']['time'])),
            "one_way_time" => date("H:i", strtotime($data['places']['one_way']['init']['time'])),
            "round_trip_date" =>  (( isset($data['places']['round_trip']['init']['time']) )? date("Y-m-d", strtotime($data['places']['round_trip']['init']['time'])) : '' ),
            "round_trip_time" => (( isset($data['places']['round_trip']['init']['time']) )? date("H:i", strtotime($data['places']['round_trip']['init']['time'])) : '' ),
        ];
    @endphp
    <div class="parallax-container">
        <div class="container">
            <h1>RESERVATION DETAIL</h1>
        </div>
    </div>

    <form class="container checkout-container" method="POST" action="/processing" id="checkoutForm">
        @if(isset($_GET['code']))
        <div class="badge-error">
            <p><strong>{{ $_GET['code'] }}</strong>: {{ $_GET['message'] }}</p>
        </div>
        @endif

        <div class="top">
            <img src="{{ $data['items']['image'] }}" alt="" title="">
            <div>
                <h2>Private Transportation <span>Capacity {{ $data['items']['passengers'] }} pax</span></h2>
                <ul>
                    <li class="pax">Passengers: {{ $quote['passengers'] }}</li>
                    <li class="point">Leaving from: {{ $data['places']['one_way']['init']['name'] }}</li>
                    <li class="point">Going to: {{ $data['places']['one_way']['end']['name'] }}</li>
                </ul>
            </div>
        </div>

        <div class="arrival-information">
            <h2>Arrival information</h2>
            <div class="{{ (( $data['places']['config']['flight_required'] == false )? 'two-columns' : '' ) }}">
                <div>
                    <label>Fecha de recogida</label>
                    <input type="text" class="form-control" value="{{ $time['one_way_date'] }}" name="arrival_date" disabled>
                </div>
                <div>
                    <label>Pick-up date</label>
                    <input type="text" class="form-control" value="{{ $time['one_way_time'] }}" name="arrival_time" disabled>
                </div>
                @if($data['places']['config']['flight_required'])
                <div>
                    <label>Airline</label>
                    <input type="text" class="form-control" name="arrival_airline" placeholder="What is your airline?" value="{{ $form['arrival_airline'] }}">
                </div>
                <div>
                    <label>Flight number</label>
                    <input type="text" class="form-control" name="arrival_flight_number" placeholder="What is your flight?" value="{{ $form['arrival_flight_number'] }}">
                </div>
                @endif
            </div>
        </div>

        <div class="general-information">
            @if($quote['type'] == "RT")
            <h2>Return information</h2>
            <div class="return-information">
                <div>
                    <label>Return date</label>
                    <input type="text" class="form-control" value="{{ $time['round_trip_date'] }}" disabled>
                </div>
                <div>
                    <label>Return time</label>
                    <input type="text" class="form-control" value="{{ $time['round_trip_time'] }}" disabled>
                </div>
            </div>
            @endif

            <h2>Passenger information</h2>
            <div class="client-information">
                <div class="one">
                    <div>
                        <label>First name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="What's your name?" value="{{ $form['first_name'] }}">
                    </div>
                    <div>
                        <label>Last name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="What is your surname?" value="{{ $form['last_name'] }}">
                    </div>
                </div>
                <div class="two">
                    <div>
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="What is your email address?" value="{{ $form['email'] }}">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="What is your phone number?" value="{{ $form['phone'] }}">
                    </div>
                </div>
                <div class="three">
                    <div>
                        <label>Notes / Additional requirements</label>
                        <input type="text" class="form-control" name="special_request" placeholder="Do you have any special notes or requirements?" value="{{ $form['special_request'] }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-information">
            <h2>Total: <span>${{number_format($data['items']['price'],2)}} {{ $data['items']['currency'] }}</span></h2>
            <p>X {{ $data['items']['vehicles'] }} {{ $data['items']['name'] }} with capacity for up to {{ $data['items']['passengers'] }} passengers</p>
        </div>

        <div class="payment-information">
            <h2>Payment method</h2>
            <div>
                <label>
                    <input type="radio" name="payment_type" id="paypal" value="paypal" checked>
                    <img src="/assets/img/checkout/paypal.png" alt="PayPal" title="PayPal">
                </label>
                <label>
                    <input type="radio" name="payment_type" id="card" value="credit_card">
                    <img src="/assets/img/checkout/visa.png" alt="Credit / Debit Card" title="Credit / Debit Card">
                    <img src="/assets/img/checkout/mastercard.png" alt="Credit / Debit Card" title="Credit / Debit Card">
                    <span>Credit / Debit Card</span>
                </label>
                @if($data['places']['config']['flight_required'])
                <label>
                    <input type="radio" name="payment_type" id="cash" value="cash">
                    <span>Pay in cash</span>
                </label>
                @endif
            </div>
        </div>

        <div class="bottom">
            <p>By clicking on Submit, you accept the <a href="/terms-and-conditions" target="_blank" title="terms and conditions">terms and conditions</a>.</p>
            <input type="hidden" name="token" value="{{ $data['items']['token'] }}">
            <input type="hidden" name="type" value="{{ $quote['type'] }}">
            @csrf
            <button id="btn_send" type="button" onclick="handler()">BOOK YOUR TRIP NOW!</button>
        </div>
    </form>

    @include('layout.footer.checkout')
@endsection