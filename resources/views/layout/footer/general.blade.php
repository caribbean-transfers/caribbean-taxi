<footer>
    <div class="container">
        <div>
            <picture>
                <source srcset="/assets/img/logo.png" type="image/webp">
                <img src="/assets/img/logo.png" alt="Traslado a Playa del Carmen" title="Traslado a Playa del Carmen" loading="lazy" width="111" height="71">
            </picture>
            <p>Más de una década de experiencia, ofrecemos el traslado más seguro, veloz y confiable en Cancún.</p>
            <div class="social">
                <a href="https://www.facebook.com/taxirivieramayaMX" title="Facebook" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-facebook"></use></svg></a>
                <a href="https://twitter.com/RivieraMayaTaxi" title="Twitter" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-twitter"></use></svg></a>
                <a href="https://www.instagram.com/taxirivieramaya/" title="Instagram" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-instagram"></use></svg></a>
            </div>
        </div>
        <div>
            <h4>Información</h4>
            <a href="servicios" title="Servicios">Servicios</a>
            <a href="#" title="Nuestra Flota">Nuestra Flota</a>
            <a href="/contacto" title="Contacto">Contacto</a>
        </div>
        <div>
            <h4>Destinos</h4>
            <a href="/taxi-aeropuerto-cancun" title="Taxi Aeropuerto Cancún">Taxi Aeropuerto Cancún</a>
            <a href="/traslado-de-cancun-tulum" title="Traslado de Cancún a Tulum">Traslado de Cancún a Tulum</a>
            <a href="/transporte-cancun-a-playa-del-carmen" title="Transporte de Cancún a Playa del Carmen">Transporte de Cancún a Playa del Carmen</a>
            <a href="/transporte-cancun-a-akumal" title="Transporte de Cancún a Akumal">Transporte de Cancún a Akumal</a>
            <a href="/traslado-aeropuerto-cancun-a-costa-mujeres" title="Transporte de Cancún a Costa Mujeres">Transporte de Cancún a Costa Mujeres</a>
            <a href="/traslado-cancun-a-puerto-morelos" title="Traslado de Cancun a Puerto Morelos">Traslado de Cancun a Puerto Morelos</a>
        </div>
        <div>
            <h4>Contáctanos</h4>
            <div class="item">
                <p>Mándanos un email a:</p>
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
            </div>
            <div class="item">
                <p>Desde USA / Canada</p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}" class="link">{{ config('services.phone.US') }}</a>                
                <hr>
                <p>México & Resto del mundo</p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}" class="link">{{ config('services.phone.MX') }}</a>
            </div>
        </div>
    </div>
</footer>
<div class="gray-footer">
    <div class="container">
        <div>
            <p>Copyrights © 2010-{{date("Y")}} All Rights Reserved.</p>
            <p>
                <a href="/terminos-y-condiciones" title="Términos de Uso">Términos de Uso</a> | <a href="/privacidad" title="Aviso de Privacidad">Aviso de Privacidad</a>
            </p>
        </div>
        <div>
            <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}">{{ config('services.email') }}</a>
            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}">{{ config('services.phone.MX') }}</a>
        </div>
    </div>
</div>