<?php
/**
 * Created by PhpStorm.
 * User: pedrolazari
 * Date: 15/06/2018
 * Time: 16:01
 */


return array(
    /**
     * Fluig Chave Cliente (Método GET)
     */
    'FLUIG_CONSUMER_KEY'    =>  getenv('FLUIGPHP.FLUIG_CONSUMER_KEY'),
    'FLUIG_CONSUMER_SECRET' =>  getenv('FLUIGPHP.FLUIG_CONSUMER_SECRET'),

    /**
     * Fluig Access Token
     */
    'FLUIG_ACCESS_TOKEN'    =>  getenv('FLUIGPHP.FLUIG_ACCESS_TOKEN'),
    'FLUIG_TOKEN_SECRET'    =>  getenv('FLUIGPHP.FLUIG_TOKEN_SECRET'),

    /**
     * Fluig Chave Cliente (Método POST)
     */
    'FLUIG_CONSUMER_KEY_POST'   =>  getenv('FLUIGPHP.FLUIG_CONSUMER_KEY_POST'),
    'FLUIG_CONSUMER_SECRET_POST'    =>  getenv('FLUIGPHP.FLUIG_CONSUMER_SECRET_POST'),

    /**
     * Fluig Access Token
     */
    'FLUIG_ACCESS_TOKEN_POST'   =>  getenv('FLUIGPHP.FLUIG_ACCESS_TOKEN_POST'),
    'FLUIG_TOKEN_SECRET_POST'   =>  getenv('FLUIGPHP.FLUIG_TOKEN_SECRET_POST'),

    /**
     * URL FLUIG
     */
    'FLUIG_URL' =>  getenv('FLUIGPHP.FLUIG_URL')
);