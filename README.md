# Debug - Laravel Debugbar

[Github: barryvdh / laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)

[Tutorial: Debugging using Laravel Debugbar](https://www.youtube.com/watch?v=nV6qaLXH9vU)

### Composer and Artisan Commands
```shell script
composer require barryvdh/laravel-debugbar --dev
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
composer dump-autoload
php artisan cache:clear
php artisan config:cache
```

### Configuration
* If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php
```php
Barryvdh\Debugbar\ServiceProvider::class,
```
* If you want to use the facade to log messages, add this to your facades in app.php:
```php
'Debugbar' => Barryvdh\Debugbar\Facade::class,
```
* The Debugbar will be enabled when `APP_DEBUG` is `true`. (Then after you need to add a line to `.env` file)
```php
APP_DEBUG=true
```

### Laravel Tinker Commands
```php
php artisan tinker
factory(App\User::class,10)->create();
factory(App\User::class,1000)->create();
```

### Related Web Address
* [How can I install debugbar in Laravel?](https://stackoverflow.com/questions/49834437/how-can-i-install-debugbar-in-laravel)
* [Debug Your App with the Laravel Debugbar](https://laravel-news.com/laravel-debugbar)
