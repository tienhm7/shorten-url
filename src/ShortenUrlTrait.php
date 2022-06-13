<?php
/**
 * Project shorten-url.
 * Created by PhpStorm
 * User: tienhm <tiencntt2@gmail.com.vn>
 * Date: 6/13/22
 * Time: 10:16 AM
 */

namespace tienhm7\ShortenUrl;

trait ShortenUrlTrait
{
    /**
     * Function setLongUrl
     *
     * @param $longUrl
     * @return $this
     */
    public function setLongUrl($longUrl = '')
    {
        $this->longUrl = $longUrl;
        return $this;
    }

    /**
     * Function getLongUrl
     *
     * @return mixed|string
     */
    public function getLongUrl()
    {
        return $this->longUrl;
    }

    /**
     * Function getshortUrl
     *
     * @return mixed
     */
    public function getshortUrl()
    {
        return $this->shortUrl;
    }
}