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
            <h1>AVISO DE PRIVACIDAD</h1>
        </div>
    </div>

    <div class="container items">
        <h2>Aviso de privacidad integral</h2>
        <p><b>Taxi Riviera Maya</b>, con domicilio en Alfredo V. Bonfil, 77517 Cancún, Q.R. y portal de internet taxirivieramaya.com, es el responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente:</p>

        <h3>¿Para qué fines utilizaremos sus datos personales?</h3>
        <p>Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias para el servicio que solicita:</p>
        <p>Respuesta a mensajes del formulario de contacto</p>

        <h3>¿Qué datos personales utilizaremos para estos fines?</h3>
        <p>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:</p>
        <p>Datos de identificación y contacto</p>

        <h3><br>¿Con quién compartimos su información personal y para qué fines?</h3>
        <p>Le informamos que sus datos personales son compartidos fuera del país con las siguientes personas, empresas, organizaciones o autoridades distintas a nosotros, para los siguientes fines:</p>
        <p>Dentro del país</p>
        <p>Operadores</p>
        
        <h3>¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso o ejercer la revocación de consentimiento?</h3>
        <p>Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>
        
        <h3>Para el ejercicio de cualquiera de los derechos ARCO, debe enviar una petición vía correo electrónico a rivieramayataxi@gmail.com y deberá contener:</h3>
        <ul>
            <li>Nombre completo del titular.</li>
            <li>Domicilio.</li>
            <li>Teléfono.</li>
            <li>Correo electrónico usado en este sitio web.</li>
            <li>Copia de una identificación oficial adjunta.</li>
            <li>Asunto «Derechos ARCO»</li>
        </ul>
        <p>Descripción el objeto del escrito, los cuales pueden ser de manera enunciativa más no limitativa los siguientes: Revocación del consentimiento para tratar sus datos personales; y/o Notificación del uso indebido del tratamiento de sus datos personales; y/o Ejercitar sus Derechos ARCO, con una descripción clara y precisa de los datos a Acceder, Rectificar, Cancelar o bien, Oponerse. En caso de Rectificación de datos personales, deberá indicar la modificación exacta y anexar la documentación soporte; es importante en caso de revocación del consentimiento, que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.</p>

        <h3>¿En cuántos días le daremos respuesta a su solicitud?</h3>
        <p>5 días</p>
        
        <h3>¿Por qué medio le comunicaremos la respuesta a su solicitud?</h3>
        <p>Al mismo correo electrónico de donde se envío la petición.</p>

        <h3>El uso de tecnologías de rastreo en nuestro portal de internet</h3>
        <p>Le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento como usuario de internet, así como brindarle un mejor servicio y experiencia al navegar en nuestra página. Los datos personales que obtenemos de estas tecnologías de rastreo son los siguientes:</p>
        <p>Fecha y hora del inicio y final de una sesión de un usuario, Páginas web visitadas por un usuario</p>
        <p>Estas cookies, web beacons y otras tecnologías pueden ser deshabilitadas. Para conocer cómo hacerlo, consulte el menú de ayuda de su navegador. Tenga en cuenta que, en caso de desactivar las cookies, es posible que no pueda acceder a ciertas funciones personalizadas en nuestros sitio web.</p>
        
        <h3>¿Cómo puede conocer los cambios en este aviso de privacidad?</h3>
        <p>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas. Nos comprometemos a mantener actualizado este aviso de privacidad sobre los cambios que pueda sufrir y siempre podrá consultar las actualizaciones que existan en el sitio web taxirivieramaya.com.</p>
        <p id="aviso-format">Última actualización de este&nbsp;: 12/08/2023</p>
    </div>

    @include('layout.footer.general')
@endsection