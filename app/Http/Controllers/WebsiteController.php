<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;

class WebsiteController extends Controller{

    use SeoTrait, GeneralTrait;

    public function index(){
        $this->seo = SeoTrait::seoData('destinations');
        return view('website.index', ['seo' => $this->seo]);
    }
    
    public function contact(){        
        $this->seo = SeoTrait::seoData('contact');
        return view('website.contact', ['seo' => $this->seo]);
    }

    public function privacy(){        
        $this->seo = SeoTrait::seoData('privacy');
        $terms = GeneralTrait::getTerms('privacy');
        return view('website.privacy', ['seo' => $this->seo, 'terms' => $terms]);
    }

    public function terms(){        
        $this->seo = SeoTrait::seoData('terms');
        $terms = GeneralTrait::getTerms();  
        return view('website.terms', ['seo' => $this->seo, 'terms' => $terms]);
    }

    public function services(){        
        $this->seo = SeoTrait::seoData('services');
        return view('website.services', ['seo' => $this->seo]);
    }

    public function quotes(){ 
        $this->seo = SeoTrait::seoData('quotes');
        return view('website.quotes', ['seo' => $this->seo]);
    }
}