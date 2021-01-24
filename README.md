# Eloquent Has Many Through

[Laravel Has Many Through Eloquent Relationship Tutorial](https://www.itsolutionstuff.com/post/laravel-has-many-through-eloquent-relationship-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_posts_table --create="posts"
php artisan make:migration create_countries_table --create="countries"
php artisan migrate
php artisan make:model Country
php artisan make:model Post
php artisan serve
```

### Run Project
[http://localhost:8000/get-posts](http://localhost:8000/get-posts)
