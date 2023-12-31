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
                <h1>The best transfer prices only in Caribbean Taxi</h1>
                <p>More than 10 years leading the airport transportation services in the Mayan Riviera.</p>
            </div>
            <div class="bottom">                
                <x-bookingbox/>
            </div>
        </div>
    </div>

    <div class="container banner_container">
        <div class="left">
            <h2>Caribbean Taxi: Cancun Airport Certified Company </h2>
            <p>Experience excellence in transfers with Caribbean Taxi, a Cancun airport certified company. We pride ourselves in offering our clients a reliable and hassle-free service to ensure your vacation gets off to the best possible start. With regulated rates, you can plan your budget in advance, avoiding unpleasant surprises when you arrive at your destination.</p>
            <p>Our commitment to punctuality is unwavering. Our professional drivers will wait for you on time, even monitoring your flight to adjust to any changes in your arrival time. In addition, we understand the importance of flexibility and confidence when traveling. That's why we offer the option to pay on arrival, allowing you to feel confident that your service will be ready and waiting for you, with no pre-trip worries.</p>
            <p>The safety of our customers is our top priority. In addition to monitoring flights and offering regulated rates, we provide traveler's insurance during your transfer. So you can enjoy your vacation with total peace of mind. Book with Caribbean Taxi and let our reliable and customer-oriented services make your transfer experience as pleasant as your vacation destinations. Travel with us and start your vacation on a positive note!</p>
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
                        <p>Coverage of the entire Riviera Maya</p>
                        <h2>TRANSFER TO ANY HOTEL OR DESTINATION</h2>
                    </div>
                </div>
                <p>Transfer to any hotel or destination in the Riviera Maya, we offer transfer services to any corner of the Riviera Maya, if you see it on the map, sure we will be there.</p>
            </div>

            <div class="item van">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#van"></use></svg>
                    <div>
                        <p>Always Safe & Reliable</p>
                        <h2>RELIABLE AND SAFE TRANSPORTATION</h2>
                    </div>
                </div>
                <p>Enjoy the best transfer service to any destination in the Riviera Maya, comfortable, safe and reliable with trained drivers and service attitude at all times.</p>
            </div>

            <div class="item airport">
                <div class="top">
                    <svg width="50" height="50"><use xlink:href="/assets/img/svg/icons.svg#plane-check"></use></svg>
                    <div>
                        <p>Official Airport Transportation Company</p>
                        <h2>OFFICIAL AND CERTIFIED COMPANY</h2>
                    </div>
                </div>
                <p>We are the official transportation company at the Cancun Airport, we have all the permits to operate in any hotel, destination or tourist site in Cancun and the Riviera Maya so there will never be any complications or inconveniences.</p>
            </div>

        </div>
    </div>

    <div class="container gray-container-information">
        <picture>
            <source srcset="/assets/img/home/taxirivi-cliente.webp" type="image/webp">
            <img src="/assets/img/home/taxirivi-cliente.jpg" alt="Passenger van with Caribbean Taxi branding" title="Passenger van with Caribbean Taxi branding" loading="lazy" width="352" height="258">
        </picture>
        <div>
            <h2>THE TRANSPORTATION SERVICE WITH THE BEST CUSTOMER SERVICE!</h2>
            <p>At Caribbean Taxi, we pride ourselves in offering a complete and friendly transfer service that goes beyond your expectations. We excel at providing a travel experience that is not only efficient and safe, but also warm and personalized for each of our clients.</p>
            <p>You will easily find us at the airport, recognizable by our distinctive orange uniforms. At Caribbean Taxi, we believe in making your arrival welcoming and hassle-free. Our team is dedicated to ensuring that your experience from the airport to your destination is smooth and pleasant.</p>
            <p>Whether you're on vacation or on a business trip, trust Caribbean Taxi to provide you with a transfer service that prioritizes your comfort and satisfaction. Discover the difference of traveling with us, where complete and friendly service is our promise, we look forward to greeting you at the airport and taking you to your destination with a smile and professionalism!</p>
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
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Caribbean Taxi" title="SARA M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>SARA M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Exceptional transfer experience with Caribbean Taxi at Cancun Airport! Since I landed, spotting the distinctive orange booth of Caribbean Taxi was a relief. The driver, in their distinctive orange uniform, welcomed us. The vehicle was comfortable, and the fare was fair. Definitely the perfect choice to reach any destination from Cancun Airport.</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Caribbean Taxi" title="LAURA S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>LAURA S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Impeccable transfer service with Caribbean Taxi at Cancun Airport! The ease of finding the orange uniform was a sign that I had made the right decision. Punctuality was outstanding, the vehicle was in excellent condition, and the value for money, unbeatable. Caribbean Taxi stands out not only for its service but also for the ease of finding them at Cancun Airport!</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Caribbean Taxi" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>I highly recommend Caribbean Taxi. From landing at Cancun Airport, it was easy to locate the distinctive orange booth. The fare was affordable, and the service was of quality. Without a doubt, the best option, where their presence at Cancun Airport greatly facilitated the process!</p>
                            <a class="read_more" title="Read more" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Read more</a>
                            <a class="posted_on" title="Posted on" target="_blank" href="https://maps.app.goo.gl/xB9tdQES4QqbHjku6">Posted on <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Caribbean Taxi" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Despite the challenges at the airport, finding a Caribbean Taxi was a relief. With their clearly identifiable booth and orange uniform, the driver was friendly, and the fare was fair. Highly recommended for reaching any destination from Cancun Airport, especially if you value the ease of finding them at the airport.</p>
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
            <h2>Where do we meet at the Cancun airport?</h2>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Upon your arrival at the Cancun airport, Caribbean Taxi is strategically positioned at our prominent orange booth within Terminal 2, 3 &amp; 4. Look out for our team donned in vibrant orange uniforms, serving as a distinctive and welcoming beacon to guide you seamlessly. Whether your journey is for leisure or business, our strategic location in Terminal 2 guarantees a straightforward meeting point, facilitating a smooth transition from the airport to your chosen destination.</p>
                <p>Rest assured, our dedicated team is primed to provide assistance, ensuring a hassle-free and enjoyable journey from the moment you land. From our easily identifiable orange booth in Terminal 2 to the warmth of our team, Caribbean Taxi is committed to making your airport experience pleasant and stress-free, setting the tone for a memorable stay in the beautiful Cancun region.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/destinations/cancun/cancun.webp" type="image/webp">
                    <img src="/assets/img/destinations/cancun/cancun.jpg" alt="Cancun airport transportation services" title="Cancun airport transportation services" loading="lazy" width="373" height="260">
                </picture>
            </div>
        </div>
    </div>

    <div class="container destinations_information">
        <div class="top">
            <h2>Transportation service in the riviera maya</h2>
            <p>If you're planning your transfer to Cancun and seeking a reliable service, look no further than Caribbean Taxi. We specialize in providing the most comprehensive and dependable transportation service in the region. From any destination in Cancun, including the Airport, our team is always ready to take you to your hotel or preferred destination in the city. With Caribbean Taxi, you can rely on a comfortable and secure transfer that ensures a smooth and pleasant start to your stay in Cancun. Make your arrival in Cancun a hassle-free experience with Caribbean Taxi!</p>
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
                <h2>Caribbean Taxi: A reliable company in Cancun</h2>
                <p>Caribbean Taxi is more than just a transportation service; it's a commitment to excellence in customer care and satisfaction. As a standout choice in Cancun, Caribbean Taxi goes the extra mile to prioritize the needs and comfort of every traveler. Our dedication is rooted in a genuine spirit of friendliness and hospitality, ensuring that your journey with us is not just a ride but a delightful experience.</p>
                <p>What sets Caribbean Taxi apart is our unwavering focus on putting the customer first. From the moment you book with us until you reach your destination, our team is dedicated to providing a seamless and enjoyable experience. Our drivers, easily identifiable in their distinctive orange uniforms, embody the welcoming spirit of Caribbean Taxi. Whether you're arriving at the airport or exploring the vibrant streets of Cancun, our commitment to hospitality ensures that you feel not just like a passenger but a valued guest throughout your journey. Choose Caribbean Taxi for a transportation experience that combines efficiency with a warm welcome, making your time in Cancun truly memorable.</p>
            </div>
            <div class="right">
                <picture>
                    <source srcset="/assets/img/home/client.webp" type="image/webp">
                    <img src="/assets/img/home/client.png" alt="Caribbean Taxi: A reliable company in Cancun" title="Caribbean Taxi: A reliable company in Cancun" loading="lazy" width="390" height="481">
                </picture>
            </div>
        </div>
    </div>

    <div class="container faqs_section">
        <div class="top">
            <h2>Frequently asked questions about caribbean taxi</h2>
            <p>We help you clear up any doubts you may have about Caribbean Taxi</p>
        </div>
        <div class="bottom">
            <div>
                <h3>How can I identify a Caribbean Taxi driver at Cancun Airport?</h3>
                <div>
                    <p>Easily spot our drivers at Cancun Airport by looking for their distinctive orange uniforms, providing a clear and professional visual identity amid the bustling atmosphere.</p>
                </div>
            </div>
            <div>
                <h3>Does Caribbean Taxi operate services exclusively from and to Cancun Airport?</h3>
                <div>
                    <p>While renowned for our services to and from Cancun Airport, we also extend our operations to cover a wide range of destinations in the beautiful Riviera Maya.</p>
                </div>
            </div>
            <div>
                <h3>Does Caribbean Taxi offer personalized services based on the destination in Cancun?</h3>
                <div>
                    <p>Absolutely! At Caribbean Taxi, we take pride in tailoring our services to meet the specific needs of our clients. Whether you're heading to a specific hotel, a luxury resort, or any unique spot in Cancun, we strive to fulfill your expectations for an exceptionally personalized transport experience.</p>
                </div>
            </div>
            <div>
                <h3>What are the core values of Caribbean Taxi regarding customer service?</h3>
                <div>
                    <p>At the heart of our business philosophy are the fundamental values of kindness, hospitality, and an unwavering commitment to customer satisfaction. We aim not only to be an efficient transportation service but also a trusted partner prioritizing the comfort and well-being of every traveler who chooses Caribbean Taxi.</p>
                </div>
            </div>
            <div>
                <h3>Can I pay for my Caribbean Taxi service upon arrival at my destination in Cancun?</h3>
                <div>
                    <p>For maximum flexibility and peace of mind, we offer the convenient option of payment upon arrival at your destination in Cancun. We believe that this flexibility is essential for our customers to feel secure and confident at every step of their journey.</p>
                </div>
            </div>
            <div>
                <h3>How does Caribbean Taxi ensure punctuality in transfers?</h3>
                <div>
                    <p>Punctuality is a fundamental aspect of our commitment to providing reliable service. We closely monitor flight schedules to anticipate and adjust to any changes, and our drivers, always professional and dedicated, are at the agreed-upon location promptly to ensure your journey is hassle-free.</p>
                </div>
            </div>
            <div>
                <h3>Does Caribbean Taxi offer services beyond transfers to and from the airport?</h3>
                <div>
                    <p>Yes, our operations extend beyond simple airport-hotel transfers. We also provide personalized services for exploring different destinations in the picturesque Riviera Maya. From private tours to transfers to special events, we strive to offer memorable travel experiences beyond conventional transfers.</p>
                </div>
            </div>
            <div>
                <h3>What safety measures does Caribbean Taxi have for travelers?</h3>
                <div>
                    <p>The safety of our travelers is a top priority. All our vehicles comply with rigorous safety standards, and during each transfer, we provide traveler insurance to offer an additional layer of protection and peace of mind to our customers.</p>
                </div>
            </div>
            <div>
                <h3>How can I make a reservation with Caribbean Taxi?</h3>
                <div>
                    <p>Booking with Caribbean Taxi is simple and convenient. You can make your reservation online through our website, where you'll find an easy-to-follow process. Additionally, you can also reach out directly to us to customize your booking according to your specific transportation needs.</p>
                </div>
            </div>
            <div>
                <h3>What is the primary philosophy of Caribbean Taxi regarding transportation service?</h3>
                <div>
                    <p>At Caribbean Taxi, we believe that our transportation service goes beyond merely getting customers from one place to another. We strive to offer memorable travel experiences marked by the kindness and hospitality that set us apart. Our primary philosophy is to be not just an efficient service but also a reliable companion that positively contributes to each stage of our customers' journeys in Cancun.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection