<?php 
namespace Jakoy\Template;

use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		$this->loadViewsFrom(__DIR__.'/Resources/View','JakoyTemplate');
		$this->publishes([__DIR__.'/public'=>public_path("jakoy-template")], 'public');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
