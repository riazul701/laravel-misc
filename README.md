# Eloquent One To Many Polymorphic

[Laravel One to Many Polymorphic Relationship Tutorial](https://www.itsolutionstuff.com/post/laravel-one-to-many-polymorphic-relationship-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_posts_table --create="posts"
php artisan make:migration create_videos_table --create="videos"
php artisan make:migration create_comments_table --create="comments"
php artisan migrate
php artisan make:model Post
php artisan make:model Video
php artisan make:model Comment
php artisan serve
```

### Run Project
* [http://localhost:8000/create-post-comment](http://localhost:8000/create-post-comment)
* [http://localhost:8000/create-video-comment](http://localhost:8000/create-video-comment)
* [http://localhost:8000/get-post-comment](http://localhost:8000/get-post-comment)
* [http://localhost:8000/get-video-comment](http://localhost:8000/get-video-comment)
