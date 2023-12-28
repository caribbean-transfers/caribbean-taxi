@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-hotjar/>
    <x-analytics/>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-880287216/b8MxCPiyv_oYEPC74KMD',
            'value': `{!! $data['sales']['total'] !!}`,
            'currency': `{!! $data['config']['currency'] !!}`,
            'transaction_id': `{!! $data['config']['id'] !!}`,
        });
        console.log({
            'send_to': 'AW-880287216/b8MxCPiyv_oYEPC74KMD',
            'value': `{!! $data['sales']['total'] !!}`,
            'currency': `{!! $data['config']['currency'] !!}`,
            'transaction_id': `{!! $data['config']['id'] !!}`,
        });
    </script>
@endpush

@section('content')
    @include('layout.header.checkout')
    
    <div class="parallax-container">
        <div class="container">
            <h1>¡Gracias por reservar en Taxi Riviera Maya!</h1>
        </div>
    </div>

    <div class="container redirect-container">
        <h2>Usted será redirigido en <span id="timer">3</span> ...</h2>
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