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
            <h1>SEARCH RESULT</h1>
        </div>
    </div>
    
    <div class="container general-container">
        <div class="left">
            @if(!isset($data['error']))
                <div class="map" id="map">Map</div>
            @endif
            <div class="bookingbox-parent">
                <button id="toggle-bookingbox-button">MODIFY SEARCH</button>
                <div id="toggle-bookingbox-div" class="hidden">
                    <x-bookingbox/>
                </div>
            </div>
        </div>
        <div class="right" id="result-listing-container">
            <div class="top">
                @if(isset($data['items']))
                    <h2>Transfer from {{ $data['places']['one_way']['init']['name'] }} to {{ $data['places']['one_way']['end']['name'] }}</h2>
                    <p>Approximate distance: {{ $data['places']['distance'] }}, estimated travel time {{ $data['places']['time'] }}</p>
                @endif

                @if(isset($data['error']))
                    <div class="error">
                        <p>We are sorry :(</p>
                        <h2>Unfortunately we did not find availability for the <strong>Zone</strong> / <strong>Schedules</strong> requested, don't worry, we can solve it.</h2>
                        <div>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                USA &amp; Canada
                            </a>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                Mexico &amp; Rest of the World
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=529987374906&text=Hello%2C%20I%20need%20a%20transportation%20service" class="btn">
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
                                        <li>Up to {{ $item['passengers'] }} Pax</li>
                                        <li>Max. {{ $item['luggage'] }} Luggage</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="two">
                                @if($item['id'] == 1)
                                    <p>Travel comfortably in a fully equipped, private service for up to {{ $item['passengers'] }} passengers. The service is private, with no waiting time or continuous stops.</p>
                                    <ul>
                                        <li>Private service</li>
                                        <li>Airport taxes and Travel Insurance included</li>
                                        <li>This service is available every day</li>
                                        <li>Hours of operation 24 x 7</li>
                                    </ul>
                                @endif
                                @if($item['id'] == 2)
                                    <p>Travel in a luxury Suburban. Ideal for small groups, couples or families up to 5 people. Fully equipped, the best option for your transfer from the airport to your hotel.</p>
                                    <ul>
                                        <li>Includes airport taxes and insurance</li>
                                        <li>Private service, no waiting time, no continuous stops.</li>
                                        <li>Includes a free child seat, when requested</li>
                                        <li>Vehicle subject to availability</li>
                                    </ul>
                                @endif
                                @if($item['id'] == 3)
                                    <p>Travel in a Crafter Ideal for large groups, couples or families up to 15 people. Fully equipped, the best option for your transfer from the airport to your hotel.</p>
                                    <ul>
                                        <li>Includes airport taxes and insurance</li>
                                        <li>Private service, no waiting time, no continuous stops.</li>
                                        <li>Includes a free child seat, when requested</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif
                            </div>
                            <div class="three">
                                <div class="top">
                                    <p>Price from</p>
                                    <p>${{ number_format($before,2) }} {{ $item['currency'] }}</p>
                                    <p>${{ number_format( $item['price'], 2) }} {{ $item['currency'] }}</p>
                                    <p>Price per vehicle</p>
                                </div>
                                <form action="/checkout" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item['id'] }}">
                                    <button>Book now</button>
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