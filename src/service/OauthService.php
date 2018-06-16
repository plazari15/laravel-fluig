<?php

namespace Plazari15\LaravelFluig\Service;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Illuminate\Support\Facades\Config;

class OauthService
{
    
    public function getApiAuth(){

        //try{
	   		$middleware = new Oauth1([
                'consumer_key'    => Config::get('LaravelFluig::FLUIG_CONSUMER_KEY'),
                'consumer_secret' => Config::get('LaravelFluig::FLUIG_CONSUMER_SECRET'),
                'token'           => Config::get('LaravelFluig::FLUIG_ACCESS_TOKEN'),
                'token_secret'    => Config::get('LaravelFluig::FLUIG_TOKEN_SECRET')
	    	]);

//	    	return $middleware;
//
//		}catch(Exception $e){
//			return $e->getMessage();
//		}

		return $middleware;
    }

    public function getApiAuthPost(){

        //try{
        $middleware = new Oauth1([
            'consumer_key'    => Config::get('LaravelFluig::FLUIG_CONSUMER_KEY_POST'),
            'consumer_secret' => Config::get('LaravelFluig::FLUIG_CONSUMER_SECRET_POST'),
            'token'           => Config::get('LaravelFluig::FLUIG_ACCESS_TOKEN_POST'),
            'token_secret'    => Config::get('LaravelFluig::FLUIG_TOKEN_SECRET_POST')
        ]);

//	    	return $middleware;
//
//		}catch(Exception $e){
//			return $e->getMessage();
//		}

        return $middleware;
    }

}