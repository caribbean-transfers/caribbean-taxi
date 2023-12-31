@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-hotjar/>
    <x-analytics/>
@endpush

@section('content')
    @include('layout.header.checkout')
    
    <div class="parallax-container">
        <div class="container">
            <h1>Thank you for booking with Caribbean Taxi!</h1>
        </div>
    </div>

    <div class="container redirect-container">
        <h2>You will be redirected in <span id="timer">3</span> ...</h2>
    </div>

    <script>
        (function () {
            var timerElement = document.getElementById("timer");
            var contador = 3;

            function updateCounter() {
                timerElement.textContent = contador;
                contador--;

                if (contador < 0) {
                    clearInterval(intervalo);
                   window.location.href = `{!! $payment !!}`;                    
                }
            }

            updateCounter();
            var intervalo = setInterval(updateCounter, 1000);
        })();
    </script>
    
@endsection