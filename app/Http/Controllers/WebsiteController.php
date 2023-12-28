<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;

class WebsiteController extends Controller{

    use SeoTrait;
    public $seo = [];

    public function index(){
        $this->seoData("home");
        return view('website.index', ['seo' => $this->seo]);
    }
    
    public function contact(){
        $this->seoData("contact");
        return view('website.contact', ['seo' => $this->seo]);
    }

    public function privacy(){
        $this->seoData("privacy");
        return view('website.privacy', ['seo' => $this->seo]);
    }

    public function terms(){
        $this->seoData("terms");
        return view('website.terms', ['seo' => $this->seo]);
    }

    public function services(){
        $this->seoData("services");
        return view('website.services', ['seo' => $this->seo]);
    }

    public function quotes(){
        $this->seoData("quotes");
        return view('website.quotes', ['seo' => $this->seo]);
    }

    public function destinationCancun(){
        $this->seoData("destination-cancun");
        return view('destinations.cancun', ['seo' => $this->seo]);
    }

    public function destinationTulum(){
        $this->seoData("destination-tulum");
        return view('destinations.tulum', ['seo' => $this->seo]);
    }

    public function destinationPDC(){
        $this->seoData("destination-pdc");
        return view('destinations.playa-del-carmen', ['seo' => $this->seo]);
    }

    public function destinationAkumal(){
        $this->seoData("destination-akumal");
        return view('destinations.akumal', ['seo' => $this->seo]);
    }

    public function destinationCostaMujeres(){
        $this->seoData("destination-costa-mujeres");
        return view('destinations.costa-mujeres', ['seo' => $this->seo]);
    }

    public function destinationPuertoMorelos(){
        $this->seoData("destination-puerto-morelos");
        return view('destinations.puerto-morelos', ['seo' => $this->seo]);
    }
}