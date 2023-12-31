@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/cancun.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/cancun.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Cancun Airport Taxi",
          "image": [
            "https://caribbean-taxi.com/assets/img/schema/1x1.jpg",
            "https://caribbean-taxi.com/assets/img/schema/4x3.jpg",
            "https://caribbean-taxi.com/assets/img/schema/16x9.jpg"
           ],
          "description": "Cab service to and from Cancun Airport, the service is provided in a VW Transporter for up to 8 passengers. Available for the entire Riviera Maya.",
          "sku": "019001",
          "mpn": "029001",
          "brand": {
            "@type": "Brand",
            "name": "Caribbean Taxi"
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
            "url": "https://caribbean-taxi.com/cancun-airport-transportation",
            "priceCurrency": "USD",
            "price": 29,
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
                <h1>The best Cancun Airport Taxi only in Caribbean Taxi</h1>
                <p>Best prices in Cancun Airport Transportation to any destination or hotel are here!</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Caribbean Taxi: The Cancun Airport Taxi Certified Company </h2>
            <p>Experience top-notch transfers with Caribbean Taxi, a certified company for Cancun Airport Transportation and Cancun Airport Taxi services. We take pride in delivering a reliable and stress-free experience, ensuring your vacation begins on the best note possible. With our transparent and regulated rates, you can plan your budget ahead of time, avoiding any unwelcome surprises upon reaching your destination.</p>
            <p>Our unwavering commitment to punctuality sets us apart. Our professional drivers will be there for you on time, meticulously monitoring your flight for any changes in arrival time. Recognizing the importance of flexibility and confidence in travel, we offer the option to pay upon arrival, providing assurance that your service will be ready and waiting without any pre-trip concerns.</p>
            <p>Safety is our paramount concern. In addition to flight monitoring and regulated rates, we include traveler's insurance during your transfer, offering complete peace of mind throughout your vacation. Choose Caribbean Taxi for a reliable and customer-centric experience that ensures your transfer is as enjoyable as your vacation destinations. Travel with us and embark on your vacation with a positive and stress-free start!</p>
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/taxi-cancun-aeropuerto-banner.webp" type="image/webp">
                <img src="/assets/img/home/taxi-cancun-aeropuerto-banner.jpg" alt="Passenger van with Caribbean Taxi branding" title="Passenger van with Caribbean Taxi branding" loading="lazy" width="573" height="374">
            </picture>
        </div>
    </div>

    <div class="container highlights_items">
        <div class="top">
            <h2>Reasons to choose caribbean taxi</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Best Cancun Airport Transportation</p>
                        <h2>TRANSFER FROM CANCUN AIRPORT</h2>
                    </div>
                </div>
                <p>Explore seamless transfers to every hotel or destination across the Riviera Maya. Our transfer services extend to every corner of this breathtaking region. If it's on the map, rest assured, we'll get you there with ease and comfort.</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Always Safe & Reliable</p>
                        <h2>RELIABLE AND SAFE TAXI</h2>
                    </div>
                </div>
                <p>Experience the finest transfer service to any destination in the Riviera Maya, characterized by comfort, safety, and reliability. Our skilled drivers are dedicated to providing an awesome service, ensuring your journey is not just a transfer but a delightful experience.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Official Cancun Airport Transportation Company</p>
                        <h2>OFFICIAL AND CERTIFIED COMPANY</h2>
                    </div>
                </div>
                <p>As the authorized transportation company at Cancun Airport, we possess all the necessary permits to operate seamlessly across every hotel, destination, and tourist site in Cancun and the Riviera Maya. This ensures a hassle-free and smooth experience for our customers, with no complications or inconveniences throughout their journey. Choose us for reliable and officially sanctioned transportation, guaranteeing peace of mind from the moment you land at Cancun Airport.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Reliable Cancun Airport Taxi Service" title="Reliable Cancun Airport Taxi Service" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>Discover unrivaled transportation service in Cancun with the most exceptional customer service!</h2>
            <p>Caribbean Taxi stands out in delivering a comprehensive and welcoming transfer service tailored to exceed your expectations. Our commitment lies in providing a travel experience that not only prioritizes efficiency and safety but also adds a touch of warmth and personalization for each of our valued clients.</p>
            <p>Easily identifiable by our distinctive orange uniforms, you'll find us at Cancun Airport, ready to make your arrival both welcoming and hassle-free. At Caribbean Taxi, our dedicated team ensures that your journey from the airport to your destination is seamless and enjoyable.</p>
            <p>Whether you're embarking on a vacation or a business trip, entrust Caribbean Taxi for a transfer service that places your comfort and satisfaction at the forefront. Experience the distinction of traveling with us, where complete and friendly service is not just a commitment but a promise. We eagerly anticipate welcoming you at the airport, ready to take you to your destination with a genuine smile and utmost professionalism!</p>
            <a href="#" class="btn" title="BOOK NOW">BOOK NOW</a>
        </div>
    </div>

    <div class="container our_services">
        <div class="top">
            <h2>Our transportation services</h2>
        </div>
        <div class="bottom">

            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/van.webp" type="image/webp">
                        <img src="/assets/img/services/van.png" alt="Van de pasajeros" title="Private Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Private Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a VW Transporter for up to 8 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$29 USD</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                        <img src="/assets/img/services/suburban.png" alt="Cevrolet Suburban" title="Luxury Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>                
                <h3>Luxury Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a Suburban for up to 5 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$78 USD</span></p>
            </div>
            <div>
                <div class="image">
                    <picture>
                        <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                        <img src="/assets/img/services/crafter.png" alt="VW Crafter" title="Group Transportation" loading="lazy" width="343" height="196">
                    </picture>
                </div>
                <h3>Group Transportation</h3>
                <div>
                    <p>This transportation is available for all our destinations, the service is provided in a VW Transporter for up to 12 passengers (children/infants are considered as passengers).</p>
                </div>
                <p>From <span>$78 USD</span></p>
            </div>

        </div>
    </div>

    <div class="light-gray">
        <div class="container items-highlights">
            <div>
                <p>21k+</p>
                <p>Happy customers</p>
            </div>
            <div>
                <p>21517</p>
                <p>Operated transfers</p>
            </div>
            <div>
                <p>10622</p>
                <p>Available destinations</p>
            </div>
            <div>
                <p>24Hrs</p>
                <p>Service hours</p>
            </div>
        </div>
    </div>

    <div class="container rates_information">
        <div class="top">
            <h2>TAXI SERVICE ZONE RATES</h2>
        </div>
        <div class="bottom">
            <table class="table table-striped table-responsive">
                <caption>
                    Taxi Service Prices by Destination
                </caption>
                <thead>
                    <tr>
                        <th rowspan="2" scope="col" class="destino">Destination</th>
                        <th colspan="2">
                            Private Taxi<br>
                            1-8 passengers
                        </th>
                        <th colspan="2">
                            Luxury Taxi<br>
                            1-5 passengers
                        </th>
                        <th colspan="2">
                            Taxi for Groups<br>
                            1-16 passengers
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
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$539 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$1,079 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$1,404 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$2,718 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$1,404 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$2,718 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Cancun Hotel Zone</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$539 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$1,079 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$1,404 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$2,718 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$1,079 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$2,718 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Morelos</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$990 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$1,880 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$2,080 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$4,060 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$1,880 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$3,660 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Playa Mujeres</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,100 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$2,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$2,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$4,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$2,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$4,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Juárez</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$850 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$1,600 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$1,800 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$3,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$1,600 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$3,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Playa del Carmen</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,500 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$2,900 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$3,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$6,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$2,900 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$5,700 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Costa Mujeres</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,100 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$2,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$2,718 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$4,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$2,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$4,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Cozumel</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,404 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$2,718 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$2,900 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$5,700 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$2,718 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$5,400 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Puerto Aventuras</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,600 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$3,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$3,300 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$6,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$3,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$6,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Akumal</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$1,800 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$3,500 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$3,700 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$7,300 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$3,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$6,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$2,322 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$4,554 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$5,400 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$10,620 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$4,554 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Mahahual</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$5,600 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$11,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$11,404 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$22,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$11,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$22,100 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Holbox</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$5,200 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$10,300 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$10,620 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$20,900 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$10,300 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$20,500 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Valladolid</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$7,800 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$15,500 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$15,700 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$31,404 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$15,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$30,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Merida</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$9,800 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$17,500 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$17,700 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$32,718 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$17,500 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$30,900 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Bacalar</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Sencillo)">$5,600 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Redondo)">$11,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$11,100 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$22,100 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$11,404 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$22,500 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Coba</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Sencillo)">$2,322 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 3 Pasajeros (Redondo)">$4,554 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$5,400 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$10,620 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$4,554 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum Hotel Zone</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$2,322 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$4,554 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$5,400 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$10,620 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$4,554 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$10,620 MXN</td>
                    </tr>
                    <tr>
                        <td><strong>Tulum Arco</strong></td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">$2,322 MXN</td>
                        <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">$4,554 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (One Way)">$5,400 MXN</td>
                        <td data-label="Luxury Taxi" data-sublabel="1 - 6 Passengers (Round Trip)">$10,620 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (One Way)">$4,554 MXN</td>
                        <td data-label="Taxi for Groups" data-sublabel="1 - 16 Passengers (Round Trip)">$10,620 MXN</td>
                    </tr>
                </tbody>
            </table>            
        </div>
    </div>

    <div class="reviews_information">
        <div class="mask"></div>
        <div class="container">
            <div class="top">
                <h2>Comments from our customers</h2>
                <h3>Discover why our customers choose us</h3>
            </div>
            <div class="bottom">
                <div class="write_review">
                    <div>
                        <p class="rating">Rating</p>
                        <p class="rating_count">4.7 <span>4107 comments</span></p>
                    </div>
                    <a title="Escribir comentario" target="_blank" href="https://g.page/r/CRiPQCgp1RMmEB0/review">Write a comment</a>                  
                </div>
                <div class="items">

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Caribbean Taxi" title="Maria G" loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Maria G</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Embarked on an exceptional transfer journey with Caribbean Taxi at Cancun Airport! The distinctive orange booth was a beacon of relief upon arrival, ensuring a seamless experience. The driver, dressed in the unmistakable orange uniform, greeted us warmly. The ride was not only comfortable but also came with a fair fare, making Caribbean Taxi the ultimate choice for reaching any destination from Cancun Airport.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Caribbean Taxi" title="Julia T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Julia T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Flawless transfer service awaited me with Caribbean Taxi at Cancun Airport! The effortless discovery of the orange uniform affirmed my decision's correctness. Punctuality surpassed expectations, the vehicle gleamed in top-notch condition, and the value for money was unparalleled. Caribbean Taxi not only excels in service but also in the simplicity of locating them at Cancun Airport, setting them apart.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Caribbean Taxi" title="Eleanor S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Eleanor S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>My enthusiastic recommendation goes to Caribbean Taxi. From touchdown at Cancun Airport, the distinctive orange booth stood out, making it effortlessly noticeable. The fare was reasonable, and the service showcased a commendable quality. Undoubtedly the premier choice, their presence at Cancun Airport significantly streamlined the entire process.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>    

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Caribbean Taxi" title="Daniela M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Daniela M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Amidst the airport challenges, Caribbean Taxi emerged as a relieving presence. Their easily recognizable booth and orange uniform, coupled with the friendly driver and fair fare, made the experience worthwhile. Highly endorsed for reaching any destination from Cancun Airport, especially for those who appreciate the convenience of locating them effortlessly at the airport.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>      

                </div>
            </div>
        </div>
    </div>

    <div class="container how_to_information">
        <div class="top">
            <h2>Where to Find Us at Cancun Airport?</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>As you step into the Cancun airport, Caribbean Taxi awaits you at our distinctive orange booth strategically located within Terminals 2, 3, and 4. Keep an eye out for our team dressed in vibrant orange uniforms, serving as a unique and inviting landmark to seamlessly guide you. Whether you're traveling for business or leisure, our prime spot in Terminal 2 ensures a convenient meeting point, easing your transition from the airport to your selected destination.</p>
                <p>Rest assured, our dedicated team is ready to offer assistance, ensuring a smooth and delightful journey from the moment you touch down. From our easily recognizable orange booth in Terminal 2 to the welcoming demeanor of our team, Caribbean Taxi is dedicated to ensuring your airport experience is enjoyable and stress-free, setting the stage for a remarkable stay in the stunning Cancun region.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/cancun/cancun.webp" type="image/webp">
                    <img src="/assets/img/destinations/cancun/cancun.jpg" alt="Where to Find Us at Cancun Airport?" title="Where to Find Us at Cancun Airport?" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Transportation service in the riviera maya</h2>
            <p>When it comes to your transfer to Cancun, count on Caribbean Taxi for a service that is both reliable and exceptional. Our specialization lies in offering the most comprehensive and trustworthy transportation service throughout the region. Whether you're arriving at the Airport or any destination within Cancun, our dedicated team is prepared to seamlessly transport you to your hotel or preferred location in the city. Choose Caribbean Taxi for a transfer experience that guarantees comfort and security, ensuring a smooth and delightful beginning to your stay in Cancun. Transform your arrival into a hassle-free experience with Caribbean Taxi!.</p>
        </div>
        <div class="bottom">
            <div>
                <a href="/cancun-to-tulum-shuttle" title="Tulum Transportation">
                    <picture>
                        <source srcset="/assets/img/destinations/tulum-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/tulum-destino.jpg" alt="Tulum Transportation" title="Tulum Transportation" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/cancun-to-tulum-shuttle" title="Tulum Transportation">Tulum Transportation</a></h3>
                    <p>Enjoy a safe, fast and reliable Tulum Transportation service. Estimated transfer time from Cancun is 1 hour and 40 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/transportation-cancun-airport-to-playa-del-carmen" title="Transportation to Playa del Carmen">
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen-destino.webp" type="image/webp">
                        <img src="/assets/img/destinations/playa-del-carmen-destino.jpg" alt="Transportation to Playa del Carmen" title="Transportation to Playa del Carmen" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/transportation-cancun-airport-to-playa-del-carmen" title="Transportation to Playa del Carmen">Transportation to Playa del Carmen</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Playa del Carmen. Estimated transfer time from Cancun is 55 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/cancun-airport-transportation" title="Cancun Airport Taxi">
                    <picture>
                        <source srcset="/assets/img/destinations/cancun-zona-hotelera.webp" type="image/webp">
                        <img src="/assets/img/destinations/cancun-zona-hotelera.jpg" alt="Cancun Airport Taxi" title="Cancun Airport Taxi" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/cancun-airport-transportation" title="Cancun Airport Taxi">Cancun Airport Taxi</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to the Hotel Zone. Estimated transfer time from the airport to the Hotel Zone is 30 minutes.</p>
                </div>
            </div>
            <div>
                <a href="/cancun-to-akumal-shuttle" title="Akumal Shuttle">
                    <picture>
                        <source srcset="/assets/img/destinations/destino-akumal.webp" type="image/webp">
                        <img src="/assets/img/destinations/destino-akumal.jpg" alt="Akumal Shuttle" title="Akumal Shuttle" loading="lazy" width="373" height="260">
                    </picture>
                </a>
                <div>
                    <h3><a href="/cancun-to-akumal-shuttle" title="Akumal Shuttle">Akumal Shuttle</a></h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Akumal. Estimated transfer time from Cancun to Akumal is 1 hour and 40 minutes.</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/puerto-morelos-destino-taxi.webp" type="image/webp">
                    <img src="/assets/img/destinations/puerto-morelos-destino-taxi.jpg" alt="Transportation to Puerto Morelos" title="Transportation to Puerto Morelos" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Transportation to Puerto Morelos</h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Puerto Morelos. Estimated transfer time from Cancun is 30 minutes.</p>
                </div>
            </div>
            <div>
                <picture>
                    <source srcset="/assets/img/destinations/destino-puerto-aventuras.webp" type="image/webp">
                    <img src="/assets/img/destinations/destino-puerto-aventuras.jpg" alt="Transportation to Puerto Aventuras" title="Transportation to Puerto Aventuras" loading="lazy" width="373" height="260">
                </picture>
                <div>
                    <h3>Transportation to Puerto Aventuras</h3>
                    <p>Enjoy a safe, fast and reliable transfer service to Puerto Aventuras. Estimated transfer time from Cancun is 1 hour and 20 minutes.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container additional_information">
        <div class="bottom">
            <div class="left">                
                <h2>Caribbean Taxi: Your Trusted Partner in Cancun</h2>
                <p>Caribbean Taxi stands as more than just a transportation service; it embodies a dedication to excellence in customer care and satisfaction. As a distinguished choice in Cancun, Caribbean Taxi goes above and beyond to prioritize the needs and comfort of every traveler. Our commitment emanates from a sincere spirit of friendliness and hospitality, ensuring that your journey with us is not merely a ride but a delightful experience.</p>
                <p>What distinguishes Caribbean Taxi is our unwavering commitment to placing the customer at the forefront. From the moment you make a booking until you reach your destination, our team is devoted to providing a seamless and enjoyable experience. Our drivers, easily recognizable in their distinctive orange uniforms, epitomize the welcoming essence of Caribbean Taxi. Whether you're arriving at the airport or immersing yourself in the lively streets of Cancun, our dedication to hospitality ensures that you don't just feel like a passenger but a valued guest throughout your journey. Opt for Caribbean Taxi for a transportation experience that seamlessly blends efficiency with a warm welcome, making your time in Cancun truly unforgettable.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/home/client.webp" type="image/webp">
                    <img src="/assets/img/home/client.png" alt="More than just a cab service at Cancun Airport" title="More than just a cab service at Cancun Airport" loading="lazy" width="390" height="481">
                </picture>
            </div>
        </div>
    </div>

    <div class="container faqs_section">
        <div class="top">
            <h2>Caribbean taxi: cancun airport transportation Faq's</h2>
            <p>Navigating uncertainties about Caribbean Taxi? Allow us to provide comprehensive clarity on some frequently asked questions:</p>
        </div>
        <div class="bottom">
            <div>
                <h3>Where can I find Caribbean Taxi at Cancun Airport?</h3>
                <div>
                    <p>Caribbean Taxi is conveniently positioned at our prominent orange booth in Terminals 2, 3, and 4 at Cancun Airport. Look for our easily identifiable spot for a smooth meeting point.</p>
                </div>
            </div>
            <div>
                <h3>Do I need to book in advance, or can I find a taxi on-site?</h3>
                <div>
                    <p>While on-site availability is possible, we highly recommend booking in advance to ensure a guaranteed and seamless experience. This way, you can start your journey without any uncertainties.</p>
                </div>
            </div>
            <div>
                <h3>Are your drivers easily identifiable?</h3>
                <div>
                    <p>Yes, our drivers stand out in vibrant orange uniforms, ensuring easy recognition and fostering a welcoming atmosphere. You'll have no trouble spotting our team ready to assist you.</p>
                </div>
            </div>
            <div>
                <h3>Can I pay for the service upon arrival in Cancun?</h3>
                <div>
                    <p>Absolutely, we offer the flexibility of payment upon arrival, providing you with the convenience and assurance that your service will be ready and waiting without any pre-trip concerns.</p>
                </div>
            </div>
            <div>
                <h3>What sets Caribbean Taxi apart from other transportation services?</h3>
                <div>
                    <p>Caribbean Taxi distinguishes itself through an unwavering commitment to customer satisfaction. We pride ourselves on blending efficiency with a warm and welcoming experience, ensuring your journey is not just a ride but a delightful one.</p>
                </div>
            </div>
            <div>
                <h3>Are your services limited to the airport, or do you cover other destinations in Cancun?</h3>
                <div>
                    <p>Our transportation services extend beyond the airport, covering various destinations within Cancun. Whether you're heading to a hotel, resort, or specific location in the city, we offer comprehensive coverage to meet your travel needs.</p>
                </div>
            </div>
            <div>
                <h3>Is Caribbean Taxi available for both leisure and business travelers?</h3>
                <div>
                    <p>Yes, our services cater to both leisure and business travelers, prioritizing comfort and efficiency for all. Whether you're in Cancun for work or pleasure, Caribbean Taxi ensures a seamless and enjoyable transfer experience.</p>
                </div>
            </div>
            <div>
                <h3>What safety measures are in place during the transfer?</h3>
                <div>
                    <p>Your safety is our utmost priority. In addition to closely monitored flights, we provide traveler's insurance during your transfer, offering an extra layer of protection and peace of mind throughout your journey.</p>
                </div>
            </div>
            <div>
                <h3>How can I contact Caribbean Taxi for additional inquiries?</h3>
                <div>
                    <p>Feel free to reach out to us through the contact information provided on our website. Whether you have further questions or special requests, our team is here to assist you in any way possible.</p>
                </div>
            </div>
            <div>
                <h3>Why choose Caribbean Taxi for transportation in Cancun?</h3>
                <div>
                    <p>Caribbean Taxi stands out for its unwavering commitment to excellence. We strive to ensure a seamless and delightful transportation experience for every traveler, making your journey with us memorable from start to finish.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection