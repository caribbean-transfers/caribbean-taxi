@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>SERVICES</h1>
        </div>
    </div>

    <div class="container offer-items">
        <div class="top">
            <h3>Why Choose Caribbean Taxi</h3>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Whether you're embarking on a vacation or a business trip, Caribbean Taxi is your go-to partner for reliable, certified, and customer-focused transportation services. Our goal is to ensure your journey from the airport to your destination is not just a transfer but an enjoyable and memorable part of your travel experience.</p>
            </div>
            <div class="right">
                <p>Embark on a journey with Caribbean Taxi, where professionalism, friendliness, and top-notch services come together to make every ride with us a pleasant and satisfying adventure in the stunning Riviera Maya. Book with us and experience the difference in transportation excellence!</p>
            </div>
        </div>
    </div>

    <div class="gray">
        <div class="container vehicle-items">
            <div class="top">
                <h2>Our Services: Explore Tailored Transportation Options with Caribbean Taxi</h2>
                <p>Taxi Riviera Maya - Quintana Roo</p>
            </div>
            <div class="bottom">
                <div class="left">
                    <picture>
                        <source srcset="/assets/img/services/transporter-taxi-riviera-maya.webp" type="image/webp">
                        <img src="/assets/img/services/transporter-taxi-riviera-maya.jpg" alt="Taxi Riviera Maya" title="Taxi Riviera Maya" loading="lazy" width="573" height="374">
                    </picture>
                </div>
                <div class="right">
                    <p>At Caribbean Taxi, we take pride in offering a range of transportation services designed to cater to the unique needs of every traveler. Our array of options ensures you find the perfect solution for your transfer in the Riviera Maya.</p>
                    <p><strong>Hotel-to-Hotel Transfer:</strong></p>
                    <p>Enjoy a seamless transition between hotels with our specialized transfer service. With punctuality and comfort, we bring the essence of Caribbean Taxi directly to your destination.</p>
                    <p><strong>Private Transportation:</strong></p>
                    <p>Experience privacy and luxury with our private transportation service. A dedicated driver awaits at the airport to take you directly to your destination, without any additional stops.</p>
                    <p><strong>Group Transfers:</strong></p>
                    <p>Perfect for group trips, our group transfer service ensures everyone arrives together and comfortably at their destination in the Riviera Maya.</p>
                    <p><strong>Transfer to Tourist Attractions:</strong></p>
                    <p>Discover the wonders of the Riviera Maya in comfort. We offer direct transfers to tourist attractions, ensuring your adventure begins from the moment you step on board.</p>
                    <p><strong>Open-Service:</strong></p>
                    <p>Want to explore the region at your own pace? With our open-service, you can use the van unlimitedly for a specified time, giving you the freedom to uncover the Riviera Maya on your terms.</p>
                    <p><strong>Wedding Transfers:</strong></p>
                    <p>Celebrate your special day in style. Our wedding transfer service ensures that the bride, groom, and guests arrive with elegance and punctuality at the ceremony venue.</p>
                    <p><strong>Corporate Events and Conferences:</strong></p>
                    <p>We facilitate transportation for corporate events and conferences. Whether for business meetings or conferences, our team handles logistics to ensure a seamless experience.</p>
                    <p>At Caribbean Taxi, we are committed to providing transportation options that suit your needs. Book with us and discover the comfort, reliability, and exceptional service that sets us apart in the Riviera Maya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container badges-items">
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#drivers"></use></svg>
            </div>
            <h3>QUALIFIED OPERATORS</h3>
            <p>Our drivers bring a wealth of experience and responsibility, holding federal licenses to ensure your safety and comfort throughout your journey.</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#van"></use></svg>
            </div>
            <h3>QUALITY VEHICLES</h3>
            <p>Our fleet undergoes strict maintenance in our dedicated workshop, ensuring that each vehicle meets the highest standards of quality and safety.</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#world"></use></svg>
            </div>
            <h3>GPS TRACKING</h3>
            <p>For added security, all our vehicles are equipped with real-time GPS tracking, allowing us to monitor your journey and promptly respond to any needs that may arise.</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#cash"></use></svg>
            </div>
            <h3>CASH PAYMENTS</h3>
            <p>Convenience is paramount. You can make cash payments upon arrival at the airport by coordinating with our agents, providing you with flexibility and ease of transaction.</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#like"></use></svg>
            </div>
            <h3>STRIPE PAYMENTS</h3>
            <p>We offer the convenience of card payments with stripe secure payments, providing you with a widely accessible and secure payment option.</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#paypal"></use></svg>
            </div>
            <h3>PAYPAL PAYMENTS</h3>
            <p>Embracing modern payment solutions, we accept PayPal payments for immediate and secure transactions, adding a layer of flexibility to your payment choices.</p>
        </div>
    </div>

    @include('layout.footer.general')
@endsection