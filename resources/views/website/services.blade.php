@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>SERVICIOS</h1>
        </div>
    </div>

    <div class="container offer-items">
        <div class="top">
            <h3>Taxi Riviera Maya le ofrece</h3>
        </div>
        <div class="bottom">
            <div class="left">
                <p>Nuestros servicios de traslados son ideales para parejas, familias, grupos, y ejecutivos empresariales, incluso para cualquier persona que desee llegar a su destino sin problemas, sin espera, sin paradas, sin compartir con otros, es por eso que <strong>nosotros somos su mejor opción.</strong></p>
            </div>
            <div class="right">
                Reserve con confianza en nuestro sitio web o enviando un mensaje a nuestro Teléfono Móvil de Reservas con WhatsApp, Messenger o por teléfono dentro de Mexico
            </div>
        </div>
    </div>

    <div class="gray">
        <div class="container vehicle-items">
            <div class="top">
                <h2>OFRECEMOS...</h2>
                <p>Taxi Riviera Maya - Quintana Roo</p>
            </div>
            <div class="bottom">
                <div class="left">
                    <picture>
                        <source srcset="/assets/img/services/transporter-taxi-riviera-maya.webp" type="image/webp">
                        <img src="/assets/img/services/transporter-taxi-riviera-maya.jpg" alt="Taxi Riviera Maya" title="Taxi Riviera Maya" loading="lazy" width="573" height="374">
                    </picture>
                </div>
                <div class="right">
                    <ul>
                        <li>Precios en USD o MXN</li>
                        <li>Servicios de transporte y traslados más seguro del Aeropuerto Internacional de Cancún a cualquier hotel de Cancún y la Riviera Maya.</li>
                        <li>Traslados a Cancun Centro de Convenciones desde todos los puntos de Riviera Maya - Traslados Sencillo o Redondo - Lujo o Regular.</li>
                        <li>Traslados hacia y desde el Aeropuerto de Cancún para vuelos nacionales e internacionales y a todos los destinos de la Riviera Maya.</li>
                        <li>Traslados a los tours y actividades más emocionantes de la Riviera Maya como Chichen Itza, Xcaret, Xel-Ha.</li>
                        <li>Bodas o eventos especiales? - Viaje de lujo o en grupo sin preocuparse del trafico o estacionamientos.</li>
                        <li>Viaje de negocios? - Viaje de lujo como Ejecutivo a todas sus reuniones.</li>
                        <li>Seguimos vuelos en tiempo real y responder en consecuencia para asegurar su transferencia exitosa.</li>
                        <li>Somos un servicio de traslados autorizado por los autoridades del Aeropuerto Cancun ASUR.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container badges-items">
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#drivers"></use></svg>
            </div>
            <h3>OPERADORES CALIFICADOS</h3>
            <p>Nuestros conductores son experimentados y responsables con licencias federales</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#van"></use></svg>
            </div>
            <h3>VEHÍCULOS DE CALIDAD</h3>
            <p>Nuestras unidades tienen un estricto mantanimiento en nuestro propio taller</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#world"></use></svg>
            </div>
            <h3>RASTREO GPS</h3>
            <p>Todos nuestros vehículos están equipados con localización por GPS en tiempo real para garantizar su seguridad</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#cash"></use></svg>
            </div>
            <h3>PAGOS EN FECTIVO</h3>
            <p>Aceptamos pagos en efectivo llegando al Aeropuerto con nuestros agentes</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#like"></use></svg>
            </div>
            <h3>PAGOS EN OXXO</h3>
            <p>Aceptamos pagos a tarjeta en cualquier OXXO de México</p>
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#paypal"></use></svg>
            </div>
            <h3>PAGOS CON PAYPAL</h3>
            <p>Aceptamos pagos con PayPal con acreditación inmediata</p>
        </div>
    </div>

    @include('layout.footer.general')
@endsection