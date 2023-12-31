<footer>
    <div class="container">
        <div>
            <picture>
                <source srcset="/assets/img/logo.png" type="image/webp">
                <img src="/assets/img/logo.png" alt="Caribbean Taxi" title="Caribbean Taxi" loading="lazy" width="222" height="82">
            </picture>
            <p>More than a decade of experience, we offer the safest, fastest and most reliable transfer in Cancun.</p>
            @if(false)
            <div class="social">
                <a href="https://www.facebook.com/taxirivieramayaMX" title="Facebook" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-facebook"></use></svg></a>
                <a href="https://twitter.com/RivieraMayaTaxi" title="Twitter" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-twitter"></use></svg></a>
                <a href="https://www.instagram.com/taxirivieramaya/" title="Instagram" rel="noopener noreferrer"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#social-instagram"></use></svg></a>
            </div>
            @endif
        </div>
        <div>
            <h4>Information</h4>
            <a href="/services" title="Services">Services</a>
            <a href="/quote" title="Quotations">Quotations</a>
            <a href="/contact" title="Contact">Contact</a>
        </div>
        <div>
            <h4>Destinations</h4>
            <a href="/cancun-airport-transportation" title="Cancun Airport Transportation">Cancun Airport Transportation</a>
            <a href="/cancun-to-tulum-shuttle" title="Cancun to Tulum Shuttle">Cancun to Tulum Shuttle</a>
            <a href="/transportation-cancun-airport-to-playa-del-carmen" title="Transportation from Cancun to Playa del Carmen">Transportation from Cancun to Playa del Carmen</a>
            <a href="/cancun-to-akumal-shuttle" title="Cancun to Akumal Shuttle">Cancun to Akumal Shuttle</a>
        </div>
        <div>
            <h4>Contact us</h4>
            <div class="item">
                <p>Send us an email to:</p>
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
            </div>
            <div class="item">
                <p>From USA / Canada</p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}" class="link">{{ config('services.phone.US') }}</a>                
                <hr>
                <p>México & Rest of the World</p>
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
                <a href="/terms-and-conditions" title="Terms and Conditions">Terms and Conditions</a> | <a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a>
            </p>
        </div>
        <div>
            <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}">{{ config('services.email') }}</a>
            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}">{{ config('services.phone.MX') }}</a>
        </div>
    </div>
</div>