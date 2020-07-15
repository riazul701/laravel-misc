# Eloquent ORM - API Resources

[Laravel 7/6 REST API with Passport Tutorial](https://www.itsolutionstuff.com/post/laravel-6-rest-api-with-passport-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require laravel/passport
php artisan migrate
php artisan passport:install
php artisan make:migration create_products_table
php artisan migrate
php artisan make:resource Product
php artisan serve
```

### Run Project
* Register API: Verb:GET, URL:http://localhost:8000/api/register
* Login API: Verb:GET, URL:http://localhost:8000/api/login
* Product List API: Verb:GET, URL:http://localhost:8000/api/products
* Product Create API: Verb:POST, URL:http://localhost:8000/api/products
* Product Show API: Verb:GET, URL:http://localhost:8000/api/products/{id}
* Product Update API: Verb:PUT, URL:http://localhost:8000/api/products/{id}
* Product Delete API: Verb:DELETE, URL:http://localhost:8000/api/products/{id}
