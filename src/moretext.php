<?php

namespace Moretext;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Client to access the service
 * @packaged Moretext
 */
class Client
{
    public function get()
    {
        $client = new GuzzleHttp\Client();
        $res = $client->get("http://more.handlino.com/sentences.json");
        if ($res->getStatusCode() !== "200") {
            throw new Error($res->getStatusCode());
        }
        $result = json_decode($res->getBody());
        return $result['sentences'];
    }
}
