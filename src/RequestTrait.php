<?php
/**
 * Project shorten-url.
 * Created by PhpStorm
 * User: tienhm <tiencntt2@gmail.com.vn>
 * Date: 6/13/22
 * Time: 10:16 AM
 */

namespace tienhm7\ShortenUrl;

trait RequestTrait
{
    public function sendRequest($url = '', $data = '', $method = 'GET')
    {
        $endpoint = (
            !empty($data) &&
            (
                is_array($data) ||
                is_object($data)
            )
        ) ?
            $url . '?' . http_build_query($data) :
            $url;

        $method = strtoupper($method);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return NULL;
        }

        return $response;
    }
}