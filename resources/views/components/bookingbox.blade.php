<div class="bookingbox">
    <form id="aff-form">
        <div class="options">
            <div class="one">
                <button class="aff-toggle-type active" type="button" data-type="OW">Ida</button>
                <button class="aff-toggle-type" type="button" data-type="RT">Ida y Vuelta</button>
            </div>
            <div class="two">
                <button type="button" class="aff-toggle-currency active" data-currency="USD">USD</button>
                <button type="button" class="aff-toggle-currency" data-currency="MXN">MXN</button>
            </div>
        </div>
        <div class="elements">
            <div class="one">                    
                <div>
                    <label for="aff-input-from">Saliendo de</label>
                    <input type="text" class="form-control" id="aff-input-from" placeholder="Ingresa el lugar de recogida" autocomplete="off">
                    <div id="aff-input-from-elements"></div>
                </div>
                <div>
                    <label for="aff-input-to">Ir a</label>
                    <input type="text" class="form-control" id="aff-input-to" placeholder="Indica el destino" autocomplete="off">
                    <div id="aff-input-to-elements"></div>
                </div>
                <div>
                    <label for="aff-input-pickup-date">Fecha de recogida</label>
                    <input type="date" class="form-control" id="aff-input-pickup-date">
                </div>
                <div>
                    <label for="aff-input-pickup-time">Hora de recogida</label>                    
                    <input type="time" class="form-control" id="aff-input-pickup-time" value="00:00">
                </div>
                <div>
                    <label for="aff-input-passengers">Pasajeros</label>
                    <select class="form-control" id="aff-input-passengers">
                        <?php for($i=1; $i<=25; $i++): ?>
                            <option value="<?=$i?>"><?=$i?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="two hidden" id="aff-round-trip-element">
                <div>
                    <label for="aff-input-to-from">Saliendo de</label>
                    <input type="text" class="form-control" id="aff-input-to-from" placeholder="Ingresa el lugar de recogida" disabled>
                </div>
                <div>
                    <label for="aff-input-to-to">Ir a</label>
                    <input type="text" class="form-control" id="aff-input-to-to" placeholder="Indica el destino" disabled>
                </div>
                <div>
                    <label for="aff-input-to-pickup-date">Fecha de recogida</label>
                    <input type="date" class="form-control" id="aff-input-to-pickup-date">
                </div>
                <div>
                    <label for="aff-input-to-pickup-time">Hora de recogida</label>
                    <input type="time" class="form-control" id="aff-input-to-pickup-time" value="00:00">
                </div>
                <div>
                    <label for="aff-input-to-passengers">Pasajeros</label>
                    <input type="text" class="form-control" id="aff-input-to-passengers" disabled value="1">
                </div>
            </div>
        </div>
        <div class="button">
            @csrf
            <button id="aff-button-send">BUSCAR</button>
        </div>
    </form>
    <div id="aff-error-list"></div>
    <p>            
        <?php if(app()->getLocale() == "en"): ?>
            Book now and pay later | <strong>FREE cancellation</strong> on all our services | Pay in installments
        <?php endif; ?>
        <?php if(app()->getLocale() == "es"): ?>
            Reserva ahora y paga después | Cancelación <strong>GRATIS</strong> en todos nuestros servicios
        <?php endif; ?>
    </p>
</div>