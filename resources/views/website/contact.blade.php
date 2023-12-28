@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script src="https://www.google.com/recaptcha/api.js?render=6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr" defer></script>

    <script>
        const form = document.getElementById('formData');
        const messageDiv = document.getElementById('message');

        document.addEventListener('DOMContentLoaded', () => {
            
            form.addEventListener('submit', e => {
                e.preventDefault();                
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr', { action: 'submit' }).then(function(token) {
                        form.querySelector('button').disabled = true;
                        onSubmit(token, form);
                    });
                });
            });
        });

        const onSubmit = (token, form) => {            
            messageDiv.innerHTML = '';
            let newForm = new FormData(form);
            const fields = {};

            newForm.append('g_recaptcha_response', token);
            for(let [key, value] of newForm.entries()){
                fields[key]= value;
            }

            fetch('/api/make-contact', {
                method: 'POST',
                headers: { 
                    'Content-Type': 'application/json',                    
                },
                body: JSON.stringify(fields)
            })
            .then( response => response.json())
            .then( jsonData => {
                form.querySelector('button').disabled = false;
                if(jsonData.status == true){
                    messageDiv.textContent = `El correo ha sido enviado con éxito, en breve un agente te contactará.`;
                    messageDiv.classList.add('success');
                    form.reset();
                }else{
                    messageDiv.textContent = `Ocurrió un error al enviar el mensaje, por favor contáctanos por teléfono`;
                    messageDiv.classList.add('error');                    
                }
            })
            .catch( error => console.log( error ) );
        }

    </script>
@endpush

@section('content')    
    @include('layout.header.general')
    
    <div class="parallax-container">
        <div class="container">
            <h1>CONTACTO</h1>
        </div>
    </div>

    <div class="container contact-information">
        <div class="left">
            <h3>Escríbenos</h3>
            <p>Si deseas una cotización de un servicio especial de transporte, no dudes en consultarnos, llena el siguiente formulario y nos pondremos en contacto lo más pronto posible.</p>
            <div id="message"></div>
            <form action="" method="POST" id="formData">
                <div>
                    <label>NOMBRE <small>*</small></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <label>EMAIL <small>*</small></label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="two">
                    <div>
                        <label>ASUNTO <small>*</small></label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div>
                        <label>TELÉFONO <small>*</small></label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                <div>
                    <label>MENSAJE <small>*</small></label>
                    <textarea class="form-control" rows="6" cols="30" name="message" required></textarea>
                </div>
                @csrf
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d95964.57023084786!2d-86.88969297907376!3d21.110658783509688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e8047678409bf%3A0x5fd4feaf78eabb92!2sCancun+International+Airport!5e0!3m2!1sen!2smx!4v1559004048524!5m2!1sen!2smx" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>

    @include('layout.footer.general')
@endsection