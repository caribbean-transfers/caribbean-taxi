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
            <h1>DATOS DE RESERVACIÓN</h1>
        </div>
    </div>

    <form class="container checkout-container" method="POST" action="/procesando" id="checkoutForm">
        @if(isset($_GET['code']))
        <div class="badge-error">
            <p><strong>{{ $_GET['code'] }}</strong>: {{ $_GET['message'] }}</p>
        </div>
        @endif

        <div class="top">
            <img src="{{ $data['items']['image'] }}" alt="" title="">
            <div>
                <h2>Transporte privado <span>Capacidad {{ $data['items']['passengers'] }} pasajeros</span></h2>
                <ul>
                    <li class="pax">Pasajeros: {{ $quote['passengers'] }}</li>
                    <li class="point">Origen: {{ $data['places']['one_way']['init']['name'] }}</li>
                    <li class="point">Destino: {{ $data['places']['one_way']['end']['name'] }}</li>
                </ul>
            </div>
        </div>

        <div class="arrival-information">
            <h2>Información de llegada</h2>
            <div class="{{ (( $data['places']['config']['flight_required'] == false )? 'two-columns' : '' ) }}">
                <div>
                    <label>Fecha de recogida</label>
                    <input type="text" class="form-control" value="{{ $time['one_way_date'] }}" name="arrival_date" disabled>
                </div>
                <div>
                    <label>Hora de recogida</label>
                    <input type="text" class="form-control" value="{{ $time['one_way_time'] }}" name="arrival_time" disabled>
                </div>
                @if($data['places']['config']['flight_required'])
                <div>
                    <label>Aerolínea</label>
                    <input type="text" class="form-control" name="arrival_airline" placeholder="¿Cuál es tu aerolínea?" value="{{ $form['arrival_airline'] }}">
                </div>
                <div>
                    <label>Número de vuelo</label>
                    <input type="text" class="form-control" name="arrival_flight_number" placeholder="¿Cuál es tu vuelo?" value="{{ $form['arrival_flight_number'] }}">
                </div>
                @endif
            </div>
        </div>

        <div class="general-information">
            @if($quote['type'] == "RT")
            <h2>Información de regreso</h2>
            <div class="return-information">
                <div>
                    <label>Fecha de regreso</label>
                    <input type="text" class="form-control" value="{{ $time['round_trip_date'] }}" disabled>
                </div>
                <div>
                    <label>Hora de regreso</label>
                    <input type="text" class="form-control" value="{{ $time['round_trip_time'] }}" disabled>
                </div>
            </div>
            @endif

            <h2>Información de pasajero</h2>
            <div class="client-information">
                <div class="one">
                    <div>
                        <label>Nombre completo</label>
                        <input type="text" class="form-control" name="first_name" placeholder="¿Cuál es tu nombre?" value="{{ $form['first_name'] }}">
                    </div>
                    <div>
                        <label>Apellidos</label>
                        <input type="text" class="form-control" name="last_name" placeholder="¿Cuál es tu apellido?" value="{{ $form['last_name'] }}">
                    </div>
                </div>
                <div class="two">
                    <div>
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="¿Cuál es tu dirección de correo electrónico?" value="{{ $form['email'] }}">
                    </div>
                    <div>
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="phone" placeholder="¿Cuál es tu número de teléfono?" value="{{ $form['phone'] }}">
                    </div>
                </div>
                <div class="three">
                    <div>
                        <label>Notas / Requerimientos adicionales</label>
                        <input type="text" class="form-control" name="special_request" placeholder="¿Tienes alguna nota o requisito especial?" value="{{ $form['special_request'] }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-information">
            <h2>Total: <span>${{number_format($data['items']['price'],2)}} {{ $data['items']['currency'] }}</span></h2>
            <p>X {{ $data['items']['vehicles'] }} {{ $data['items']['name'] }} con capacidad para hasta {{ $data['items']['passengers'] }} pasajeros</p>
        </div>

        <div class="payment-information">
            <h2>Forma de pago</h2>
            <div>
                <label>
                    <input type="radio" name="payment_type" id="paypal" value="paypal" checked>
                    <img src="/assets/img/checkout/paypal.png" alt="PayPal" title="PayPal">
                </label>
                <label>
                    <input type="radio" name="payment_type" id="card" value="credit_card">
                    <img src="/assets/img/checkout/visa.png" alt="Tarjeta de Crédito / Débito" title="Tarjeta de Crédito / Débito">
                    <img src="/assets/img/checkout/mastercard.png" alt="Tarjeta de Crédito / Débito" title="Tarjeta de Crédito / Débito">
                    <span>Tarjeta de Crédito / Débito</span>
                </label>
                @if($data['places']['config']['flight_required'])
                <label>
                    <input type="radio" name="payment_type" id="cash" value="cash">
                    <span>Pagar en efectivo</span>
                </label>
                @endif
            </div>
        </div>

        <div class="bottom">
            <p>Al hacer clic en Enviar, acepta los <a href="/terminos-y-condiciones" target="_blank" title="términos y condiciones">términos y condiciones</a>.</p>
            <input type="hidden" name="token" value="{{ $data['items']['token'] }}">
            <input type="hidden" name="type" value="{{ $quote['type'] }}">
            @csrf
            <button id="btn_send" type="button" onclick="handler()">¡RESERVAR TU VIAJE AHORA!</button>
        </div>
    </form>

    @include('layout.footer.checkout')
@endsection