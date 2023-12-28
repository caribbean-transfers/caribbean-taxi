@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/quotes.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/quotes.min.css') }}" rel="stylesheet">
    <script defer src="{{ mix('/assets/js/quotations/index.min.js') }}"></script>
@endpush
@push("push-bottom")
    <script src="https://www.google.com/recaptcha/api.js?render=6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr" defer></script>
@endpush

@section('content')
    @include('layout.header.general')

    <div class="parallax-container">
        <div class="container">
            <h1>COTIZACIONES</h1>
        </div>
    </div>

    <div class="container items">
        <div class="top">
            <p>Si deseas una cotización de un servicio especial de transporte, no dudes en consultarnos, llena el siguiente formulario y nos pondremos en contacto lo más pronto posible.</p>
            <div id="message"></div>
        </div>
        <form class="bottom" method="POST" id="formData">
            <div class="one">
                <div>
                    <label>NOMBRE <small>*</small></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <label>APELLIDOS <small>*</small></label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div>
                    <label>E-MAIL <small>*</small></label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div>
                    <label>TELÉFONO <small>*</small></label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>
            
            <div class="two">
                <h2>Datos del traslado</h2>
                <div>
                    <div>
                        <label>TIPO DE TRASLADO <small>*</small></label>
                        <select class="form-control" name="service_type" id="service_type">
                            <option value="Redondo" selected>Redondo</option>
                            <option value="Sencillo">Sencillo</option>
                        </select>
                    </div>
                    <div>
                        <label>ORIGEN <small>*</small></label>
                        <input type="text" class="form-control" name="origin" required>
                    </div>
                    <div>
                        <label>DESTINO <small>*</small></label>
                        <input type="text" class="form-control" name="destination" required>
                    </div>
                    <div>
                        <label>N0. PASAJEROS <small>*</small></label>
                        <select class="form-control" name="passengers">
                            @for($i=1; $i<=20; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="three">
                <h2>Información de llegada</h2>
                <div>
                    <div>
                        <label>FECHA LLEGADA</label>
                        <input type="date" class="form-control" name="arrival_date" required>
                    </div>
                    <div>
                        <label>AEROLÍNEA</label>
                        <input type="text" class="form-control" name="arrival_airline" required>
                    </div>
                    <div>
                        <label>Nº DE VUELO</label>
                        <input type="text" class="form-control" name="arrival_flight_number" required>
                    </div>
                </div>
            </div>

            <div class="four" id="departure_item">
                <h2>Información de regreso</h2>
                <div>
                    <div>
                        <label>FECHA REGRESO</label>
                        <input type="date" class="form-control" name="departure_date">
                    </div>
                    <div>
                        <label>AEROLÍNEA</label>
                        <input type="text" class="form-control" name="departure_airline">
                    </div>
                    <div>
                        <label>Nº DE VUELO</label>
                        <input type="text" class="form-control" name="departure_flight_number">
                    </div>
                </div>
            </div>            

            <div class="five">
                <label>NOTAS / REQUERIMIENTOS ESPECIALES <small>*</small></label>
                <textarea class="form-control" rows="6" cols="30" name="message"></textarea>
            </div>
            @csrf
            <button type="submit">ENVIAR</button>

        </form>
    </div>

    @include('layout.footer.general')
@endsection