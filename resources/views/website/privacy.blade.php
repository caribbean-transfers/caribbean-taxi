@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/privacy.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/privacy.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>PRIVACY POLICY</h1>
        </div>
    </div>

    <div class="container items">
        {!! $terms !!}
        <p id="aviso-format">Última actualización de este&nbsp;: 12/08/2023</p>
    </div>

    @include('layout.footer.general')
@endsection