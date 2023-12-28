@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/search.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/search.min.css') }}" rel="stylesheet">
    <script>
        const availability = parseInt(`{!! (( isset(  $data['error'] ) )? 0 : 1) !!}`);
    </script>
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8rzRv68eegApXM7mRB1gtIP-bXxRTS9U"></script>
    <script defer src="{{ mix('/assets/js/process/listing.min.js') }}"></script>
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>RESULTADOS</h1>
        </div>
    </div>
    
    <div class="container general-container">
        <div class="left">
            @if(!isset($data['error']))
                <div class="map" id="map">Map</div>
            @endif
            <div class="bookingbox-parent">
                <button id="toggle-bookingbox-button">MODIFICAR</button>
                <div id="toggle-bookingbox-div" class="hidden">
                    <x-bookingbox/>
                </div>
            </div>
        </div>
        <div class="right" id="result-listing-container">
            <div class="top">
                @if(isset($data['items']))
                    <h2>Traslado de {{ $data['places']['one_way']['init']['name'] }} - {{ $data['places']['one_way']['end']['name'] }}</h2>
                    <p>Distancia aproximada: {{ $data['places']['distance'] }}, tiempo aproximado de recorrido {{ $data['places']['time'] }}</p>
                @endif

                @if(isset($data['error']))
                    <div class="error">
                        <p>Lo sentimos :(</p>
                        <h2>Desafortunadamente no encontramos disponibilidad para la <strong>Zona</strong> / <strong>Horarios</strong> solicitados, descuida podemos resolverlo.</h2>
                        <div>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                USA &amp; Canada
                            </a>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                Mexico &amp; Resto del mundo
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=5219982942389&text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="btn">
                                <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                                WhatsApp
                            </a>
                            <a href="#" class="btn" onclick='LiveChatWidget.call("maximize")'>
                                <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#chat"></use></svg>
                                Chat
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            @if(isset($data['items']))
                <div class="bottom">

                    @foreach ($data['items'] as $item)      
                        @php
                            $before = (( $item['price']  * 100 ) / 70);
                            
                        @endphp
                        <div class="item">
                            <div class="one">
                                <img src="{{ $item['image'] }}">
                                <div>
                                    <h3>{{ $item['name'] }}</h3>
                                    <p>5/5</p>
                                    <ul>
                                        <li>Hasta {{ $item['passengers'] }} Pasajeros</li>
                                        <li>Max. {{ $item['luggage'] }} Maletas</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="two">
                                @if($item['id'] == 1)
                                    <p>Viaje cómodamente en un servicio totalmente privado, equipado, para hasta {{ $item['passengers'] }} pasajeros. El servicio es privado, sin tiempo de espera, ni paradas continuas.</p>
                                    <ul>
                                        <li>Servicio Privado</li>
                                        <li>Incluye impuestos del Aeropuerto y Seguro de Viajero</li>
                                        <li>Este servicio esta disponible todos los días</li>
                                        <li>Horario de atención 24 x 7</li>
                                        <li>Servicio disponible todos los días, 24/7</li>
                                    </ul>
                                @endif
                                @if($item['id'] == 2)
                                    <p>Viaje en una Suburban de lujo. Ideal para grupos pequeños, parejas o familias de hasta 5 personas. Totalmente equipada, la mejor opción para su traslado de aeropuerto a su hotel.</p>
                                    <ul>
                                        <li>Incluye impuestos del Aeropuerto y Seguros</li>
                                        <li>Servicio Privado, sin tiempos de espera, ni paradas continuas</li>
                                        <li>Incluye una silla para niños gratis, cuando es solicitada</li>
                                        <li>Vehículo sujeto a disponibilidad</li>
                                    </ul>
                                @endif
                                @if($item['id'] == 3)
                                    <p>Viaje en una Crafter Ideal para grupos grandes, parejas o familias de hasta 15 personas. Totalmente equipada, la mejor opción para su traslado de aeropuerto a su hotel.</p>
                                    <ul>
                                        <li>Incluye impuestos del Aeropuerto y Seguros</li>
                                        <li>Servicio Privado, sin tiempos de espera, ni paradas continuas</li>
                                        <li>Incluye una silla para niños gratis, cuando es solicitada</li>
                                        <li>Servicio disponible todos los días, 24/7</li>
                                    </ul>
                                @endif
                            </div>
                            <div class="three">
                                <div class="top">
                                    <p>Precio desde</p>
                                    <p>${{ number_format($before,2) }} {{ $item['currency'] }}</p>
                                    <p>${{ number_format( $item['price'], 2) }} {{ $item['currency'] }}</p>
                                    <p>Precio por vehiculo</p>
                                </div>
                                <form action="/registro" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                                    <button>Reservar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>

    @include('layout.footer.general')
@endsection