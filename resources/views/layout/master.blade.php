@php 
    use App\Traits\functionsTrait;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">        
        <title>{{ $seo['meta']['title'] }}</title>
        <meta name="description" content="{{ $seo['meta']['description'] }}">
        <meta name="keywords" content="{{ $seo['meta']['keywords'] }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="Website">
        <meta name="author" content="Taxi Riviera Maya">
        @if(config('app.debug'))
            <meta name="robots" content="noindex,nofollow">
        @else
            <meta name="robots" content="index,follow">
        @endif
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
        <meta name="csrf-token" content="{{ csrf_token() }}">     
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">   
        @if(sizeof($seo['alternate']) > 0)            
            @foreach($seo['alternate'] as $key => $value)
                <link rel="alternate" hreflang="{{$key}}" href="{{ url('/') }}{{$value}}">
            @endforeach
        @endif
        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="dns-prefetch" href="https://www.googletagmanager.com">
        <meta name="og:url" content="{{ url()->current() }}">
        <meta name="og:type" content="website">
        <meta name="og:title" content="{{ $seo['meta']['title'] }}">
        <meta name="og:description" content="{{ $seo['meta']['description'] }}">
        <meta name="og:image" content="/assets/img/social/facebook.jpg">
        <meta property="og:locale" content="es-MX">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['meta']['title'] }}">
        <meta name="twitter:description" content="{{ $seo['meta']['description'] }}">
        <meta name="twitter:image" content="/assets/img/social/twitter.jpg">
        
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="preload" as="style" >
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="stylesheet">        
        <script defer src="{{ mix('/assets/js/base/index.min.js') }}"></script>

        @stack('push-top')

        <script>
            setTimeout(function () {
                window.__lc = window.__lc || {};
                window.__lc.license = 15934356;
                ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
            }, 7000);
        </script>        

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Taxi Riviera Maya",
                "priceRange": "$$",
                "image": [
                    "https://taxirivieramaya.com/assets/img/website/logo.webp"
                ],
                "hasMap": "https://www.google.com/maps/place/Taxi+Riviera+Maya/@21.0723366,-86.8489683,17z/data=!4m6!3m5!1s0x8f4c2be10a05f649:0xc59c79538ab20351!8m2!3d21.0723316!4d-86.8463934!16s%2Fg%2F11sbd81d37?entry=tts&shorturl=1",       
                "telephone": "+52 (998) 294.2389",
                "url": "https://taxirivieramaya.com",
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
                    "addressCountry": "Mexico"
                },                    
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "SUN-MON",
                    "opens": "24 hrs"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 21.07247674538035,
                    "longitude": -86.84642559079789
                },                
                "Logo": "https://taxirivieramaya.com/assets/img/website/logo.webp"
            }
        </script>
        
</head>
<body>
    @yield('content')
    @stack('push-bottom')    
</body>
</html>