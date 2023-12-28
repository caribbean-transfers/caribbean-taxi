@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/puerto-morelos.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/puerto-morelos.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Taxi Privado en Costa Mujeres",
          "image": [
            "https://taxirivieramaya.com/assets/img/schema/1x1.jpg",
            "https://taxirivieramaya.com/assets/img/schema/4x3.jpg",
            "https://taxirivieramaya.com/assets/img/schema/16x9.jpg"
           ],
          "description": "Servicio de Taxi desde y hacia el Aeropuerto de Cancún, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para toda la Riviera Maya.",
          "sku": "019005",
          "mpn": "029005",
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
              "name": "Karla Ruiz"
            }
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 5,
            "reviewCount": 2896
          },
          "offers": {
            "@type": "Offer",
            "url": "https://taxirivieramaya.com/traslado-cancun-a-puerto-morelos",
            "priceCurrency": "MXN",
            "price": 954,
            "priceValidUntil": "2024-12-31",
            "itemCondition": "https://schema.org/UsedCondition",
            "availability": "https://schema.org/InStock"
          }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "image": [
                "https://taxirivieramaya.com/assets/img/schema/1x1.jpg",
                "https://taxirivieramaya.com/assets/img/schema/4x3.jpg",
                "https://taxirivieramaya.com/assets/img/schema/16x9.jpg"
            ],
            "name": "Taxi Riviera Maya",
            "hasMap": "https://www.google.com/maps/place/Taxi+Riviera+Maya/@21.0723366,-86.8489683,17z/data=!4m6!3m5!1s0x8f4c2be10a05f649:0xc59c79538ab20351!8m2!3d21.0723316!4d-86.8463934!16s%2Fg%2F11sbd81d37?entry=tts&shorturl=1",
            "sameAs": [
                "https://www.facebook.com/taxirivieramayaMX",
                "https://www.tripadvisor.com.mx/Attraction_Review-g150807-d10857097-Reviews-Taxi_Riviera_Maya-Cancun_Yucatan_Peninsula.html"
            ],
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Campestre Lol-be Alfredo V. Bonfil",
              "addressLocality": "Cancun",
              "addressRegion": "Quintana Roo",
              "postalCode": "77560",
              "addressCountry": "MX"
            },
            "review": {
              "@type": "Review",
              "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
              },
              "author": {
                "@type": "Person",
                "name": "Karla Ruiz"
              }
            },
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": 21.072476745380349,
              "longitude": -86.846425590797892
            },
            "url": "https://taxirivieramaya.com/traslado-cancun-a-puerto-morelos",
            "telephone": "+529982942389",
            "email": "bookings@taxirivieramaya.com",            
            "priceRange": "990 MXN - 1980 MXN",
            "openingHoursSpecification": [
                {
                "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                        "Sunday"
                    ],
                    "opens": "00:00",
                    "closes": "23:59"
                }
            ]
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
                <h1>Traslados de Cancún a Puerto Morelos</h1>
                <p>Encuentra las tarifas más bajas en traslados a Puerto Morelos.</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Traslado de Cancún a Puerto Morelos por Taxi Riviera Maya</h2>
            <p>Taxi Riviera Maya se distingue en Puerto Morelos por ofrecer un servicio de traslados excepcional, destacando nuestra atenci&oacute;n al cliente amable y respetuosa. Nuestra flota de veh&iacute;culos en constante mantenimiento y conductores profesionales garantiza traslados seguros y c&oacute;modos desde el aeropuerto hasta hoteles o destinos en la zona.</p>
            <p>La puntualidad y eficiencia son nuestra prioridad, y nos adaptamos a las necesidades individuales de los clientes, ya sea para traslados privados, grupales o corporativos. Facilitamos la reserva en l&iacute;nea para una planificaci&oacute;n sin complicaciones y estamos comprometidos a superar las expectativas en cada viaje.</p>
            <p>En Taxi Riviera Maya, creemos que la atenci&oacute;n al cliente es clave, y nuestro personal est&aacute; disponible para atender cualquier consulta o solicitud, asegurando una experiencia integral. Elija nuestra empresa para disfrutar de un servicio de traslados de calidad, donde la diferencia radica en nuestra atenci&oacute;n al cliente amable y respetuosa.</p>
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
            <h2>Traslado a puerto morelos rápido y seguro</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Traslado de Hotel a Hotel</p>
                        <h2>TRASLADO A HOTELES EN PUERTO MORELOS</h2>
                    </div>
                </div>
                <p>Traslado en Puerto Morelos a hoteles , ofrecemos servicios de traslado de tu hotel a cualquier hotel, airbnb, resort o parque temático en Puerto Morelos y la Riviera Maya.</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Seguridad en todo momento</p>
                        <h2>TRASLADO EN PUERTO MORELOS SEGURO</h2>
                    </div>
                </div>
                <p>Disfruta del mejor servicio de traslado a Puerto Morelos, cómodo, seguro, con choferes capacitados y con actitud de servicio en todo momento.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Empresa Oficial de Transporte en Puerto Morelos</p>
                        <h2>TRANSPORTE OFICIAL DE PUERTO MORELOS</h2>
                    </div>
                </div>
                <p>Somos la empresa de transporte oficial en Puerto Morelos, contamos con todos los permisos para operar en cualquier hotel, destino o sitio turístico en Puerto Morelos por lo que nunca habrá complicaciones ni inconvenientes.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Servicio confiable de Taxi del Aeropuerto de Cancún" title="Servicio confiable de Taxi del Aeropuerto de Cancún" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>¡El transporte a Puerto Morelos con el mejor trato al cliente!</h2>
            <p>En Taxi Riviera Maya, la atenci&oacute;n al cliente es nuestra prioridad en Puerto Morelos. Nos dedicamos a ofrecer experiencias de traslado excepcionales, donde cada interacci&oacute;n refleja nuestro compromiso con tu satisfacci&oacute;n.</p>
            <p>Desde el primer contacto hasta llegar a tu destino, nuestro equipo de atenci&oacute;n al cliente est&aacute; comprometido con hacer tu viaje c&oacute;modo y sin preocupaciones. Nuestros choferes, m&aacute;s que conductores, son embajadores de servicio, listos para recibirte con una sonrisa y garantizar tu comodidad.</p>
            <p>Nos adaptamos a tus necesidades, ya sea un traslado privado, grupal o corporativo. Tu satisfacci&oacute;n es nuestra m&aacute;xima prioridad, y trabajamos para personalizar cada servicio seg&uacute;n tus preferencias.</p>
            <p>En Taxi Riviera Maya, no solo te transportamos; te llevamos con atenci&oacute;n, cuidado y compromiso. Buscamos no solo ser un medio de transporte, sino crear recuerdos positivos. Elige Taxi Riviera Maya para un servicio de traslado donde la atenci&oacute;n al cliente es la clave de nuestra excelencia.</p>
            <a href="#" class="btn" title="Reserva Ahora">RESERVA AHORA</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Servicios de Taxi en el Aeropuerto de Cancún</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Taxi Aeropuerto Cancún Privado" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Taxi Aeropuerto Cancún Privado</h3>
                <div>
                    <p>Servicio de Taxi desde y hacia el Aeropuerto de Cancún, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para toda la Riviera Maya.</p>
                </div>
                <p>Desde <span>$539 MXN</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                        <img src="/assets/img/services/suburban.png" alt="Cevrolet Suburban" title="Transporte de Lujo" loading="lazy" width="343" height="196">
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
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Taxi Riviera Maya" title="Ana M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Ana M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>¡Experiencia de traslado excepcional en Puerto Morelos! Taxi Riviera Maya superó mis expectativas. Conductor amigable, vehículo cómodo y tarifa justa. La elección perfecta para llegar a cualquier destino en Puerto Morelos.</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Taxi Riviera Maya" title="Juan P." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Juan P.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>¡Impecable servicio de traslado en Puerto Morelos! Puntualidad, vehículo en excelentes condiciones y una relación calidad-precio inmejorable. Taxi Riviera Maya se destaca en el trayecto en Puerto Morelos.</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Taxi Riviera Maya" title="Liliana R." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Liliana R.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Recomiendo ampliamente Taxi Riviera Maya en Puerto Morelos. Servicio impecable desde el aeropuerto de Cancún. Tarifa accesible y atención de calidad. ¡La mejor opción en diciembre en Puerto Morelos!</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>    

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Taxi Riviera Maya" title="Fernando L." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Fernando L.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>A pesar de los desafíos en el aeropuerto, Taxi Riviera Maya fue un alivio en Puerto Morelos. Conductor amable, tarifa justa y servicio excepcional. Totalmente recomendado para llegar a cualquier destino en Puerto Morelos.</p>
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
            <h2>¿Cómo llegar de Cancún a Puerto Morelos?</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Para aquellos que buscan la ruta m&aacute;s conveniente y c&oacute;moda desde Canc&uacute;n a Puerto Morelos, el servicio de traslado de Taxi Riviera Maya ofrece una soluci&oacute;n confiable y eficiente. Partiendo desde el animado ambiente de Canc&uacute;n, nuestro equipo est&aacute; listo para llevar a los viajeros a la tranquila belleza de Puerto Morelos.</p>
                <p>El viaje comienza con la facilidad de reservar en l&iacute;nea, brindando a los viajeros la conveniencia de planificar su traslado con anticipaci&oacute;n. Una vez en el aeropuerto de Canc&uacute;n, experimentar&aacute;s una transici&oacute;n sin problemas, ya que nuestros conductores profesionales y amigables estar&aacute;n esperando para recibirte.</p>
                <p>La ruta a Puerto Morelos se transforma en una experiencia paradisiaca a medida que te sumerges en el paisaje costero. Nuestros veh&iacute;culos bien mantenidos aseguran un viaje c&oacute;modo, permiti&eacute;ndote relajarse y disfrutar del trayecto. Durante el recorrido, nuestros conductores, conocedores de la zona, pueden proporcionar informaci&oacute;n sobre lugares de inter&eacute;s y responder a cualquier pregunta que puedas tener sobre Puerto Morelos.</p>
                <p>La puntualidad es nuestra prioridad, garantizando que llegues a tu destino en Puerto Morelos sin contratiempos. Ya sea que tu visita sea para disfrutar de sus hermosas playas, explorar los arrecifes de coral o sumergirte en la cultura local, nuestro servicio de traslado se adapta a tus necesidades y te deja justo donde quieres estar en Puerto Morelos.</p>
                <p>En resumen, el viaje de Canc&uacute;n a Puerto Morelos con Taxi Riviera Maya es m&aacute;s que un traslado; es una experiencia cuidadosamente dise&ntilde;ada para que disfrutes cada momento de tu viaje. Conf&iacute;a en nosotros para llevarte de manera segura y c&oacute;moda a descubrir la encantadora belleza de Puerto Morelos.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/cancun/cancun.webp" type="image/webp">
                    <img src="/assets/img/destinations/cancun/cancun.jpg" alt="Servicios de transporte en el aeropuerto de cancún" title="Servicios de transporte en el aeropuerto de cancún" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Servicio de transporte en puerto morelos</h2>
            <p>Si estás planeando tu traslado a Puerto Morelos no busques más. En Taxi Riviera Maya, nos especializamos en brindar el servicio de transporte más completo y confiable. Desde cualquier destino en la Riviera Maya o el Aeropuerto, nuestro equipo está siempre listo para llevarte a tu hotel o destino favorito en Puerto Morelos.</p>
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
                <h2>Puerto Morelos: el lugar ideal para tus vacaciones</h2>
                <p>Puerto Morelos, ubicado en la Riviera Maya de M&eacute;xico, es un destino tur&iacute;stico popular que atrae a visitantes de todo el mundo. Aunque es conocido por su ambiente relajado y encanto aut&eacute;ntico, tambi&eacute;n ofrece una variedad de actividades y lugares de inter&eacute;s que atraen a los turistas. Algunos de los destinos favoritos que suelen visitar los turistas en Puerto Morelos incluyen:</p>
                <p><strong>Arrecife de Puerto Morelos:</strong> Este es el segundo arrecife de coral m&aacute;s grande del mundo y una atracci&oacute;n imperdible para los amantes del buceo y el snorkel. Los visitantes pueden explorar la rica vida marina, incluyendo coloridos corales y peces tropicales.</p>
                <p><strong>Jard&iacute;n Bot&aacute;nico Dr. Alfredo Barrera Mar&iacute;n:</strong> Este jard&iacute;n bot&aacute;nico es un refugio tranquilo que alberga una impresionante variedad de plantas nativas de la regi&oacute;n. Los visitantes pueden dar paseos relajantes mientras aprenden sobre la flora local y disfrutan de la naturaleza.</p>
                <p><strong>Pueblo de Puerto Morelos: </strong>El pueblo en s&iacute; mismo es encantador, con su faro ic&oacute;nico y su muelle de pesca. Los turistas pueden disfrutar de paseos por la playa, explorar los mercados locales y probar la aut&eacute;ntica cocina mexicana en los restaurantes y puestos de comida.</p>
                <p><strong>Cenotes:</strong> La Riviera Maya es famosa por sus cenotes, y Puerto Morelos no es la excepci&oacute;n. Estos pozos naturales de agua dulce son perfectos para nadar y practicar esn&oacute;rquel, y algunos de los m&aacute;s populares cerca de Puerto Morelos incluyen el Cenote La Noria y el Cenote Verde Lucero.</p>
                <p><strong>Parque Nacional Arrecife de Puerto Morelos: </strong>Este parque marino protegido ofrece oportunidades para practicar snorkel y buceo en &aacute;reas designadas. Es una manera fant&aacute;stica de experimentar la belleza del arrecife mientras se preserva su fragilidad.</p>
                <p><strong>Reserva de la Biosfera Sian Ka'an: </strong>Aunque est&aacute; un poco m&aacute;s alejada, la Reserva de la Biosfera Sian Ka'an es un destino excepcional para aquellos que buscan experiencias m&aacute;s naturales. La reserva cuenta con una variedad de ecosistemas, desde manglares hasta playas v&iacute;rgenes.</p>
                <p><strong>Actividades acu&aacute;ticas: </strong>Puerto Morelos ofrece una amplia gama de actividades acu&aacute;ticas, como paseos en bote, pesca deportiva, kayak y m&aacute;s. Los turistas pueden disfrutar del Mar Caribe de diversas maneras, ya sea relaj&aacute;ndose en la playa o participando en emocionantes aventuras acu&aacute;ticas.</p>
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
            <h2>Preguntas frecuentes sobre morelos</h2>
            <p>Te ayudamos a despejar tus dudas sobre Puerto Morelos</p>
        </div>
        <div class="bottom">
            <div>
                <h3>¿Cuáles son los principales lugares turísticos en Puerto Morelos?</h3>
                <div>
                    <p>Puerto Morelos es conocido por su arrecife de coral, el segundo más grande del mundo, ideal para actividades de buceo y snorkel. Además, el Faro Inclinado y el Parque Nacional Arrecife de Puerto Morelos son atracciones populares.</p>
                </div>
            </div>
            <div>
                <h3>¿Es Puerto Morelos considerado un destino seguro para los turistas?</h3>
                <div>                    
                    <p>Sí, generalmente se considera que Puerto Morelos es un destino seguro para los turistas. Sin embargo, es recomendable tomar precauciones habituales y estar atento a las indicaciones locales.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son algunas opciones de alojamiento recomendadas en Puerto Morelos?</h3>
                <div>
                    <p>Entre las opciones recomendadas se encuentran el Now Sapphire Riviera Cancun y el Dreams Riviera Cancun Resort & Spa, ambos resorts de lujo frente al mar.</p>
                </div>
            </div>
            <div>
                <h3>¿Hay servicios de taxi disponibles en Puerto Morelos?</h3>
                <div>
                    <p>Sí, Puerto Morelos cuenta con servicios de taxi que facilitan el transporte dentro del área y hacia destinos cercanos.</p>
                </div>
            </div>
            <div>
                <h3>¿Existe servicio de Uber en Puerto Morelos?</h3>
                <div>
                    <p>No, actualmente no hay servicio de Uber en Puerto Morelos. Los taxis locales son la principal opción de transporte terrestre.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuál es la mejor forma de llegar a Puerto Morelos desde el Aeropuerto Internacional de Cancún?</h3>
                <div>
                    <p>La forma más conveniente es tomar un traslado privado, un taxi o alquilar un automóvil. También hay servicios de autobús que conectan el aeropuerto con la Riviera Maya.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son los mejores restaurantes en Puerto Morelos para disfrutar de la cocina local?</h3>
                <div>
                    <p>Algunas recomendaciones incluyen John Gray's Kitchen, un restaurante de mariscos, y La Sirena, conocido por su auténtica cocina mexicana.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué actividades acuáticas se pueden realizar en Puerto Morelos además de buceo y snorkel?</h3>
                <div>
                    <p>Los visitantes pueden disfrutar de paseos en kayak, pesca deportiva y tours en catamarán. La playa de Puerto Morelos también es perfecta para relajarse.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son las opciones de entretenimiento nocturno en Puerto Morelos?</h3>
                <div>
                    <p>Puerto Morelos ofrece un ambiente más tranquilo, pero hay bares y restaurantes con música en vivo y eventos especiales. El Jardín Botánico Dr. Alfredo Barrera Marín también organiza eventos culturales.</p>
                </div>
            </div>
            <div>
                <h3>¿Hay opciones de vida nocturna en Puerto Morelos?</h3>
                <div>
                    <p>Si bien Puerto Morelos no es conocido por su vida nocturna vibrante, hay algunos lugares donde se puede disfrutar de música en vivo y cócteles.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son las opciones de transporte público disponibles en Puerto Morelos?</h3>
                <div>
                    <p>El transporte público en Puerto Morelos incluye autobuses que conectan la ciudad con destinos cercanos. Sin embargo, la mayoría de los turistas optan por taxis o servicios de traslado privado.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son las medidas de conservación en la Reserva de la Biosfera Sian Ka'an cerca de Puerto Morelos?</h3>
                <div>
                    <p>Se espera que los visitantes respeten las reglas de conservación, como evitar tocar la vida silvestre, seguir los senderos designados y no dejar basura.</p>
                </div>
            </div>
            <div>
                <h3>¿Se pueden realizar excursiones desde Puerto Morelos a las ruinas arqueológicas cercanas?</h3>
                <div>
                    <p>Sí, es posible hacer excursiones a las ruinas arqueológicas de Tulum y Cobá desde Puerto Morelos.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué opciones de compras hay en el centro de Puerto Morelos?</h3>
                <div>
                    <p>El centro de Puerto Morelos cuenta con tiendas locales donde los turistas pueden adquirir artesanías, ropa y recuerdos.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo es el clima en Puerto Morelos durante diferentes épocas del año?</h3>
                <div>
                    <p>El clima en Puerto Morelos es subtropical con temperaturas agradables durante la mayor parte del año. La temporada de lluvias va de junio a octubre, mientras que la temporada seca va de noviembre a mayo.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection