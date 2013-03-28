<?php namespace Guilex\LaravelTwig\Facades;
use Illuminate\Support\Facades\Facade;

class LaravelTwig extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'twig';
    }

}