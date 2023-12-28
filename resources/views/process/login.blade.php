@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/login.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/login.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general')
    @php
        $item = [
            "error" => false,
            "code" => (( isset($data['code']) )? $data['code'] :''),
            "email" => (( isset($data['email']) )? $data['email'] :''),
        ];
        if( isset($data['code']) || isset($data['email']) ):
            $item['error'] = true;
        endif;
    @endphp
    <div class="blue-container">
        <div class="container">
            <h1>DATOS DE RESERVACIÓN</h1>
        </div>
    </div>

    <div class="container">
        <form action="/reserva" method="POST">            
            <h2>MI RESERVACIÓN</h2>
            <div>
                <label>CÓDIGO DE RESERVACIÓN:</label>
                <input type="text" class="form-control" name="code" value="{{ $item['code'] }}" required>
            </div>
            <div>
                <label>EMAIL:</label>
                <input type="email" class="form-control" name="email" value="{{ $item['email'] }}" required>
            </div>
            @csrf
            <button type="submit">BUSCAR</button>
            @if($item['error'] == true)
                <div class="badge-error">
                    <p>Código de reservación o email incorrectos</p>
                </div>
            @endif
        </form>
    </div>

    @include('layout.footer.general')
@endsection