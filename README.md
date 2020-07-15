# Laravel 7 CRUD

[Laravel 7 CRUD Example | Laravel 7 Tutorial For Beginners](https://www.itsolutionstuff.com/post/laravel-7-crud-example-laravel-7-tutorial-for-beginnersexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_products_table --create=products
php artisan migrate
php artisan make:controller ProductController --resource --model=Product
php artisan serve
```

### Run Project
[http://localhost:8000/products](http://localhost:8000/products)
