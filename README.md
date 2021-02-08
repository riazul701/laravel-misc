# Model Caching

[Laravel Model Caching - Performance Boost Tutorial](https://www.itsolutionstuff.com/post/laravel-model-caching-performance-boost-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
composer require genealabs/laravel-model-caching:0.10.2
php artisan tinker
factory(App\User::class, 100)->create();
php artisan make:controller UserController
php artisan serve
```

### Run Project
[http://localhost:8000/users](http://localhost:8000/users)

### Related Web Address
* [https://github.com/barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
* [https://github.com/GeneaLabs/laravel-model-caching](https://github.com/GeneaLabs/laravel-model-caching)
