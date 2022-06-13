<?php
/**
 * Project shorten-url.
 * Created by PhpStorm
 * User: tienhm <tiencntt2@gmail.com.vn>
 * Date: 6/13/22
 * Time: 10:15 AM
 */

namespace tienhm7\ShortenUrl;

class TinyURL implements ShortenUrlInterface
{
    use ShortenUrlTrait, RequestTrait;

    const ENDPOINT = 'https://tinyurl.com/api-create.php?url=';

    /**
     * Function shortenUrl
     *
     * @return $this|mixed
     */
    public function shortenUrl()
    {
        if (empty($this->longUrl)) {
            $this->shortUrl = '';
        }

        $url = self::ENDPOINT . $this->longUrl;

        $this->shortUrl = $this->sendRequest($url);

        return $this;
    }
}