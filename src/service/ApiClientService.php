<?php

namespace Plazari15\LaravelFluig\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Support\Facades\Config;
use Plazari15\LaravelFluig\Service\OauthService;
use Plazari15\LaravelFluig\Service\HandlerFluigResponse;
use Plazari15\LaravelFluig\Model\Dataset;

class ApiClientService
{

    public function get($endpoint){
        $response = new HandlerFluigResponse;

        $stack = new OauthService;

		try{
	    	$client = new Client([
	    		'base_url' => Config::get('laravelFluig::FLUIG_URL'),
                'defaults' => ['auth' => 'oauth']
	    	]);

	    	$client->getEmitter()->attach($stack->getApiAuth());

	    	$res = $client->get($endpoint);
            return $response->parseResponse($res);

        }catch(BadResponseException $e){
            return $response->parseResponseError($e);
        }

	}
		
	public function post($endpoint, $data){
		$response = new HandlerFluigResponse;

        $res = null;
		try{

            $stack = new OauthService;
	    	$client = new Client([
	    		'base_url' => Config::get('laravelFluig::FLUIG_URL'),
                'defaults' => ['auth' => 'oauth']
			]);

	    	$client->getEmitter()->attach($stack->getApiAuthPost());

	        $res = $client->post($endpoint, ['json' => $data]);

			return $response->parseResponse($res);

		}catch(BadResponseException $e) {
            return $response->parseResponseError($e);
        }
    }
}