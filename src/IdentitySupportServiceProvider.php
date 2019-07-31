<?php

namespace Zillucks\IdentitySupport;
use Illuminate\Support\ServiceProvider;

class IdentitySupportServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
	}

	public function register()
	{
		//
	}
}