# Laravel TOTVS Fluig Package

[![stable](http://badges.github.io/stability-badges/dist/stable.svg)](http://github.com/badges/stability-badges)

This is a package that turns easy the Communication between Laravel and TOTVS Fluig by REST API.

This is a package developed to Work with Laravel  \>= 4.2.

**To make a new installation **
1. just run this composer command 
```bash
composer require plazari15/laravel-fluig
```

2. Insert the provider at `app\config.php`
```php
'Plazari15\LaravelFluig\LaravelFluigServiceProvider'
```

3. Publish the config file

```bash
php artisan config:publish plazari15/laravel-fluig
```

4. Set your ENVs following the [Totvs TDN ](http://tdn.totvs.com/pages/releaseview.action?pageId=239041233)

	**Env Sample**
	```php
	'FLUIGPHP' => array(
			'FLUIG_CONSUMER_KEY'=>'',
			'FLUIG_CONSUMER_SECRET'=>'',
			'FLUIG_ACCESS_TOKEN'=>'',
			'FLUIG_TOKEN_SECRET'=>'',
			'FLUIG_CONSUMER_KEY_POST'=>'',
			'FLUIG_CONSUMER_SECRET_POST'=>'',
			'FLUIG_ACCESS_TOKEN_POST'=>'',
			'FLUIG_TOKEN_SECRET_POST'=>'',
			'FLUIG_URL'=>''
		)
	```
	
	*TODO*
	
	- Make Tests
	- Make an new api to get and send attachments
	- improve docs

