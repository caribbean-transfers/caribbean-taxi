@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/terms.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/terms.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>TÉRMINOS Y CONDICIONES</h1>
        </div>
    </div>

    <div class="container items">        
        {!! $terms !!}
    </div>

    @include('layout.footer.general')
@endsection