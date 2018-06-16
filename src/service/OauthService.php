<?php

namespace Plazari15\LaravelFluig\Service;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Illuminate\Support\Facades\Config;

class OauthService
{
    
    public function getApiAuth(){

        try{
	   		$middleware = new Oauth1([
                'consumer_key'    => Config::get('laravelFluig::FLUIG_CONSUMER_KEY'),
                'consumer_secret' => Config::get('laravelFluig::FLUIG_CONSUMER_SECRET'),
                'token'           => Config::get('laravelFluig::FLUIG_ACCESS_TOKEN'),
                'token_secret'    => Config::get('laravelFluig::FLUIG_TOKEN_SECRET')
	    	]);


	    	return $middleware;

		}catch(Exception $e){
            \Log::info(__METHOD__.$e->getMessage());
			return $e->getMessage();
		}
    }

    public function getApiAuthPost(){

        try{
            $middleware = new Oauth1([
                'consumer_key'    => Config::get('laravelFluig::FLUIG_CONSUMER_KEY_POST'),
                'consumer_secret' => Config::get('laravelFluig::FLUIG_CONSUMER_SECRET_POST'),
                'token'           => Config::get('laravelFluig::FLUIG_ACCESS_TOKEN_POST'),
                'token_secret'    => Config::get('laravelFluig::FLUIG_TOKEN_SECRET_POST')
            ]);

	    	return $middleware;

		}catch(Exception $e){
            \Log::info(__METHOD__.$e->getMessage());
			return $e->getMessage();
		}
    }

}