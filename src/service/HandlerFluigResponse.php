<?php 

namespace Plazari15\LaravelFluig\Service;

class HandlerFluigResponse
{
    public function parseResponse($res){
        $data['statusCode'] = $res->getStatusCode();
        $data['content'] = json_decode($res->getBody()->getContents(), true);
        return json_encode($data);
    }
}