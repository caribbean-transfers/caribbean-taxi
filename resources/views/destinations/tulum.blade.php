@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Traslado Privado a Tulum ",
          "image": [
            "https://taxirivieramaya.com/assets/img/schema/1x1.jpg",
            "https://taxirivieramaya.com/assets/img/schema/4x3.jpg",
            "https://taxirivieramaya.com/assets/img/schema/16x9.jpg"
           ],
          "description": "Servicio de Traslado desde y hacia Tulum, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para todas las zonas de Tulum.",
          "sku": "019002",
          "mpn": "029002",
          "brand": {
            "@type": "Brand",
            "name": "Taxi Riviera Maya"
          },
          "review": {
            "@type": "Review",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": 5,
              "bestRating": 5
            },
            "author": {
              "@type": "Person",
              "name": "Jhon Benson"
            }
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 5,
            "reviewCount": 2896
          },
          "offers": {
            "@type": "Offer",
            "url": "https://taxirivieramaya.com/traslado-de-cancun-tulum",
            "priceCurrency": "MXN",
            "price": 2322,
            "priceValidUntil": "2024-12-31",
            "itemCondition": "https://schema.org/UsedCondition",
            "availability": "https://schema.org/InStock"
          }
        }
    </script>
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
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
                <h1>Taxi de Cancún a Tulum, seguro y confiable</h1>
                <p>Más de 10 años brindando el servicio de Taxi desde y hacia Tulum de la manera más segura, rápida y confiable, Taxi Riviera Maya, la empresa más honesta y confiable</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>TAXI DE CANCÚN A TULUM, SEGURO Y CONFIABLE</h2>
            <p>Más de 10 años brindando el servicio de Taxi desde y hacia Tulum de la manera más segura, rápida y confiable, Taxi Riviera Maya, la empresa más honesta y confiable.</p>
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/taxi-cancun-aeropuerto-banner.webp" type="image/webp">
                <img src="/assets/img/home/taxi-cancun-aeropuerto-banner.jpg" alt="La mejor empresa de taxi en la riviera maya" title="La mejor empresa de taxi en la riviera maya" loading="lazy" width="573" height="374">
            </picture>
        </div>
    </div>

    <div class="container highlights_items">
        <div class="top">
            <h2>Servicio de Traslado de Cancún a Tulum</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Servicio a hoteles en Tulum</p>
                        <h2>TRASLADO SEGURO A TULUM</h2>
                    </div>
                </div>
                <p>Disfruta de un servicio seguro y confiable, llegamos a cualquier hotel, resort, aeropuerto, parque temático o sitio arqueológico en Tulum, si está en el mapa podemos llevarte</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Seguridad y Comfort en todo momento</p>
                        <h2>TRASLADO CÓMODO, SEGURO Y CONFIABLE A TULUM</h2>
                    </div>
                </div>
                <p>Disfruta el viaje con las mejores camionetas en Tulum, cómodas y seguras, con choferes capacitados y con actitud de servicio. Todo tu viaje será monitoreado para garantizar tu seguridad y tranquilidad.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Taxi seguro de Cancún a Tulum</p>
                        <h2>EMPRESA CERTIFICADA POR EL AEROPUERTO DE CANCÚN</h2>
                    </div>
                </div>
                <p>Somos una empresa de Traslado registrada y con todos los permisos para operar dentro y fuera del aeropuerto de Cancún, por lo que siempre estaremos listos para llevarte a disfrutar de Tulum sin complicaciones.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Servicio confiable de Taxi del Aeropuerto de Cancún" title="Servicio confiable de Taxi del Aeropuerto de Cancún" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>Servicio seguro de Traslado a Tulum</h2>
            <p>¡Bienvenidos a Taxi Riviera Maya! Nos enorgullece ofrecer un servicio de traslado seguro y confiable a Tulum, uno de los destinos más fascinantes de la Riviera Maya. En Taxi Riviera Maya, la atención personalizada y la seguridad son valores fundamentales que nos caracterizan.</p>
            <p>Nuestros conductores altamente capacitados y con años de experiencia en el manejo de vehículos de transporte, son uno de los pilares fundamentales de nuestra empresa. Sabemos que la seguridad de nuestros clientes es primordial, por eso, todos nuestros vehículos son revisados regularmente para garantizar que estén en óptimas condiciones, puedes estar seguro de que llegarás a Tulum de manera segura y confiable.</p>
            <p>Además, nuestros vehículos están equipados con aire acondicionado y todos los servicios necesarios para garantizar una experiencia de viaje cómoda y relajada. ¡Así que no lo dudes más y reserva tu traslado a Tulum con Taxi Riviera Maya, donde la seguridad de nuestros clientes y la atención personalizada son nuestra prioridad!</p>
            <a href="#" class="btn" title="Reserva Ahora">RESERVA AHORA</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Servicios de Traslado desde y hacia Tulum</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Traslado a Tulum Privado" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Traslado a Tulum Privado</h3>
                <div>
                    <p>Servicio de Traslado desde y hacia Tulum, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para todas las zonas de Tulum.</p>
                </div>
                <p>Desde <span>$2,322 MXN</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                        <img src="/assets/img/services/suburban.png" alt="Cevrolet Suburban" title="Transporte de Lujo a Tulum" loading="lazy" width="343" height="196">
                    </picture>
                </div>                
                <h3>Transporte de Lujo a Tulum</h3>
                <div>
                    <p>Este transporte está disponible para todas las zonas de Tulum, el servicio se proporciona en una Suburban de Lujo o similar para hasta 5 pasajeros.</p>
                </div>
                <p>Desde <span>$5,400 MXN</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                        <img src="/assets/img/services/crafter.png" alt="VW Crafter" title="Transporte a Tulum para grupos" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Transporte a Tulum para grupos</h3>
                <div>
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en una Crafter para hasta 16 pasajeros o similar.</p>
                </div>
                <p>Desde <span>$5,400 MXN</span></p>
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
                            <p>Me sentí segura en todo momento, fué muy fácil encontrarlos en el aeropuerto, sin duda es de las mejores empresas de traslado</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container how_to_information">
        <div class="top">
            <h2>¿Cómo llegar de Cancún a Tulum?</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p><strong>Autobús</strong>: La forma más económica de viajar de Cancún a Tulum es en autobús. Hay varias compañías de autobuses que ofrecen servicios regulares entre ambas ciudades, incluyendo ADO, Mayab, y Oriente. Los boletos se pueden comprar en línea o en la estación de autobuses ADO de Cancún. El viaje suele durar alrededor de dos horas y media y el precio varía desde los $100 MXN hasta los $400 MXN según la compañía y la clase de boleto.</p>
                <p><strong>Colectivo</strong>: Otra opción económica es tomar un colectivo, que es un servicio de transporte compartido que recorre la carretera principal entre Cancún y Tulum. Estos vehículos suelen ser camionetas o vans y se pueden encontrar en la estación de autobuses de Cancún o en puntos de encuentro específicos en la ciudad. El precio es menor que el de un autobús ADO, pero el tiempo de viaje es más largo debido a que hace paradas frecuentes para recoger y dejar pasajeros a lo largo de todo el camino.</p>
                <p><strong>Taxi o traslado privado</strong>: Si se desea un viaje más cómodo y conveniente, se puede optar por tomar un taxi o contratar un servicio privado de transporte. Los taxis se pueden encontrar en el aeropuerto, la estación de autobuses de Cancún y en otros puntos de la ciudad, mientras que los servicios privados se pueden reservar con anticipación en línea o tomarlos directamente en el Aeropuerto. El precio será más elevado que el de un autobús o colectivo, pero se viajará con mayor comodidad y se pueden hacer paradas en el camino.</p>
                <p><strong>Automóvil rentado</strong>: Finalmente, si se renta un automóvil, se puede conducir de Cancún a Tulum. La carretera es de buena calidad y está bien señalizada, y hay varias opciones de estacionamiento en Tulum. Sin embargo, es importante tener en cuenta las regulaciones de tráfico y las normas de seguridad vial, especialmente en zonas de alta densidad turística.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/tulum/tulum.webp" type="image/webp">
                    <img src="/assets/img/destinations/tulum/tulum.jpg" alt="vista emblematica de Tulum con playa" title="Cómo llegar a Tulum" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Servicio de Traslado desde y hacia Tulum</h2>
            <p>Ofrecemos el servicio más completo de transporte a cualquier hotel o destino en Tulum o viceversa, desde cualquier destino en la Riviera Maya o Aeropuerto, brindamos un servicio completo siempre listo para llevarte a tu hotel o atracción favorita en Tulum.</p>
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
                <h2>Más que sólo un servicio de Traslado a Tulum</h2>
                <p>En Taxi Riviera Maya, no solo ofrecemos un servicio de traslado seguro y confiable a Tulum, sino que también nos enfocamos en brindar una experiencia de viaje única y memorable a nuestros clientes. Somos más que una empresa de traslados, somos un equipo comprometido con ofrecer un servicio de alta calidad y atención personalizada.</p>
                <p>En Taxi Riviera Maya, no solo nos enfocamos en llevar a nuestros clientes de un lugar a otro, sino también en brindarles una experiencia de viaje que supera sus expectativas. Por eso, ofrecemos diferentes opciones de traslado, desde traslados privados y de lujo.</p>
                <p>En Taxi Riviera Maya, también nos aseguramos de estar al tanto de los horarios de vuelos de nuestros clientes. Ofrecemos monitoreo de vuelos para garantizar que nuestros conductores estén allí para recogerte a tiempo, incluso si hay retrasos en tu vuelo. Y si necesitas asistencia en el aeropuerto, nuestros asesores y representantes están a tu disposición para brindarte atención y ayudarte en lo que necesites.</p>
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
            <h2>Preguntas Frecuentes sobre el servicio de Traslados</h2>
            <p>Te ayudamos a despejar tus dudas sobre el servicio de Traslados a Tulum</p>
        </div>
        <div class="bottom">
            <div>
                <h3>¿Cuánto cuesta el traslado de Cancún a Tulum?</h3>
                <div>
                    <p>El costo del traslado de Cancún a Tulum por parte de Taxi Riviera Maya es de 2000 MXN (112 USD), es un servicio para hasta 8 pasajeros por lo que si se divide el precio entre el número de pasajeros queda en 250 MXN (14 USD) por persona, el servicio es totalmente directo por ñp qie no hay paradas que no solicites durante el trayecto.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo me traslado de Cancún a Tulum?</h3>
                <div>
                    <p>Es bastante sencillo, puedes reservar fácilmente tu servicio de traslado desde está página o con un asesor a través de nuestro número de telefono, por whatsapp o el chat del sitio, estamos disponibles 24 horas con atención personalizada.</p>
                    <p>Una vez que llegues al aeropuerto, te estaremos esperando para trasladarte a Tulum, en caso de que te encuentres en algún otro lugar de la Riviera Maya, podemos llevarte a Tulum sin ningún inconveniente o a cualquier otra parte de la Riviera Maya.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuánto cobra el ADO del aeropuerto de Cancun a Tulum?</h3>
                <div>
                    <p>El costo del ADO desde el aeropuerto de Cancún a Tulum es de aproximadamente $230 MXN ($12 USD) por persona.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuánto cuesta un taxi del centro de Tulum a la playa?</h3>
                <div>
                    <p>El costo de un taxi del centro de Tulum a la playa puede variar según la distancia y la negociación que hagas con el conductor, pero en general puede costar alrededor de $200-2000 MXN ($20-200 USD).</p>
                </div>
            </div>
            <div>
                <h3>¿Cuánto cuestan el transporte de Cancún a Tulum?</h3>
                <div>
                    <p>El costo del transporte de Cancún a Tulum puede variar según el medio de transporte que elijas. En general, el transporte público es la opción más económica. Un autobús de línea ADO cuesta alrededor de $230 MXN ($12 USD) por persona, mientras que una combi de playa puede costar alrededor de $80-100 MXN ($4-5 USD) por persona. Un taxi puede ser la opción más cómoda, pero también la más costosa, con un precio promedio de $1900-3000 MXN ($90-160 USD) por trayecto.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuál es el medio de transporte más seguro en Tulum?</h3>
                <div>
                    <p>En Tulum, como en cualquier otro lugar, la seguridad en el transporte puede depender de varios factores, incluyendo las condiciones del tráfico, la infraestructura vial y la calidad de los vehículos y conductores. Sin embargo, el medio de transporte más seguro en Tulum es el servicio de traslados privado.</p>
                    <p>Empresas cómo Taxi Riviera Maya en Tulum se encuentran bien regulados y los conductores están obligados a cumplir con ciertos requisitos, como tener licencias de conducir válidas y no tener registros penales de ningún tipo. Además que al ser un servicio de traslado directo, no te expones a situaciones de peligro en la calle o durante el trayecto.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo andar en Tulum?</h3>
                <div>
                    <p>En Tulum, puedes andar en bicicleta, en taxi, en colectivo o caminar. Muchos visitantes optan por alquilar bicicletas o caminar para explorar el centro de Tulum, mientras que los taxis y colectivos son una buena opción para desplazarse a las playas y lugares más alejados.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué se necesita para ir a Tulum?</h3>
                <div>
                    <p>Para visitar Tulum como turista, se necesita un pasaporte válido y en algunos casos una visa de turista, dependiendo de la nacionalidad del viajero. Además, es importante llevar ropa cómoda y adecuada para el clima cálido y húmedo de la región. También se recomienda llevar repelente de insectos, protector solar y agua para mantenerse hidratado durante las actividades al aire libre.</p>
                </div>
            </div>
            <div>
                <h3>¿Cual es la distancia de Cancún a Tulum?</h3>
                <div>
                    <p>La distancia entre Cancún y Tulum es de aproximadamente 130 kilómetros. El tiempo de viaje en automóvil puede variar dependiendo del tráfico y las condiciones de la carretera, pero generalmente se tarda entre 1,5 y 2 horas en llegar.</p>
                    <p>Para el traslado, se puede tomar la carretera federal 307, que es la principal vía de comunicación que conecta Cancún con Tulum y otros destinos turísticos importantes en la Riviera Maya.</p>
                    <p>La carretera federal 307 está en buenas condiciones en la mayoría de los tramos, pero es importante tener precaución en algunas secciones donde puede haber baches o topes. Además, es común encontrar tráfico pesado en ciertas áreas, especialmente durante las horas pico o en temporadas turísticas.</p>
                    <p>Se recomienda contar con un servicio de traslado seguro y confiable, como un servicio de transporte privado o un taxi, para evitar cualquier problema y asegurar una llegada segura y cómoda a Tulum.</p>
                    <h3>¿Cual es la distancia de Playa del Carmen a Tulum?</h3>
                    <p>La distancia de Playa del Carmen a Tulum es de aproximadamente 64 kilómetros por carretera. El tiempo de viaje en automóvil suele ser de alrededor de 45-60 minutos, dependiendo del tráfico y las condiciones de la carretera.</p>
                    <h3>¿Hay servicio de Uber en Tulum?</h3>
                    <p>Sí, actualmente hay servicio de Uber en Tulum. Sin embargo, el uso de Uber puede ser limitado en ciertas áreas debido a las regulaciones locales y la competencia con los servicios de taxi locales. Además, en algunas zonas turísticas de Tulum, como la Zona Hotelera, es posible que el servicio de Uber sea menos frecuente debido a la alta demanda y la congestión del tráfico. Por lo tanto, te recomendamos planificar tu transporte con anticipación y considerar opciones adicionales como taxis locales o servicios de traslado privado para asegurarte de que tu viaje sea lo más cómodo y seguro posible.</p>
                    <h3>¿Hay aeropuerto en Tulum?</h3>
                    <p>No hay un aeropuerto en Tulum, pero el Aeropuerto Internacional de Cancún es la puerta de entrada más cercana a Tulum. El aeropuerto está ubicado a unos 120 kilómetros al norte de Tulum y es el segundo aeropuerto más grande de México después de la Ciudad de México. </p>
                </div>
            </div>
            <div>
                <h3>¿Qué lugares visitar en Tulum?</h3>
                <div>
                    <p>Tulum es un destino turístico popular en México, conocido por sus playas de arena blanca, su vibrante vida nocturna y su rica historia y cultura. A continuación, te presento algunos lugares que no debes perderte al visitar Tulum:</p>
                    <ol>
                        <li>
                            <h4>Zona Arqueológica de Tulum</h4>
                            <p>Uno de los principales atractivos turísticos de la ciudad, donde se encuentran las ruinas de una antigua ciudad Maya, situada en un acantilado con impresionantes vistas al Mar Caribe.</p>
                        </li>
                        <li>
                            <h4>Playa Paraíso</h4>
                            <p>Una de las playas más hermosas y populares de Tulum, con aguas cristalinas y arenas blancas.</p>
                        </li>
                        <li>
                            <h4>Cenote Dos Ojos</h4>
                            <p>Uno de los cenotes más famosos de la zona, con aguas cristalinas, formaciones de piedra caliza y opciones de buceo y snorkel.</p>
                        </li>
                        <li>
                            <h4>Tulum Pueblo</h4>
                            <p>El centro de la ciudad, donde se pueden encontrar tiendas de artesanías, restaurantes, bares y vida nocturna.</p>
                        </li>
                        <li>
                            <h4>Reserva de la Biosfera de Sian Ka'an</h4>
                            <p>Un área natural protegida que ofrece vistas impresionantes de la flora y fauna locales, así como actividades como paseos en bote y senderismo.</p>
                        </li>
                        <li>
                            <h4>Ruinas de Cobá</h4>
                            <p>Situadas a unos 45 minutos de Tulum, las ruinas de Cobá son otro sitio arqueológico importante con la pirámide más alta de la península de Yucatán.</p>
                        </li>
                        <li>
                            <h4>Xel-Ha Park</h4>
                            <p>Un parque temático acuático que ofrece una amplia gama de actividades, incluyendo nado con delfines, snorkel, paseos en bote y más.</p>
                        </li>
                    </ol>

                </div>
            </div>
            <div>
                <h3>¿Cual es la distancia de Playa del Carmen a Tulum?</h3>
                <div>
                    <p>La distancia de Playa del Carmen a Tulum es de aproximadamente 64 kilómetros por carretera. El tiempo de viaje en automóvil suele ser de alrededor de 45-60 minutos, dependiendo del tráfico y las condiciones de la carretera.</p>
                </div>
            </div>
            <div>
                <h3>¿Hay servicio de Uber en Tulum?</h3>
                <div>
                    <p>Sí, actualmente hay servicio de Uber en Tulum. Sin embargo, el uso de Uber puede ser limitado en ciertas áreas debido a las regulaciones locales y la competencia con los servicios de taxi locales. Además, en algunas zonas turísticas de Tulum, como la Zona Hotelera, es posible que el servicio de Uber sea menos frecuente debido a la alta demanda y la congestión del tráfico. Por lo tanto, te recomendamos planificar tu transporte con anticipación y considerar opciones adicionales como taxis locales o servicios de traslado privado para asegurarte de que tu viaje sea lo más cómodo y seguro posible.</p>
                </div>
            </div>
            <div>
                <h3>¿Hay aeropuerto en Tulum?</h3>
                <div>
                    <p>No hay un aeropuerto en Tulum, pero el Aeropuerto Internacional de Cancún es la puerta de entrada más cercana a Tulum. El aeropuerto está ubicado a unos 120 kilómetros al norte de Tulum y es el segundo aeropuerto más grande de México después de la Ciudad de México.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection