# Livewire CRUD Application

[Laravel Livewire CRUD Application Tutorial](https://www.itsolutionstuff.com/post/laravel-livewire-crud-application-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_posts_table
php artisan migrate
php artisan make:model Post
composer require livewire/livewire
php artisan make:livewire posts
php artisan serve
```

### Run Project
[http://localhost:8000/](http://localhost:8000/)
