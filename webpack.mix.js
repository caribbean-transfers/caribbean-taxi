let mix = require('laravel-mix');
mix.setPublicPath('public');

const DATA = {
    RESOURCES: "resources", // source files
    PUBLIC_FOLDER: "public/assets" //build assets files
};

mix.sass(DATA.RESOURCES+'/scss/base/index.scss', DATA.PUBLIC_FOLDER + "/css/base.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/index.scss', DATA.PUBLIC_FOLDER + "/css/website/index.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/privacy.scss', DATA.PUBLIC_FOLDER + "/css/website/privacy.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/terms.scss', DATA.PUBLIC_FOLDER + "/css/website/terms.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/services.scss', DATA.PUBLIC_FOLDER + "/css/website/services.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/contact.scss', DATA.PUBLIC_FOLDER + "/css/website/contact.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/quotes.scss', DATA.PUBLIC_FOLDER + "/css/website/quotes.min.css");

mix.sass(DATA.RESOURCES+'/scss/process/search.scss', DATA.PUBLIC_FOLDER + "/css/process/search.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/checkout.scss', DATA.PUBLIC_FOLDER + "/css/process/checkout.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/processing.scss', DATA.PUBLIC_FOLDER + "/css/process/processing.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/thank-you.scss', DATA.PUBLIC_FOLDER + "/css/process/thank-you.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/cancel.scss', DATA.PUBLIC_FOLDER + "/css/process/cancel.min.css");

mix.sass(DATA.RESOURCES+'/scss/process/login.scss', DATA.PUBLIC_FOLDER + "/css/process/login.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/reservation-detail.scss', DATA.PUBLIC_FOLDER + "/css/process/reservation-detail.min.css");

//Destinations
mix.sass(DATA.RESOURCES+'/scss/destinations/cancun.scss', DATA.PUBLIC_FOLDER + "/css/destinations/cancun.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/tulum.scss', DATA.PUBLIC_FOLDER + "/css/destinations/tulum.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/playa-del-carmen.scss', DATA.PUBLIC_FOLDER + "/css/destinations/playa-del-carmen.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/akumal.scss', DATA.PUBLIC_FOLDER + "/css/destinations/akumal.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/costa-mujeres.scss', DATA.PUBLIC_FOLDER + "/css/destinations/costa-mujeres.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/puerto-morelos.scss', DATA.PUBLIC_FOLDER + "/css/destinations/puerto-morelos.min.css");

mix.js(DATA.RESOURCES+'/js/base/index.js', DATA.PUBLIC_FOLDER + "/js/base/index.min.js");
mix.js(DATA.RESOURCES+'/js/bookingbox/index.js', DATA.PUBLIC_FOLDER + "/js/bookingbox/index.min.js");
mix.js(DATA.RESOURCES+'/js/process/listing.js', DATA.PUBLIC_FOLDER + "/js/process/listing.min.js");
mix.js(DATA.RESOURCES+'/js/quotations/index.js', DATA.PUBLIC_FOLDER + "/js/quotations/index.min.js");

mix.combine([DATA.RESOURCES+'/js/libs/validator.js', DATA.RESOURCES+'/js/process/checkout.js'], DATA.PUBLIC_FOLDER + '/js/process/checkout.min.js');

if (mix.inProduction()) {
    mix.version();
}