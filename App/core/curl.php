<?php

namespace Asesores\core;

require_once(__DIR__ . '/settings.php');
class Curl
{
    static public function CurlCore($url0)
    {
        $ch0 = curl_init();
        curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch0, CURLOPT_URL, $url0);
        $result0 = curl_exec($ch0);
        curl_close($ch0);
        $arr0 = json_decode($result0, true);
        return $arr0;
    }
}
