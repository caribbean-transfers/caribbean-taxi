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
            <h1>Tu reservación ha sido confirmada :)</h1>
            <p>Hemos enviado un correo de confirmación, para más información por favor contáctanos.</p>
            <div class="one">
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
                <p>Llámanos al</p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}" class="link">{{ config('services.phone.MX') }}</a>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}" class="link">{{ config('services.phone.US') }}</a>
            </div>
            <div class="two">
                <a href="/" title="Ir al inicio">Ir al inicio</a>
                <a href="/reserva" title="Ver mi reservación">Ver mi reservación</a>
            </div>
        </div>
        <div class="right">
            <picture>                
                <source srcset="/assets/img/general/confirmation.webp" type="image/webp">
                <img src="/assets/img/general/confirmation.png" alt="Reservación confirmada" title="Reservación confirmada" width="295" height="285">
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection