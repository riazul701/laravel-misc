# Eloquent One To Many Relationship

[Laravel One to Many Eloquent Relationship Tutorial](https://www.itsolutionstuff.com/post/laravel-one-to-many-eloquent-relationship-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_posts_table --create="posts"
php artisan make:migration create_comments_table --create="comments"
php artisan migrate
php artisan make:model Post
php artisan make:model Comment
php artisan serve
```

### Run Project
* [http://localhost:8000/get-comment](http://localhost:8000/get-comment)
* [http://localhost:8000/get-post](http://localhost:8000/get-post)
* [http://localhost:8000/create-comment](http://localhost:8000/create-comment)
* [http://localhost:8000/create-comment-2](http://localhost:8000/create-comment-2)
* [http://localhost:8000/associate](http://localhost:8000/associate)
