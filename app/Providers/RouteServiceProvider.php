<?php namespace Providers;

use Illuminate\Support\ServiceProvider;
use Sentry, Redirect, Session, Input;

class RouteServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRoutes();
    }

    /**
     * Register the dashboard routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        /** @var \Illuminate\Routing\Router $router */
        $router = $this->app['router'];

        $router->get('account/register', ['as' => 'account.register', 'uses' => 'AccountController@register']);
        $router->post('account/register', ['as' => 'account.create', 'uses' => 'AccountController@create']);

    }
}