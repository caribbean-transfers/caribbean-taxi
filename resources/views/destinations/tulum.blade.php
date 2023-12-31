@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "Tulum Shuttle",
          "image": [
            "https://caribbean-taxi.com/assets/img/schema/1x1.jpg",
            "https://caribbean-taxi.com/assets/img/schema/4x3.jpg",
            "https://caribbean-taxi.com/assets/img/schema/16x9.jpg"
           ],
          "description": "Transfer service to and from Tulum, the service is provided in a VW Transporter for up to 8 passengers. Available for all areas of Tulum.",
          "sku": "019002",
          "mpn": "029002",
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
            "url": "https://caribbean-taxi.com/cancun-to-tulum-shuttle",
            "priceCurrency": "USD",
            "price": 129,
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
                <h1>The best Shuttle from Cancun to Tulum</h1>
                <p>Best prices and service in Shuttle from Cancun Airport to Tulum!</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>TAXI DE CANCÚN A TULUM, SEGURO Y CONFIABLE</h2>
            <p>Embark on an unparalleled journey to Tulum with Caribbean Taxi, a certified transportation company at Cancun Airport. We pride ourselves on providing top-notch transfer services, ensuring a seamless and enjoyable experience for every traveler.</p>
            <p>Our certification from Cancun Airport underscores our commitment to meeting the highest standards of excellence. From the moment you arrive, our professional team, easily identifiable in vibrant orange uniforms, is dedicated to making your journey to Tulum stress-free and memorable.</p>
            <p>Whether you're heading to Tulum's pristine beaches, exploring ancient Mayan ruins, or indulging in the vibrant local culture, Caribbean Taxi offers a reliable and customer-centric approach. Our services extend beyond a mere ride; we strive to be your travel companion, prioritizing your comfort and safety.</p>
            <p>With a focus on punctuality, convenience, and personalized service, Caribbean Taxi ensures a smooth transition from Cancun Airport to the captivating destination of Tulum. Our drivers are knowledgeable about the region, offering insights and recommendations to enhance your Tulum experience.</p>
            <p>Choose Caribbean Taxi for a travel experience that goes beyond expectations, where every ride reflects our commitment to excellence. Trust us for a certified and exceptional transfer service, setting the stage for a memorable visit to the enchanting Tulum.</p>
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
            <h2>Reasons to choose Caribbean Taxi</h2>
        </div>
        <div class="bottom">

            <div class="item building">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#building"></use></svg>
                    <div>
                        <p>Best Cancun to Tulum Shuttle</p>
                        <h2>SHUTTLE FROM CANCUN TO TULUM</h2>
                    </div>
                </div>
                <p>Explore seamless transfers to every hotel or destination across the Riviera Maya. Our transfer services extend to every corner of this breathtaking region. If it's on the map, rest assured, we'll get you there with ease and comfort.</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Always Safe & Reliable</p>
                        <h2>RELIABLE AND SAFE TAXI TO TULUM</h2>
                    </div>
                </div>
                <p>Experience the epitome of transfer services in the Riviera Maya with Caribbean Taxi. Our skilled drivers ensure a delightful journey, combining comfort, safety, and reliability for an unforgettable Tulum experience.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Official Tulum Transportation Company</p>
                        <h2>OFFICIAL TAXI COMPANY TO TULUM</h2>
                    </div>
                </div>
                <p>As the approved transportation company at Cancun Airport, Caribbean Taxi holds all essential permits for seamless operation across hotels, destinations, and tourist sites in Tulum and the Riviera Maya. Opt for our reliable and officially sanctioned transportation to ensure a stress-free journey and peace of mind from your arrival at Cancun Airport.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Reliable Cancun Airport Taxi Service" title="Reliable Cancun Airport Taxi Service" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>Exemplary Customer Service in Tulum</h2>
            <p>Discover a level of service excellence like no other with Caribbean Taxi in Tulum. As a premier transportation provider, our commitment to customer satisfaction stands as our hallmark. Beyond ensuring seamless transfers, we prioritize the creation of a personalized and exceptional experience for every visitor.</p>
            <p>Our dedicated team, easily recognizable in vibrant orange uniforms, is poised to go above and beyond in providing attentive and caring service. From the moment you engage with Caribbean Taxi, whether at Cancun Airport or your desired destination in Tulum, our focus is on making your journey not just a ride but an unforgettable experience.</p>
            <p>We understand the significance of customer-centric service, and it reflects in every aspect of our operations. Our drivers are not just skilled professionals but friendly guides, ready to assist and enhance your exploration of Tulum. Whether you're heading to the pristine beaches, exploring ancient ruins, or indulging in local culture, Caribbean Taxi ensures your experience is marked by unparalleled attention to detail.</p>
            <p>Choose Caribbean Taxi for a journey where customer satisfaction takes center stage. Your visit to Tulum deserves more than just a transfer&mdash;it deserves a memorable and delightful experience shaped by the highest standards of service. Trust us to make your time in Tulum extraordinary from the moment you step into our distinctive orange universe until the completion of your rewarding journey.</p>
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
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Caribbean Taxi" title="Celia G." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Celia G.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Embarked on an exceptional transfer journey with Caribbean Taxi in Tulum! The distinctive orange booth at the airport was a beacon of relief, ensuring a seamless experience. The driver, dressed in the unmistakable orange uniform, greeted us warmly. The ride was not only comfortable but also came with a fair fare, making Caribbean Taxi the ultimate choice for reaching any destination in Tulum.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Caribbean Taxi" title="Jacob T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Jacob T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Flawless transfer service awaited me with Caribbean Taxi in Tulum! The effortless discovery of the orange uniform affirmed my decision's correctness. Punctuality surpassed expectations, the vehicle gleamed in top-notch condition, and the value for money was unparalleled. Caribbean Taxi not only excels in service but also in the simplicity of locating them in Tulum, setting them apart.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Caribbean Taxi" title="Ferenc S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Ferenc S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>My enthusiastic recommendation goes to Caribbean Taxi in Tulum. From touchdown, the distinctive orange booth stood out, making it effortlessly noticeable. The fare was reasonable, and the service showcased a commendable quality. Undoubtedly the premier choice, their presence in Tulum significantly streamlined the entire process.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Caribbean Taxi" title="Chris M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>Chris M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Amidst the challenges, Caribbean Taxi in Tulum emerged as a relieving presence. Their easily recognizable booth and orange uniform, coupled with the friendly driver and fair fare, made the experience worthwhile. Highly endorsed for reaching any destination in Tulum, especially for those who appreciate the convenience of locating them effortlessly.</p>
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
            <h2>Seamless Journey from Cancun to Tulum</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Embarking on a journey from the vibrant city of Cancun to the coastal paradise of Tulum? Let Caribbean Taxi be your trusted travel companion, ensuring a seamless and enjoyable experience from start to finish.</p>
                <h3>Step 1: Reservation</h3>
                <p>Commence your travel plans by securing a reservation with Caribbean Taxi. This can be effortlessly done through our user-friendly website or by reaching out to our dedicated customer service team. Provide essential travel details such as your preferred date, time, and the designated pick-up location in Cancun.</p>
                <h3>Step 2: Arrival at Cancun Airport</h3>
                <p>Upon landing at Cancun Airport, spot our distinctive orange booth&mdash;it's your designated rendezvous point. Our team, easily identifiable in vibrant orange uniforms, awaits to assist you. This is where your stress-free journey with Caribbean Taxi begins.</p>
                <h3>Step 3: Boarding</h3>
                <p>Once you connect with our friendly team, you'll be directed to your designated vehicle. Our fleet boasts well-maintained and comfortable options. Our professional drivers, well-versed in the route to Tulum, prioritize your safety and comfort throughout the entire journey.</p>
                <h3>Step 4: Enjoy the Scenic Drive</h3>
                <p>Sit back, relax, and savor the picturesque drive from Cancun to Tulum. Whether you're captivated by the lush landscapes or intrigued by historical sites along the route, our knowledgeable drivers are ready to provide insights and recommendations.&nbsp;</p>
                <h3>Step 5: Arrival in Tulum</h3>
                <p>As you reach the enchanting destination of Tulum, our drivers will efficiently drop you off at your specified location&mdash;whether it's a hotel, resort, or any preferred spot in the city.</p>
                <p>Opting for Caribbean Taxi guarantees a stress-free and punctual transfer, allowing you to focus on the excitement of exploring Tulum's beautiful beaches, ancient ruins, and vibrant culture. Book with us for a travel experience that prioritizes your comfort and satisfaction, making the journey from Cancun to Tulum an integral part of your unforgettable adventure.</p>
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
            <h2>Transportation service in tulum</h2>
            <p>When it comes to your transfer to Tulum, trust Caribbean Taxi for a service that is not only reliable but exceptional. Our expertise lies in providing the most comprehensive and dependable transportation service throughout the region. Whether you're arriving at the Airport or any destination within Tulum, our dedicated team is ready to seamlessly transport you to your hotel or preferred location in the city. Choose Caribbean Taxi for a transfer experience that assures comfort and security, ensuring a smooth and delightful beginning to your stay in Tulum. Transform your arrival into a hassle-free experience with Caribbean Taxi!.</p>
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
                <h2>Reliable transfers in tulum with caribbean taxi</h2>
                <p>At Caribbean Taxi, we take pride in being your reliable choice for transfers in Tulum. As a dedicated transportation company, we excel in providing a safe and efficient transport service throughout the region. From the airport to any destination in Tulum, our commitment is to ensure that your transfer experience is worry-free and comfortable. Our reputation as a reliable company is reflected in the quality of our services, offering peace of mind to every passenger. Trust Caribbean Taxi to turn your transfers in Tulum into a reliable and enjoyable experience. Travel with us and discover the reliability that sets us apart in every journey!</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/home/client.webp" type="image/webp">
                    <img src="/assets/img/home/client.png" alt="Reliable transfers in tulum with caribbean taxi" title="Reliable transfers in tulum with caribbean taxi" loading="lazy" width="390" height="481">
                </picture>
            </div>
        </div>
    </div>

    <div class="container faqs_section">
        <div class="top">
            <h2>Frequently Asked Questions about Caribbean Taxi and Shuttle to Tulum</h2>
            <p>Solve your doubts with our frequently asked questions</p>
        </div>
        <div class="bottom">
            <div>
                <h3>1. How can I book Caribbean Taxi services for transfers in Tulum?</h3>
                <div>
                    <p>You can easily book through our website or by contacting our customer service team. Provide your travel details, including the date, time, and pick-up location in Tulum.</p>
                </div>
            </div>
            <div>
                <h3>2. How can I identify the Caribbean Taxi driver in Tulum?</h3>
                <div>
                    <p>Our drivers wear distinctive orange uniforms and are clearly identified. Additionally, you'll receive driver details before your transfer for added security.</p>
                </div>
            </div>
            <div>
                <h3>3. Do you offer transfers from Cancun Airport to Tulum?</h3>
                <div>
                    <p>Yes, Caribbean Taxi provides transfer services from Cancun Airport to Tulum and vice versa.</p>
                </div>
            </div>
            <div>
                <h3>4. Is it possible to make a last-minute reservation for transfers in Tulum?</h3>
                <div>
                    <p>Yes, we understand plans can change. While we recommend booking in advance, we accept last-minute reservations based on availability.</p>
                </div>
            </div>
            <div>
                <h3>5. What safety measures are implemented during transfers in Tulum?</h3>
                <div>
                    <p>We implement rigorous safety measures, including flight monitoring, trained drivers, and regularly maintained vehicles to ensure passenger safety.</p>
                </div>
            </div>
            <div>
                <h3>6. Can I modify my reservation for transfers in Tulum if there are changes to my itinerary?</h3>
                <div>
                    <p>Yes, we understand plans can change. You can contact our customer service team to make modifications to your reservation, subject to availability.</p>
                </div>
            </div>
            <div>
                <h3>7. Do you offer transportation services to specific destinations in Tulum, such as hotels or tourist sites?</h3>
                <div>
                    <p>Yes, we offer transfers to a variety of destinations in Tulum, including hotels, beaches, and popular tourist sites. You can specify your destination when making a reservation.</p>
                </div>
            </div>
            <div>
                <h3>8. What is the cancellation policy for Caribbean Taxi transfers in Tulum?</h3>
                <div>
                    <p>Our cancellation policy varies depending on the type of reservation. We recommend reviewing our terms and conditions or contacting our customer service team for specific details.</p>
                </div>
            </div>
            <div>
                <h3>9. Can I pay for the transfer service in cash upon arrival in Tulum?</h3>
                <div>
                    <p>Yes, we offer the flexibility to pay for the transfer service in cash upon arrival in Tulum. Our aim is to provide convenience and choice for our customers.</p>
                </div>
            </div>
            <div>
                <h3>10. Are Caribbean Taxi services available for private events or group transfers in Tulum?</h3>
                <div>
                    <p>Absolutely! We cater to private events and group transfers in Tulum. Contact our customer service team to discuss your specific requirements, and we'll tailor our services to meet your needs. Whether it's a wedding, corporate event, or a family vacation, Caribbean Taxi has you covered for a seamless and enjoyable group transfer experience in Tulum.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection