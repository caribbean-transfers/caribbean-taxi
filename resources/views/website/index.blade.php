@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <x-analytics/>
@endpush

@section('content')    
    @include('layout.header.general')

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile.png" alt="Promoción del 20% de descuento más pago al llegar" title="Super Oferta | Paga al llegar + 20% de Descuento" width="2160" height="400">
        </picture>
    </div>

    <div class="heading">
        <div class="container">
            <div class="top">
                <h1>La mejor empresa de Taxi en la riviera Maya</h1>
                <p>Más de 10 años brindando el servicio más seguro, rápido y confiable de Traslado en Cancún y la Riviera Maya</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Taxi Riviera Maya, la empresa más confiable de Traslados</h2>
            <p>&iexcl;Bienvenido a Taxi Riviera Maya, la mejor opci&oacute;n para traslados en Canc&uacute;n! Aqu&iacute;, la calidad y el precio se fusionan para ofrecerte la mejor experiencia de transporte privado. No solo nos destacamos por brindar un servicio de alta calidad, sino que tambi&eacute;n nos enorgullece ser la opci&oacute;n con mejor calidad-precio en el mercado.</p>
            <p>Cada servicio va m&aacute;s all&aacute; de ser un simple traslado; desde el momento de tu reserva, nuestros asesores te brindar&aacute;n toda informaci&oacute;n que necesites y en el aeropuerto el representante del Aeropuerto esperar&aacute; por ti puntualmente para evitar tiempos de espera innecesarios.</p>
            <p>En Taxi Riviera Maya, comprendemos la importancia de cada peso que inviertes en tu viaje a la Riviera Maya, y nos comprometemos a cuidar tu presupuesto sin sacrificar la excelencia en el servicio. Conf&iacute;a en nosotros para un traslado en la Riviera Maya que supera tus expectativas y respeta tu bolsillo. Descubre el equilibrio perfecto entre calidad y el precio m&aacute;s bajo en cada traslado con nosotros. &iexcl;Estamos aqu&iacute; para hacer que cada traslado sea accesible y con la mejor experiencia para ti!</p>
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/taxi-cancun-aeropuerto-banner.webp" type="image/webp">
                <img src="/assets/img/home/taxi-cancun-aeropuerto-banner.jpg" alt="Van de pasajeros con la marca de Taxi Riviera Maya" title="Somos la mejor empresa de taxi en la riviera maya" loading="lazy" width="573" height="374">
            </picture>
        </div>
    </div>

    <div class="container highlights_items">
        <div class="top">
            <h2>El servicio de traslado más completo</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Servicios a hoteles</p>
                        <h2>TRASLADO A CUALQUIER DESTINO EN LA RIVIERA MAYA</h2>
                    </div>
                </div>
                <p>Disfruta de un servicio confiable y siempre listo para llevarte a cualquier hotel, resort, aeropuerto, parque temático o sitio arqueológico en Cancún y la RIviera Maya, si está en el mapa podemos llevarte</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Seguridad y Comfort en todo momento</p>
                        <h2>TRASLADO CÓMODO, SEGURO Y CONFIABLE</h2>
                    </div>
                </div>
                <p>Disfruta el viaje con las mejores camionetas en la Riviera Maya, cómodas y seguras, con choferes capacitados y con actitud de servicio. Todo tu viaje será monitoreado para garantizar tu seguridad y tranquilidad</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Traslado seguro del Aeropuerto</p>
                        <h2>EMPRESA CERTIFICADA POR EL AEROPUERTO</h2>
                    </div>
                </div>
                <p>Somos una empresa de traslados registrada y con todos los permisos para operar en el aeropuerto, por lo que siempre estamos ahí, listos para llevarte a disfrutar de la Riviera Maya sin complicaciones</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Van de pasajeros con la marca de Taxi Riviera Maya" title="Somos la mejor empresa de taxi en la riviera maya" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>SERVICIO CONFIABLE DE TAXI DEL AEROPUERTO DE CANCÚN</h2>
            <p>Con más de 10 años de experiencia brindando servicios de Taxi Privado del Aeropuerto de Cancún, Taxi Riviera Maya es la empresa número 1 de Traslados en Cancún desde el Aeropuerto de Cancún a hoteles tanto en Cancún como en la Riviera Maya.</p>
            <p>Taxi Riviera Maya brinda servicios de taxi del aeropuerto de Cancún, privado, seguro y confiable hasta tu hotel u hospedaje en la Zona Hotelera de Cancún, el Centro de Cancún, Playa Mujeres, Puerto Morelos, Playa del Carmen, Puerto Aventuras, Akumal, Tulum o cualquier parte de la Riviera Maya.</p>
            <p>Al usar los servicios de Taxi Riviera Maya obtendrás los mejores beneficios, tanto en precio como en servicio. Taxi Riviera Maya se preocupa por tu bienestar y ha implementado en todos sus servicios de taxi la desinfección después de cada uso de la unidad, así como ha tomado las medidas necesarias de uso de tapabocas y gel antibacterial.</p>
            <a href="#" class="btn" title="Reserva Ahora">RESERVA AHORA</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Nuestros servicios de transporte</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Transporte Privado" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Transporte privado</h3>
                <div>
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros).</p>
                </div>
                <p>Desde <span>$539 MXN</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                        <img src="/assets/img/services/suburban.png" alt="Cevrolet Suburban" title="Transporte de lujo" loading="lazy" width="343" height="196">
                    </picture>
                </div>                
                <h3>Transporte de lujo</h3>
                <div>
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros).</p>
                </div>
                <p>Desde <span>$1,404 MXN</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                        <img src="/assets/img/services/crafter.png" alt="VW Crafter" title="Transporte para grupos" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Transporte para grupos</h3>
                <div>
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros).</p>
                </div>
                <p>Desde <span>$630 MXN</span></p>
            </div>

        </div>
    </div>

    <div class="light-gray">
        <div class="container items-highlights">
            <div>
                <p>21k+</p>
                <p>Clientes felices</p>
            </div>
            <div>
                <p>21517</p>
                <p>Traslados operados</p>
            </div>
            <div>
                <p>10622</p>
                <p>Destinos disponibles</p>
            </div>
            <div>
                <p>24Hrs</p>
                <p>Horario de servicio</p>
            </div>
        </div>
    </div>

    <div class="container rates_information">
        <div class="top">
            <h2>TARIFAS POR ZONA DE SERVICIO DE TAXI</h2>
        </div>
        <div class="bottom">
            <table class="table table-striped table-responsive">
                <caption>
                    Precios de Servicios de Taxi por Destino
                </caption>
                <thead>
                    <tr>
                        <th rowspan="2" scope="col" class="destino">Destino</th>
                        <th colspan="2">
                            Taxi Privado<br>
                            1-8 pasajeros
                        </th>
                        <th colspan="2">
                            Taxi de Lujo<br>
                            1-5 pasajeros
                        </th>
                        <th colspan="2">
                            Taxi para Grupos<br>
                            1-16 pasajeros
                        </th>
                    </tr>
                    <tr>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                        <th>Sencillo</th>
                        <th>Redondo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Cancun Downtown</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$539 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$1,079 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$1,404 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$2,718 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$1,404 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$2,718 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Cancun Hotel Zone</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$539 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$1,079 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$1,404 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$2,718 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$1,079 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$2,718 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Morelos</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$990 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$1,880 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$2,080 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$4,060 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$1,880 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$3,660 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Playa Mujeres</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,100 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$2,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$2,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$4,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$2,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$4,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Juárez</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$850 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$1,600 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$1,800 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$3,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$1,600 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$3,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Playa del Carmen</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,500 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$2,900 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$3,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$6,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$2,900 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$5,700 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Costa Mujeres</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,100 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$2,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$2,718 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$4,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$2,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$4,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Cozumel</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,404 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$2,718 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$2,900 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$5,700 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$2,718 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$5,400 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Aventuras</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,600 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$3,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$3,300 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$6,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$3,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$6,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Akumal</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$1,800 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$3,500 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$3,700 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$7,300 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$3,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$6,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$2,322 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$4,554 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$5,400 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$10,620 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$4,554 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Mahahual</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$5,600 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$11,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$11,404 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$22,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$11,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$22,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Holbox</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$5,200 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$10,300 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$10,620 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$20,900 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$10,300 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$20,500 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Valladolid</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$7,800 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$15,500 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$15,700 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$31,404 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$15,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$30,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Merida</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$9,800 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$17,500 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$17,700 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$32,718 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$17,500 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$30,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Bacalar</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 3 Pasajeros (Sencillo)">$5,600 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 3 Pasajeros (Redondo)">$11,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$11,100 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$22,100 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$11,404 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$22,500 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Coba</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 3 Pasajeros (Sencillo)">$2,322 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 3 Pasajeros (Redondo)">$4,554 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$5,400 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$10,620 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$4,554 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum Hotel Zone</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$2,322 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$4,554 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$5,400 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$10,620 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$4,554 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum Arco</strong></td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">$2,322 MXN</td>
                        <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">$4,554 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Sencillo)">$5,400 MXN</td>
                        <td data-label="Taxi de Lujo" data-sublabel="1 - 6 Pasajeros (Redondo)">$10,620 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Sencillo)">$4,554 MXN</td>
                        <td data-label="Taxi para Grupos" data-sublabel="1 - 16 Pasajeros (Redondo)">$10,620 MXN</td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <div class="reviews_information">
        <div class="mask"></div>
        <div class="container">
            <div class="top">
                <h2>Comentarios de nuestros clientes</h2>
                <h3>Descubra por qué nos eligen nuestros clientes</h3>
            </div>
            <div class="bottom">
                <div class="write_review">
                    <div>
                        <p class="rating">Rating</p>
                        <p class="rating_count">4.7 <span>4107 comentarios</span></p>
                    </div>
                    <a title="Escribir comentario" target="_blank" href="https://g.page/r/CaJOK2AW7uT6EB0/review">Escribir comentario</a>                  
                </div>
                <div class="items">

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Taxi Riviera Maya" title="SARA M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>SARA M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>El chofer llegó puntual por nosotras, la camioneta limpia y los asientos muy cómodos, lo mejor de todo es el precio tan bajo</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Taxi Riviera Maya" title="LAURA S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>LAURA S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>20/10, son honestos, olvidé un bolso en la cabina y se contactaron rápidamente conmigo y me la llevaron hasta mi hotel</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Taxi Riviera Maya" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Me sentí segura en todo momento, fué muy fácil encontrarlos en el aeropuerto, sin duda es de las mejores empresas de traslado</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Taxi Riviera Maya" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>¡Gran servicio! Esta fue la única compañía que tenía disponibilidad el mismo día de recogida en el aeropuerto. Fue fácil comunicarse por chat. </p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Servicio de traslado desde y hacia el Aeropuerto de Cancún</h2>
            <p>Ofrecemos el servicio más completo de transporte del Aeropuerto de Cancún a cualquier destino de la Riviera Maya o viceversa, desde cualquier destino en la Riviera Maya al Aeropuerto Internacional de Cancún, brindamos un servicio completo siempre listo para llevarte a tu hotel o atracción favorita</p>
        </div>
        <div class="bottom">
            <div>
                <a href="/traslado-de-cancun-tulum" title="Traslado a Tulum">
                    <picture>
                        <source srcset="/assets/img/destinations/tulum-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/tulum-destino.jpg" alt="Traslado a Tulum" title="Traslado a Tulum" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/traslado-de-cancun-tulum" title="Traslado a Tulum">Traslado a Tulum</a></h3>
                    <p>Disfruta de un servicio de Traslado a Tulum seguro, rápido y confiable. El tiempo estimado de traslado desde Cancún es de 1 hora y 40 minutos</p>
                </div>
            </div>
            <div>
                <a href="/transporte-cancun-a-playa-del-carmen" title="Traslado a Playa del Carmen">
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/playa-del-carmen-destino.jpg" alt="Traslado a Playa del Carmen" title="Traslado a Playa del Carmen" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/transporte-cancun-a-playa-del-carmen" title="Traslado a Playa del Carmen">Traslado a Playa del Carmen</a></h3>
                    <p>Disfruta de un servicio de Traslado a Playa del Carmen seguro, rápido y confiable. El tiempo estimado de traslado desde Cancún es de 55 minutos</p>
                </div>
            </div>
            <div>
                <a href="/taxi-aeropuerto-cancun" title="Taxi en el Aeropuerto de Cancún">
                    <picture>
                        <source srcset="/assets/img/destinations/cancun-zona-hotelera.webp" type="image/webp">
                        <img src="/assets/img/destinations/cancun-zona-hotelera.jpg" alt="Taxi en el Aeropuerto de Cancún" title="Taxi en el Aeropuerto de Cancún" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/taxi-aeropuerto-cancun" title="Taxi en el Aeropuerto de Cancún">Taxi en el Aeropuerto de Cancún</a></h3>
                    <p>Disfruta de un servicio de Traslado a la Zona Hotelera seguro, rápido y confiable. El tiempo estimado de traslado desde el Aeropuerto a la Zona Hotelera es de 30 minutos</p>
                </div>
            </div>
            <div>
                <a href="/transporte-cancun-a-akumal" title="Traslado a Akumal">
                    <picture>
                        <source srcset="/assets/img/destinations/destino-akumal.webp" type="image/webp">
                        <img src="/assets/img/destinations/destino-akumal.jpg" alt="Traslado a Akumal" title="Traslado a Akumal" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/transporte-cancun-a-akumal" title="Traslado a Akumal">Traslado a Akumal</a></h3>
                    <p>Disfruta de un servicio de Traslado a Akumal seguro, rápido y confiable. El tiempo estimado de traslado desde Cancún a Akumal es de 1 hora y 40 minutos</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/puerto-morelos-destino-taxi.webp" type="image/webp">
                    <img src="/assets/img/destinations/puerto-morelos-destino-taxi.jpg" alt="Traslado a Puerto Morelos" title="Traslado a Puerto Morelos" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Traslado a Puerto Morelos</h3>
                    <p>Disfruta de un servicio de Traslado a Puerto Morelos seguro, rápido y confiable. El tiempo estimado de traslado desde Cancún es de 30 minutos</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/destino-puerto-aventuras.webp" type="image/webp">
                    <img src="/assets/img/destinations/destino-puerto-aventuras.jpg" alt="Traslado a Puerto Aventuras" title="Traslado a Puerto Aventuras" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Traslado a Puerto Aventuras</h3>
                    <p>Disfruta de un servicio de Traslado a Puerto Aventuras seguro, rápido y confiable. El tiempo estimado de traslado desde Cancún es de 1 hora y 20 minutos</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container additional_information">
        <div class="bottom">
            <div class="left">                
                <h2>Más que sólo un servicio de Taxi en el Aeropuerto de Cancún</h2>
                <p>Somos la empresa de Taxi en el Aeropuerto de Cancún favorita de los viajeros nacionales e internacionales, Taxi Riviera Maya es la empresa número 1 de Taxi desde el Aeropuerto de Cancún a hoteles tanto en Cancún como en la Riviera Maya.</p>
                <p>Taxi Riviera Maya brinda servicios de <strong>Taxi Aeropuerto Cancún</strong>, privado, seguro y confiable hasta tu hotel u hospedaje en la Zona Hotelera de Cancún, el Centro de Cancún, Playa Mujeres, Puerto Morelos, Playa del Carmen, Puerto Aventuras, Akumal, Tulum o cualquier parte de la Riviera Maya.</p>
                <p>Al usar los servicios de Taxi Riviera Maya obtendrás los mejores beneficios, tanto en precio como en servicio. Taxi Riviera Maya se preocupa por tu bienestar y ha implementado en todos sus servicios de taxi la desinfección después de cada uso de la unidad, así como ha tomado las medidas necesarias de uso de tapabocas y gel antibacterial.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/home/client.webp" type="image/webp">
                    <img src="/assets/img/home/client.png" alt="Más que sólo un servicio de Taxi en el Aeropuerto de Cancún" title="Más que sólo un servicio de Taxi en el Aeropuerto de Cancún" loading="lazy" width="390" height="481">
                </picture>
            </div>
        </div>
    </div>

    <div class="container faqs_section">
        <div class="top">
            <h2>Preguntas frecuentes sobre el servicio de traslados</h2>
            <p>Te ayudamos a despejar tus dudas sobre el servicio de Traslados en Cancún</p>
        </div>
        <div class="bottom">
            <div>
                <h3>¿Por qué reservar un transporte privado del aeropuerto de Cancún?</h3>
                <div>
                    <p>Después de un largo vuelo, lo último que quiere hacer es lidiar con costosos taxis o tarifas de última hora para los servicios de transporte. Para evitar todo eso, se recomienda organizar antes de viajar, una opción de transporte seguro y eficiente desde el aeropuerto hasta su hotel en Cancún, Playa del Carmen, Tulum y el resto de la Riviera Maya.</p>
                    <p>Reservar su transporte del aeropuerto de Cancún con antelación le hará ahorrar tiempo y dinero para ir a las zonas principales. El transporte privado regular del aeropuerto de Cancún a Playa del Carmen cuesta alrededor de $45.00 para un viaje de ida, mientras que el transporte de lujo del aeropuerto de Cancún a Playa del Carmen cuesta $85.00 para un viaje de ida.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo llegar del aeropuerto de Cancún a mi hotel?</h3>
                <div>
                    <p>Para ir del aeropuerto internacional de Cancún a la Zona Hotelera de Cancún, tiene diferentes opciones de traslado desde el aeropuerto, ya sea tomando un taxi, un autobús ADO, rentando un auto o consiguiendo transporte privado. La mayoría de los locales y empresas de transporte de renombre se encuentran en el aeropuerto. La duración total del viaje es de unos 25 minutos, y el coste variará en función de su opción de traslado al aeropuerto, ya sea de ida o de ida y vuelta. Basándose en su relación con el número de servicios que opera y las valoraciones de sus clientes, actualmente la empresa de transporte mejor valorada para moverse por Cancún y la Riviera Maya es Taxi Riviera Maya.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuál es la disponibilidad de servicio de Traslados en Cancún?</h3>
                <div>
                    <p>El servicio de traslado privado está disponible las 24 horas del día en el aeropuerto con reserva previa. De esta manera, usted evita las largas esperas en el aeropuerto y obtiene un servicio de transporte de Cancún más rápido a su hotel. El servicio de transporte del aeropuerto de Cancún puede llevarlo a cualquier hotel, resort, condominio, AirBnB, parque temático, playa o cualquier destino dentro de Cancún y la Riviera Maya.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué tan seguro es tomar un taxi desde el aeropuerto de Cancún?</h3>
                <div>
                    <p>Los taxis son seguros, especialmente en la zona hotelera. Sin embargo, tomar un transporte privado en Cancún es más seguro para cualquier tipo de servicio. Los taxistas aceptan dólares pero a una tasa menos favorable, por lo que la recomendación es pagar siempre con moneda local y con billetes de baja denominación.</p>
                    <p>Los taxis sólo aceptan dinero en efectivo como método de pago, así que en caso de que sólo tenga sus tarjetas, busque otra opción de traslado en el aeropuerto de Cancún que las acepte. Puede encontrar diferentes opciones de servicio de transporte privado en el aeropuerto de Cancún con las mejores tarifas. Una opción cómoda y directa sin incremento por tarifa de conductor y soporte al viajero las 24 horas del día.</p>
                </div>
            </div>
            <div>
                <h3>¿Es posible tomar un autobús público del aeropuerto de Cancún a la Zona Hotelera?</h3>
                <div>
                    <p>Para ir del Aeropuerto Internacional de Cancún a la Zona Hotelera en autobús, es necesario tomar un autobús ADO para llegar a la estación de autobuses ubicada en el centro de la ciudad y luego tomar el autobús público R-1 o R-2 hasta la Zona Hotelera. Los autobuses ADO sólo van del Aeropuerto de Cancún al centro, no a la Zona Hotelera, si quiere evitar los cambios, puede reservar un servicio de transporte privado del aeropuerto de Cancún con antelación para recibir un traslado más rápido y directo a su hotel.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection