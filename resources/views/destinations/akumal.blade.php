@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/akumal.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/akumal.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Traslado Privado a Akumal",
          "image": [
            "https://taxirivieramaya.com/assets/img/schema/1x1.jpg",
            "https://taxirivieramaya.com/assets/img/schema/4x3.jpg",
            "https://taxirivieramaya.com/assets/img/schema/16x9.jpg"
           ],
          "description": "Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros)",
          "sku": "019004",
          "mpn": "029004",
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
            "url": "https://taxirivieramaya.com/transporte-cancun-a-akumal",
            "priceCurrency": "MXN",
            "price": 1944,
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
                <h1>Transporte de cancun a akumal</h1>
                <p>Las tarifas más bajas en transporte de Cancún a Akumal, traslado seguro y confiable.</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Transporte de Cancún a Akumal por Taxi Riviera Maya</h2>
            <p>Si planeas vacacionar en Akumal o la Riviera Maya y buscas un traslado seguro, c&oacute;modo y al mejor precio desde el Aeropuerto de Canc&uacute;n a Akumal, conf&iacute;a en Taxi Riviera Maya. Con m&aacute;s de una d&eacute;cada de experiencia, somos la opci&oacute;n m&aacute;s confiable.</p>
            <p>En Taxi Riviera Maya, te ofrecemos una variedad de servicios de transporte desde el Aeropuerto de Canc&uacute;n hacia Akumal. Nuestro compromiso es garantizar tu seguridad y comodidad con choferes profesionales y amables, llev&aacute;ndote sin complicaciones desde el aeropuerto hasta tu hotel en Akumal o la Riviera Maya.</p>
            <p>Contamos con una flota moderna y segura para asegurar un viaje suave. Reservar con nosotros significa m&aacute;s que un simple traslado; es una experiencia donde la excelencia y la atenci&oacute;n personalizada se entrelazan en cada kil&oacute;metro. Monitoreamos vuelos para ajustarnos a tu itinerario y, si necesitas asistencia adicional, nuestro equipo est&aacute; listo para brindarte atenci&oacute;n personalizada.</p>
            <p>Con Taxi Riviera Maya, inicia tus vacaciones con tranquilidad y conveniencia. Conf&iacute;a en nosotros para un transporte eficiente que marca la diferencia en tu llegada a Akumal. &iexcl;Reserva con nosotros y permite que tus vacaciones comiencen con una experiencia de transporte inigualable!.</p>
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/taxi-cancun-aeropuerto-banner.webp" type="image/webp">
                <img src="/assets/img/home/taxi-cancun-aeropuerto-banner.jpg" alt="imagen de camioneta de Taxi en Cancun aeropuerto" title="La mejor empresa de taxi en la riviera maya" loading="lazy" width="573" height="374">
            </picture>
        </div>
    </div>

    <div class="container highlights_items">
        <div class="top">
            <h2>Servicio de transporte de cancún a akumal</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Traslado a hoteles en Akumal</p>
                        <h2>TRANSPORTE A HOTELES EN AKUMAL</h2>
                    </div>
                </div>
                <p>Traslado a cualquier hotel, airbnb, resort o parque temático en Akumal y alrededores, llegamos a cualquier destino en Akumal y toda la Riviera maya</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Seguridad y Comodidad en todo momento</p>
                        <h2>TRASLADO A AKUMAL CÓMODO, SEGURO Y PUNTUAL</h2>
                    </div>
                </div>
                <p>Disfruta del mejor transporte de Cancún a Akumal a bordo de camionetas cómodas y seguras, con conductores capacitados y con actitud de servicio en todo momento.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Empresa Oficial de Transporte a Akumal</p>
                        <h2>EMPRESA OFICIAL EN AKUMAL</h2>
                    </div>
                </div>
                <p>Somos una empresa de Traslado de Cancún a Akumal  registrada y con todos los permisos para operar en cualquier hotel en Akumal, en toda la Riviera Maya y dentro del aeropuerto de Cancún.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Servicio confiable de Taxi del Aeropuerto de Cancún" title="Servicio confiable de Taxi del Aeropuerto de Cancún" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>¡Descubre la Excelencia en Transporte a Akumal con Taxi Riviera Maya!</h2>
            <p>En Taxi Riviera Maya, nuestra m&aacute;xima prioridad es garantizar que tu viaje a la Riviera Maya sea una experiencia encantadora desde el principio. Nuestro equipo de profesionales es amigable, confiable y est&aacute; dedicado a proporcionar el m&aacute;s alto nivel de servicio. Con la garant&iacute;a de cero contratiempos, puedes confiar en nosotros para asegurar un transporte sin interrupciones desde el Aeropuerto de Canc&uacute;n hasta Akumal.</p>
            <p>Como expertos en transporte desde el Aeropuerto de Canc&uacute;n hasta Akumal, siempre estamos preparados para satisfacer tus necesidades de viaje a tu conveniencia. Nuestro servicio de transporte a Akumal es ideal para individuos, familias y grupos de amigos que desean explorar las impresionantes playas de Akumal y crear recuerdos inolvidables. Nuestra flota cuenta con veh&iacute;culos modernos y con los mantenimientos correctos que garantizan un viaje c&oacute;modo y seguro.</p>
            <p>Elige Taxi Riviera Maya para todas tus necesidades de transporte a Akumal desde el Aeropuerto de Canc&uacute;n. Estamos seguros de ser la mejor decisi&oacute;n para asegurar un viaje sin estr&eacute;s y agradable. Conf&iacute;a en nosotros para que tu llegada a Akumal sea tan excepcional como el destino en s&iacute;. &iexcl;Reserva tu transporte con Taxi Riviera Maya y comienza tu experiencia en Akumal con el pie derecho!</p>
            <a href="#" class="btn" title="Reserva Ahora">RESERVA AHORA</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Servicios de Transorte en la Riviera Maya</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Transporte Privado" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Transporte Privado</h3>
                <div>
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros)</p>
                </div>
                <p>Desde <span>$1,944 MXN</span></p>
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
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros)</p>
                </div>
                <p>Desde <span>$4,050 MXN</span></p>
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
                    <p>Este transporte está disponible para todos nuestros destinos, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. (Los niños/infantes son considerados como pasajeros)</p>
                </div>
                <p>Desde <span>$4,050 MXN</span></p>
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
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Taxi Riviera Maya" title="MARIA H." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANA S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>El servicio privado de Taxi Riviera Maya superó mis expectativas. Conductores amables y atención personalizada. Una experiencia de transporte bastante cálida por parte del personal.</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Taxi Riviera Maya" title="CARLOS V." loading="lazy" width="60" height="60">
                            </picture>                            
                            <div>
                                <p>CARLOS V.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Taxi Riviera Maya ofrece un servicio privado a Akumal bastante asequible.Todo excelente y lo mejor: a un precio razonable. Lo usé durante toda mi estancia en la Riviera Maya.</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Taxi Riviera Maya" title="SOFÍA L." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>SOFÍA L.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Taxi Riviera maya redefine el servicio privado. Descubrí eficiencia y tarifas competitivas en mi traslado a Akumal. Ideal ir directamente a tu hotel.</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>    

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Taxi Riviera Maya" title="FELIPE G." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>FELIPE G.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Mi traslado a Akumal con Taxi Riviera maya fue privado y personalizado. Más que transporte, una solución en tu viaje. Profesionalismo y comodidad garantizados.</p>
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
            <h2>¿Cómo llegar de Cancún a Akumal?</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Para llegar del Aeropuerto Internacional de Canc&uacute;n a Akumal, una encantadora localidad costera en la Riviera Maya, tienes varias opciones de transporte que ofrecen comodidad y eficiencia. La distancia entre el aeropuerto y Akumal es de aproximadamente 100 kil&oacute;metros, y el tiempo de viaje var&iacute;a seg&uacute;n el medio de transporte elegido.</p>
                <p>La opci&oacute;n m&aacute;s conveniente pero m&aacute;s cara es tomar un taxi directamente desde el aeropuerto hasta Akumal. Los taxis est&aacute;n disponibles en la terminal de llegadas y ofrecen un servicio r&aacute;pido. Aseg&uacute;rate de acordar el precio con el conductor antes de iniciar el viaje, ya que suelen aumentar much&iacute;simo.</p>
                <p>Otra alternativa es reservar un servicio de transporte privado o compartido a Akumal. Varias compa&ntilde;&iacute;as operan en el aeropuerto y proporcionan traslados a destinos espec&iacute;ficos, incluido Akumal. Este servicio suele ser m&aacute;s barato que un taxi del Aeropuerto y ofrece la ventaja de la comodidad y la puntualidad.</p>
                <p>Si prefieres una opci&oacute;n m&aacute;s econ&oacute;mica, puedes utilizar el servicio de transporte p&uacute;blico. Desde el aeropuerto, toma un autob&uacute;s ADO hacia Playa del Carmen y luego toma otro autob&uacute;s que te lleve a Akumal. Esta opci&oacute;n puede llevar m&aacute;s tiempo debido a las paradas y los tiempos de espera, pero es una alternativa viable para quienes buscan una opci&oacute;n m&aacute;s econ&oacute;mica, adem&aacute;s de no llegan directo a tu hotel o destino en Akumal.</p>
                <p>Llegar de Canc&uacute;n a Akumal es f&aacute;cil y ofrece diversas opciones para adaptarse a tus preferencias y presupuesto. Ya sea que optes por un taxi, un servicio de transporte privado o el transporte p&uacute;blico, disfrutar&aacute;s de un viaje pintoresco hacia la hermosa costa de Akumal.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/akumal/akumal.webp" type="image/webp">
                    <img src="/assets/img/destinations/akumal/akumal.jpg" alt="Servicios de transporte en el aeropuerto de cancún a Akumal" title="Servicios de transporte en el aeropuerto de cancún a Akumal" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Servicio de traslado de cancún a akumal</h2>
            <p>Ofrecemos el servicio más completo de transporte a Akumal, desde cualquier destino en la Riviera Maya o Aeropuerto, brindamos un servicio completo siempre listo para llevarte a tu hotel, airbnb o atracción favorita en Akumal.</p>
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
                <h2>Transportación de cancún a akumal con taxi riviera maya</h2>
                <p>Cuando buscas un servicio&nbsp; confiable de transporte de Canc&uacute;n a Akumal, conf&iacute;a en Taxi Riviera Maya para una experiencia sin contratiempos. Nuestro servicio de traslados privado, ofrecen la comodidad que necesitas para llegar al hermoso destino de Akumal.</p>
                <p>Con Taxi Riviera Maya, no solo aseguras un servicio de calidad, sino tambi&eacute;n la garant&iacute;a de conductores profesionales que conocen la ruta y est&aacute;n comprometidos con tu seguridad y satisfacci&oacute;n. Al elegirnos, evitas complicaciones y tiempos de espera, ya que estamos listos para atenderte en la terminal de llegadas del aeropuerto.</p>
                <p>Nuestro servicio de transporte privado es una alternativa eficiente al taxi convencional, brind&aacute;ndote la tranquilidad de saber que tu viaje desde Canc&uacute;n hasta Akumal ser&aacute; c&oacute;modo y sin complicaciones. Adem&aacute;s, contamos con protocolos para garantizar nuestras tarifas y promociones, asegur&aacute;ndote una transacci&oacute;n justa y transparente desde el momento de hacer tu reserva.</p>
                <p>Conf&iacute;a en Taxi Riviera Maya para tu transporte de Canc&uacute;n a Akumal y experimenta un viaje sin estr&eacute;s hacia las hermosas playas de Akumal. Estamos aqu&iacute; para hacer que tu trayecto sea tan placentero como tu estancia en este destino paradis&iacute;aco.</p>
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
            <p>Te ayudamos a despejar tus dudas sobre el servicio de Traslados en Cancún</p>
        </div>
        <div class="bottom">
            <div>
                <h3>¿Cuáles son las principales atracciones turísticas en Akumal?</h3>
                <div>
                    <p>Akumal, ubicado en la Riviera Maya, ofrece un abanico de atracciones turísticas que despiertan la admiración de los visitantes. Con sus playas paradisíacas, Akumal es famoso por permitir el snorkel junto a majestuosas tortugas marinas. La laguna Yal-Ku añade una dimensión única al snorkel en aguas dulces con una variada vida acuática. El traslado de Cancún a Akumal se convierte en el inicio de una aventura que promete descubrimientos inolvidables en estas maravillas naturales.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo puedo llegar desde el Aeropuerto de Cancún a Akumal?</h3>
                <div>
                    <p>Para asegurar un traslado cómodo y seguro desde el Aeropuerto de Cancún a Akumal, optar por el servicio privado de Taxi Riviera Maya es la elección inteligente. Este servicio no solo garantiza comodidad y seguridad, sino también tarifas competitivas. Al llegar a Cancún, elegir un traslado eficiente se convierte en la clave para adentrarse en la experiencia única que ofrece Akumal.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuál es la mejor época para visitar Akumal?</h3>
                <div>
                    <p>La temporada seca, comprendida entre finales de noviembre y abril, se posiciona como la mejor época para visitar Akumal. Durante estos meses, el clima es agradable y las lluvias son menos frecuentes, proporcionando condiciones ideales para disfrutar de las actividades al aire libre y explorar la riqueza natural de Akumal. Este período se convierte en la ventana perfecta para planificar tu traslado desde Cancún a Akumal.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué medidas de conservación se implementan en Akumal para proteger la vida marina?</h3>
                <div>
                    <p>Akumal se erige como un bastión de conservación marina, implementando reglas estrictas para la observación de tortugas y promoviendo prácticas turísticas sostenibles. Estas medidas son esenciales para preservar la diversidad de la vida marina, incluyendo las emblemáticas tortugas. En tu traslado desde Cancún a Akumal, estarás ingresando a un entorno comprometido con la preservación del ecosistema marino.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuál es la ventaja que ofrece Taxi Riviera Maya para traslados a Akumal?</h3>
                <div>
                    <p>Cuando planeas tu traslado desde Cancún a Akumal, elegir Taxi Riviera Maya se traduce en optar por comodidad y eficiencia. Este servicio de traslado privado se distingue por ofrecer un transporte seguro y cómodo, asegurando tarifas competitivas que se adaptan a diversas necesidades de viaje. Desde el Aeropuerto de Cancún hasta las playas de Akumal, el servicio de Taxi Riviera Maya se erige como la puerta de entrada a una experiencia sin contratiempos.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué opciones de restaurantes destacados se encuentran en Akumal?</h3>
                <div>
                    <p>Akumal deleita a los paladares más exigentes con una oferta gastronómica diversa. Desde la atmósfera relajada de La Buena Vida hasta las delicias de Turtle Bay Bakery & Cafe, los restaurantes en Akumal ofrecen una experiencia culinaria única. Este destino se convierte en un festín para los sentidos, y explorar su oferta gastronómica es parte esencial de la travesía desde Cancún a Akumal.</p>
                </div>
            </div>
            <div>
                <h3>¿Puedo nadar con tortugas en Akumal?</h3>
                <div>
                    <p>Sin duda, una de las experiencias más extraordinarias en Akumal es la posibilidad de nadar con tortugas marinas en su hábitat natural. Este encuentro cercano con las majestuosas criaturas marinas es inolvidable y representa una de las principales razones para incluir a Akumal en tu itinerario de traslado desde Cancún.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué actividades familiares recomendarías en Akumal?</h3>
                <div>
                    <p>Akumal es un destino ideal para actividades familiares, ofreciendo desde emocionantes sesiones de snorkel hasta exploración de playas y visitas a cenotes cercanos. La presencia de parques temáticos como Xel-Há y Xcaret añade opciones de entretenimiento para todas las edades. Planificar actividades familiares en Akumal es parte esencial del viaje desde Cancún a este rincón paradisíaco.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo reservar el servicio de Taxi Riviera Maya para traslados a Akumal?</h3>
                <div>
                    <p>Reservar el servicio de Taxi Riviera Maya es un proceso sencillo y conveniente. Puedes realizarlo en línea a través de su sitio web oficial, asegurando así un traslado sin complicaciones desde el Aeropuerto de Cancún a Akumal. La asistencia telefónica también está disponible, proporcionando un toque personalizado a tu experiencia de reserva.</p>
                </div>
            </div>
            <div>
                <h3>¿Existen eventos o festivales destacados en Akumal durante el año?</h3>
                <div>
                    <p>Akumal cobra vida con eventos culturales y festivales que celebran la música, la gastronomía y la rica cultura local. Consultar el calendario de eventos al planificar tu visita te permitirá sumergirte plenamente en estas experiencias únicas. Integrar estos eventos a tu itinerario de traslado desde Cancún a Akumal añadirá un toque especial a tu viaje.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection