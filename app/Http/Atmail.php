<?php

namespace App\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;

class Atmail extends Controller
{

    public function mailit($to,$maildata){

        $url = env('APP_URL').'send-mail/'.$to.'/'.urlencode(serialize($maildata));
        $client = new \GuzzleHttp\Client();
$response = $client->request('GET', $url, []);
$statusCode = $response->getStatusCode();
$content = $response->getBody();
        return ($statusCode);
    }
}
