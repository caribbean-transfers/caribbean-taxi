<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;

class DestinationsController extends Controller{
    public function cancun(){        
        $this->seo = SeoTrait::seoData('destination-cancun');
        return view('destinations.cancun', ['seo' => $this->seo]);
    }

    public function tulum(){        
        $this->seo = SeoTrait::seoData('destination-tulum');
        return view('destinations.tulum', ['seo' => $this->seo]);
    }

    public function playaDelCarmen(){        
        $this->seo = SeoTrait::seoData('destination-pdc');
        return view('destinations.playa-del-carmen', ['seo' => $this->seo]);
    }

    public function akumal(){
        $this->seo = SeoTrait::seoData('destination-akumal');        
        return view('destinations.akumal', ['seo' => $this->seo]);
    }
}