<?php 

namespace Plazari15\LaravelFluig\Service;

class HandlerFluigResponse
{
    public function parseResponse($res){
        $data['statusCode'] = $res->getStatusCode();
        $data['content'] = json_decode($res->getBody()->getContents(), true);
        return json_encode($data);
    }

    /**
     * @param $res
     * @return statusCode = 500, validar o erro
     *
     */
    public function parseResponseError($res){
        $data = json_decode($res->getResponse()->getBody()->getContents(), true);
        $data['statusCode'] = $res->getCode();
        return json_encode($data);
    }
}