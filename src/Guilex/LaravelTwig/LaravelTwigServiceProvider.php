<?php namespace Guilex\LaravelTwig;

use Illuminate\Support\ServiceProvider;

class LaravelTwigServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('guilex/laravel-twig');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['twig'] = $this->app->share(function($app){
			
			$template_config = $app['config']->get('laravel-twig::config');

			$loader = new \Twig_Loader_Filesystem($template_config['template_dir']);
			$twig = new \Twig_Environment($loader, array(
    			'cache' => $template_config['cache_dir']
)			);

			return $twig;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}