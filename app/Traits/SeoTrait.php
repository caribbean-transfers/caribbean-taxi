<?php
    namespace App\Traits;

    trait SeoTrait{
        protected static $json;

        public static function initialize()
        {
            $json = @file_get_contents(public_path() . '/assets/json/seo/index.json');
            if ($json === false) {
                exit("SEO data not found...");
            }
            self::$json = json_decode($json);
        }

        public static function makeMeta($lang = "en", $path, $meta, $vars = [])
        {
            if (isset(self::$json->{$path}->languages->{$lang}->metas->{$meta})) {
                $url = (string) self::$json->{$path}->languages->{$lang}->metas->{$meta};
                $processedPath = preg_replace_callback('/{{(.*?)}}/', function ($preg) use ($vars) {
                    return isset($vars[$preg[1]]) ? $vars[$preg[1]] : $preg[0];
                }, $url);
                return $processedPath;
            } else {
                return "";
            }
        }

        public static function createURL($lang = "en", $path, $vars = array())
        {   
            self::initialize();            
            if (isset(self::$json->{$path}->languages->{$lang}->path)) {
                $url = (string) self::$json->{$path}->languages->{$lang}->path;
                $processedPath = preg_replace_callback('/{{(.*?)}}/', function ($preg) use ($vars) {
                    return isset($vars[$preg[1]]) ? $vars[$preg[1]] : $preg[0];
                }, $url);
                return $processedPath;
            } else {
                return "/";
            }
        }

        public static function getAlternates($lang = "en", $path, $vars = array())
        {
            if (isset(self::$json->{$path}->alternates)) {
                return (array) self::$json->{$path}->alternates;
            } else {
                return [];
            }
        }

        public static function getAlternateByPath($lang = "en", $path)
        {
            if (isset(self::$json->{$path}->alternates->{$lang})) {
                return self::$json->{$path}->alternates->{$lang};
            } else {
                return "/";
            }
        }

        public static function seoData($code = 'home', $preload = [], $links = [])
        {            
            self::initialize();

            $seo['meta']['title'] = self::makeMeta(app()->getLocale(), $code, "title");
            $seo['meta']['description'] = self::makeMeta(app()->getLocale(), $code, "description");
            $seo['meta']['keywords'] = self::makeMeta(app()->getLocale(), $code, "keywords");
            $seo['alternate'] = self::getAlternates(app()->getLocale(), $code);
            $seo['preload'] = $preload;
            $seo['links'] = $links;

            return $seo;
        }
}