<?php

function getCountryCode(){
    $url = "https://api.country.is/185.90.134.203";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}

function getIpAddress(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        $ip = "unknown";
    }

    return $ip;
}