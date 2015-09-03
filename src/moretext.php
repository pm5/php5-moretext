<?php

namespace Moretext;

require __DIR__ . "/../vendor/autoload.php";

/**
 * Client to access the service
 * @packaged Moretext
 */
class Client
{
    public function get($n = 1, $limit = null)
    {
        $query = [ "n" => $n ];
        if (! is_null($limit)) {
            if (is_array($limit)) {
                $limit = $limit[0] . "," . $limit[1];
            }
            $query["limit"] = $limit;
        }
        $client = new \GuzzleHttp\Client();
        $res = $client->get("http://more.handlino.com/sentences.json", [
            "query" => $query
        ]);
        if ($res->getStatusCode() !== 200) {
            throw new \Exception($res->getStatusCode());
        }
        $result = json_decode($res->getBody());
        return $result->sentences;
    }
}
