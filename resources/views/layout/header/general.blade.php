<header class="header_full_width_container">
    
    <nav class="navbar">
        <a class="navbar-brand" href="/" title="Inicio | Taxi Riviera Maya">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="111" height="71" loading="lazy" alt="Logo | Taxi Riviera Maya" title="Logo | Taxi Riviera Maya">
            </picture>
        </a>
        
        <button type="button" id="openMenuButton">
            <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Riviera Maya" title="Menu | Taxi Riviera Maya" width="25" height="25" loading="lazy">
        </button>

        <div class="collapse">
            <ul>
                <li><a href="/taxi-aeropuerto-cancun" title="Traslado a Cancún">Traslado a Cancún</a></li>
                <li><a href="/traslado-de-cancun-tulum" title="Traslado a Tulum">Traslado a Tulum</a></li>
                <li><a href="/transporte-cancun-a-playa-del-carmen" title="Traslado a Playa del Carmen">Traslado a Playa del Carmen</a></li>
                <li><a href="/cotizaciones" title="Cotizaciones">Cotizaciones</a></li>
            </ul>
            <ul class="right">
                <li>
                    <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="phone" title="Llámanos">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                    </a>
                </li>          
                <li>
                    <a href="https://api.whatsapp.com/send?phone=5219982942389&text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="whatsapp" title="Whatsapp">
                        <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                    </a>
                </li>
                <li><a href="/reserva" class="my-booking-btn" title="Mi reservación">Mi reserva</a></li>
            </ul>
        </div>

        <div class="hide-menu">
            <div>
                <div>
                    <div class="last">
                        <div class="top" id="closeMenuButton">
                            <div>
                                <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Riviera Maya" title="Menu | Taxi Riviera Maya" width="25" height="25" loading="lazy">
                                Menú
                            </div>
                            <button><img src="/assets/img/svg/close.svg" width="32" height="25" alt="" title="" loading="lazy"></button>
                        </div>
                        <div class="content">
                            <div class="items">
                                <a href="/" title="Inicio">Inicio</a>
                                <a href="/taxi-aeropuerto-cancun" title="Traslado a Cancún">Traslado a Cancún</a>
                                <a href="/traslado-de-cancun-tulum" title="Traslado a Tulum">Traslado a Tulum</a>
                                <a href="/transporte-cancun-a-playa-del-carmen" title="Traslado a Playa del Carmen">Traslado a Playa del Carmen</a>
                                <a href="/transporte-cancun-a-akumal" title="Transporte de Cancún a Akumal">Transporte de Cancún a Akumal</a>
                                <a href="/cotizaciones" title="Cotizaciones">Cotizaciones</a>
                            </div>                            
                            <div class="items">
                                <div class="info">
                                    <p>Atención a clientes</p>
                                    <p>Para más información sobre tu reservación, comunícate con nosotros. ¡Te ayudaremos!</p>
                                </div>
                                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="Teléfono México | Taxi Riviera Maya">{{  config('services.phone.MX') }}</a>
                                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="Teléfono USA & Canada | Taxi Riviera Maya">{{  config('services.phone.US') }}</a>
                            </div>                                
                            <div class="items">
                                <a href="https://api.whatsapp.com/send?phone=5219982942389&text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="whatsapp">
                                    <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                                    Whatsapp
                                </a>
                                <a href="/reserva" class="my-booking">Mi Reserva</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>