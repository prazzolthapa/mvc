<?php
if (!function_exists('redirect')){
    function redirect($url){
        header('location:{url}');
    }
}
if (!function_exists('config')){
    function config($key){
        require "config/setting.php";
        if (key_exists($key,$setting)) {
            return $setting[$key];
        }
        else{
            return false;
        }
    }
}
if (!function_exists($uri='')){
    $base_uri=config('uri');

    if($base_uri[(strlen($base_uri)-1)]=='/'|| (!empty($uri) && $uri=='/')) {
        return $base_uri;
    }
    else{
        return $base_uri.'/'.$uri;
    }
}
