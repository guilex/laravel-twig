laravel-twig
============

Twig Service Provider For Laravel 4.x

installation
------------

- add service provider to app/conf/app.php `'Guilex\LaravelTwig\LaravelTwigServiceProvider'`
- add facade `'TwigView' => Guilex\LaravelTwig\Facades\LaravelTwig'`
- publish configuration `php artisan config:publish guilex/laravel-twig` and adjust paths to template and cache dirs

usage
-----

```php
Route::get('/', function(){
    return TwigView::render('/index.html', array('name' => 'guile'));
});
```
