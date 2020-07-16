# Laravel Tinker

[Laravel - Create Dummy Data using tinker factory](https://www.itsolutionstuff.com/post/laravel-5-create-dummy-data-using-tinker-factoryexample.html)

### Composer and Artisan Commands
```shell script
php artisan tinker
factory(App\User::class, 500)->create();
php artisan tinker
factory(App\Post::class, 500)->create();
```
