<div class="before_menu_container">
    <div class="container before_menu_items">
        <div>
            <p>For more information about your reservation, please call us at: <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}"><strong>{{ config('services.phone.US') }}</strong></a> | <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}"><strong>{{ config('services.phone.MX') }}</strong></a></p>
            <p>E-mail: <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}"><strong>{{ config('services.email') }}</strong></a></p>
        </div>
    </div>
</div>