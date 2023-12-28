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
        <ul>
            <li>Al efectuarse la compra de alguno de nuestros servicios, con cualquier forma de pago o tipo de moneda, el cliente estará aceptando los Términos y Condiciones descritos a continuación y acepta que la información registrada en el boleto de compra es la correcta al servicio deseado.</li>
            <li>Derivado del cumplimiento de nuestros servicios Transporte Turístico en la Riviera Maya (Nombre comercial TAXI RIVIERA MAYA) se compromete a devolver el 100% del pago del servicio de regreso al cliente en caso de que el servicio no haya sido cumplido en tiempo, lugar y forma por responsabilidad de nosotros de acuerdo con lo establecido en el boleto de compra.</li>
            <li>Para verificar el estatus de su unidad de servicio, cualquier duda, comentario, cancelación, confirmación o aclaración sobre su servicio de transportación, puede comunicarse las 24 horas del día al teléfono <strong><a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}">{{ config('services.phone.MX') }}</a></strong> o enviar un correo a mayanparadise@hotmail.com</li>
            <li>Por temas de tránsito pesado, clima y accidentes viales cuya responsabilidad es ajena a la operación, “La Empresa” cuenta con un tiempo máximo de espera del cliente hacia la unidad de 20 minutos después del horario pactado en el boleto de compra. Pasado dicho plazo de espera, el cliente puede solicitar la reclamación por servicio no cumplido.</li>
            <li>Una vez que el servicio de transportación haya sido provisto por “la empresa”, se entenderá aceptado y utilizado por el cliente, por lo tanto, este servicio no será reembolsable por ningún motivo.</li>
            <li>El cliente cuyo nombre aparezca en el boleto de compra será el único autorizado para presentar dudas, aclaraciones, cancelaciones o solicitar un reembolso.</li>
            <li>Para cualquier duda y/o aclaración y/o solicitud de reembolso, el pasajero deberá de contar y presentar en todo momento con el boleto de compra original, este deberá de estar en buen estado, sin alteraciones y con el folio perfectamente legible.</li>
            <li>En todos nuestros servicios, nuestras unidades tienen la facilidad de esperar al cliente por un lapso no mayor a 20 minutos en el lugar indicado en su Boleto, pasado ese tiempo de espera, la unidad se retirará dejando sin efecto el derecho a reembolso alguno.</li>
            <li>Para servicio de recolección en Hoteles, el pasajero deberá de esperar en el Lobby del Hotel con su Check Out realizado al transporte solicitado a la hora confirmada por la transportadora.</li>
            <li>Para servicio de recolección en Servicio a Domicilio el cliente debe confirmar la dirección exacta de su servicio. Este tendrá hasta 24 horas antes de la hora de su Pick Up para realizar su confirmación en lugar, fecha y hora. En caso de no confirmar el servicio dentro de ese plazo se tomará como un servicio cancelado en Tipo C sin responsabilidad alguna para “la empresa”.</li>
            <li>En caso de que al realizar la compra del servicio se marque la opción “Servicio Pick Up por confirmar”, el cliente tendrá hasta 24 horas antes de la hora de su Pick Up para realizar su confirmación en lugar, fecha y hora. En caso de no confirmar el servicio dentro de ese plazo se tomará como un servicio cancelado en Tipo C sin responsabilidad alguna para “la empresa”.</li>
            <li><strong>Tipos de cancelación:</strong>
            <ul>
                <li><strong>Tipo A:</strong>&nbsp;Cancelación con más de 36 horas antes del servicio programado de acuerdo con lo establecida en el Boleto no generará cargo alguno.</li>
                <li><strong>Tipo B:</strong>&nbsp;Cancelación con 24 a 36 horas antes del servicio programado de acuerdo con lo establecido en el Boleto generará cargo del 25% del valor del servicio contratado.</li>
                <li><strong>Tipo C:</strong>&nbsp;Cancelación con 12 a 23 horas antes del servicio programado de acuerdo con lo establecida en el Boleto generará cargo del 50% del valor del servicio contratado.</li>
                <li><strong>Cancelación no reembolsable:</strong>&nbsp;Cancelación con 12 horas o menos antes del servicio programado de acuerdo con lo establecido en el Boleto no es reembolsable.</li>
            </ul>
            </li>
            <li>En caso de aplicar algún reembolso, el cliente recibirá su dinero en la misma forma a en la que se efectuó el pago. El importe está dependiente del motivo de la queja y está sujeto al análisis y autorización del personal correspondiente</li>
            <li>Toda aclaración, reclamación o solicitud de reembolso para compras realizadas en efectivo deben solicitarse vía telefónica. La aclaración, reclamación o solicitud de reembolso será evaluada antes de ser confirmada o rechazada y la resolución se les dará vía correo electrónico o por teléfono.</li>
            <li>Toda aclaración, reclamación o solicitud de reembolso para compras realizadas con pago por tarjeta deben solicitar exclusivamente a través del correo electrónico mayanparadise@hotmail.com en un horario de lunes a viernes de 9am a 6pm. En caso de ser enviada fuera de ese horario se tomará dicha solicitud con la fecha del día hábil más próximo. La aclaración, reclamación o solicitud de reembolso será evaluada antes de ser confirmada o rechazada y la resolución será enviada por el mismo medio al correo de donde procedió.</li>
            <li>Para poder solicitar un reembolso de cualquier forma de pago, cantidad o destino el cliente debe de presentar su identificación oficial.</li>
            <li>En caso de reembolso en tarjeta, para efectuarlo “la empresa” debe de recibir por correo una imagen de la identificación oficial.</li>
            <li>Toda autorización de reembolso en tarjeta inicia vía correo al enviar la solicitud por correo; continuo a ello es necesario que el cliente imprima, firme y mande escaneado la “Carta de Autorización de Reembolsos” y la imagen de la identificación del cliente, siendo efectiva la devolución vía transferencia bancaria a partir de las 2 semanas posteriores a la recepción de la documentación e información necesaria.</li>
            <li>Para solicitar factura el cliente deberá enviar vía correo electrónico los datos necesarios para facturación y mencionar al momento de contratar nuestro servicio que desea factura.</li>
            <li>El cliente deberá enviar la siguiente información: Folio de compra (Ubicado en el Boleto), clave del Registro Federal de Contribuyentes, nombre completo de Persona Física o Moral, lugar y fecha de expedición, importe total señalado en el Boleto, tipo de moneda como se realizó el pago, forma de pago, dirección de facturación (ciudad, Estado, País y Código Postal), número telefónico de contacto. Las facturas se enviarán en los siguientes 3 días hábiles al mismo correo con el que fue solicitado.</li>
            <li>La empresa se reserva el derecho de proporcionar el servicio y/o realizar cualquier tipo de reembolso cuando el usuario pasajero se encuentre en estado etílico, alteración por consumo de sustancias nocivas, o muestre agresión moral y/o física a cualquiera de nuestros clientes y/o colaboradores y/o instalaciones y/o herramientas de trabajo. Lo anterior de conformidad con el artículo 58, párrafo segundo de la Ley Federal de Protección al Consumidor.</li>
        </ul>
    </div>

    @include('layout.footer.general')
@endsection