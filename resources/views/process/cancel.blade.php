@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/cancel.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/cancel.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general')

    <div class="container cancel-content">
        <div class="left">
            <h1>We're sorry, something went wrong :(</h1>
            <p>Your transaction was not approved, we can help you, contact us!</p>
            <div class="one">
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
                <p>Call us at</p>
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
                <source srcset="/assets/img/general/cancel.webp" type="image/webp">
                <img src="/assets/img/general/cancel.png" alt="Error when confirming your reservation" title="Error when confirming your reservation" width="295" height="285">
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection