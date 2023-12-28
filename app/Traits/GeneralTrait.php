<?php
namespace App\Traits;

trait GeneralTrait
{
    public static function clearPhone($phone){
        $phone = str_replace("-", "", $phone);
        $phone = str_replace("(", "", $phone);
        $phone = str_replace(")", "", $phone);
        $phone = str_replace(" ", "", $phone);
        $phone = str_replace("-", "", $phone);
        return $phone;
    }

    public static function validateCaptcha($gRecaptchaResp){
        $cu = curl_init();        
        curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($cu, CURLOPT_POST, true);
        curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query([
            "secret" => config('services.captcha.secret'), "response" => $gRecaptchaResp
        ]));
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cu, CURLOPT_SSL_VERIFYPEER, FALSE);   
        $captchaResp = curl_exec($cu);
        curl_close($cu);
        $captchaResp = json_decode($captchaResp, true);        
        return ($captchaResp["success"] == true && $captchaResp["score"] > 0.5 ) ? true : false;
    }
}