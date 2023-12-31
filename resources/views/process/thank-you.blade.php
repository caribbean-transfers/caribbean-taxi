@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/thank-you.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/thank-you.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general')

    <div class="container thank-you-content">
        <div class="left">
            <h1>Your reservation has been confirmed :)</h1>
            <p>We have sent you a confirmation email, for more information please contact us.</p>
            <div class="one">
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
                <p>Llámanos al</p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}" class="link">{{ config('services.phone.MX') }}</a>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}" class="link">{{ config('services.phone.US') }}</a>
            </div>
            <div class="two">
                <a href="/" title="Go to home">Go to home</a>
                <a href="/my-reservation" title="View my reservation">View my reservation</a>
            </div>
        </div>
        <div class="right">
            <picture>                
                <source srcset="/assets/img/general/confirmation.webp" type="image/webp">
                <img src="/assets/img/general/confirmation.png" alt="Your reservation has been confirmed" title="Your reservation has been confirmed" width="295" height="285">
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection