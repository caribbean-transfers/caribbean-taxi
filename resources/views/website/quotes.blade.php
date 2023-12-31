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
            <h1>REQUEST A QUOTE</h1>
        </div>
    </div>

    <div class="container items">
        <div class="top">
            <p>Fill out the form below, and our dedicated team will promptly provide you with a customized quote tailored to your travel needs. Experience reliable, secure, and comfortable transfers to your destination. Your seamless journey begins here!</p>
            <div id="message"></div>
        </div>
        <form class="bottom" method="POST" id="formData">
            <div class="one">
                <div>
                    <label>NAME <small>*</small></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <label>LAST NAME <small>*</small></label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div>
                    <label>E-MAIL <small>*</small></label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div>
                    <label>PHONE <small>*</small></label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>
            
            <div class="two">
                <h2>Transportation Details</h2>
                <div>
                    <div>
                        <label>TYPE OF TRANSFER <small>*</small></label>
                        <select class="form-control" name="service_type" id="service_type">
                            <option value="Round Trip" selected>Round Trip</option>
                            <option value="One Way">One Way</option>
                        </select>
                    </div>
                    <div>
                        <label>LEAVING FROM <small>*</small></label>
                        <input type="text" class="form-control" name="origin" required>
                    </div>
                    <div>
                        <label>GOING TO <small>*</small></label>
                        <input type="text" class="form-control" name="destination" required>
                    </div>
                    <div>
                        <label>No. PASSENGERS <small>*</small></label>
                        <select class="form-control" name="passengers">
                            @for($i=1; $i<=20; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="three">
                <h2>Arrival information</h2>
                <div>
                    <div>
                        <label>ARRIVAL DATE</label>
                        <input type="date" class="form-control" name="arrival_date" required>
                    </div>
                    <div>
                        <label>AIRLINE</label>
                        <input type="text" class="form-control" name="arrival_airline" required>
                    </div>
                    <div>
                        <label>FLIGHT NUMBER</label>
                        <input type="text" class="form-control" name="arrival_flight_number" required>
                    </div>
                </div>
            </div>

            <div class="four" id="departure_item">
                <h2>Departure information</h2>
                <div>
                    <div>
                        <label>DEPARTURE DATE</label>
                        <input type="date" class="form-control" name="departure_date">
                    </div>
                    <div>
                        <label>AIRLINE</label>
                        <input type="text" class="form-control" name="departure_airline">
                    </div>
                    <div>
                        <label>FLIGHT NUMBER</label>
                        <input type="text" class="form-control" name="departure_flight_number">
                    </div>
                </div>
            </div>            

            <div class="five">
                <label>NOTES / SPECIAL REQUIREMENTS <small>*</small></label>
                <textarea class="form-control" rows="6" cols="30" name="message"></textarea>
            </div>
            @csrf
            <button type="submit">SUBMIT</button>

        </form>
    </div>

    @include('layout.footer.general')
@endsection