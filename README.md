# Eloquent Many To Many Polymorphic

[Laravel Many to Many Polymorphic Relationship Tutorial](https://www.itsolutionstuff.com/post/laravel-many-to-many-polymorphic-relationship-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_posts_table --create="posts"
php artisan make:migration create_videos_table --create="videos"
php artisan make:migration create_tags_table --create="tags"
php artisan make:migration create_taggables_table --create="taggables"
php artisan migrate
php artisan make:model Post
php artisan make:model Video
php artisan make:model Tag
php artisan serve
```

### Run Project
* [http://localhost:8000/create-post-tag](http://localhost:8000/create-post-tag)
* [http://localhost:8000/create-video-tag](http://localhost:8000/create-video-tag)
* [http://localhost:8000/create-multi-post-tag](http://localhost:8000/create-multi-post-tag)
* [http://localhost:8000/create-multi-video-tag](http://localhost:8000/create-multi-video-tag)
* [http://localhost:8000/post-tag-attach](http://localhost:8000/post-tag-attach)
* [http://localhost:8000/video-tag-attach](http://localhost:8000/video-tag-attach)
* [http://localhost:8000/post-tag-sync](http://localhost:8000/post-tag-sync)
* [http://localhost:8000/video-tag-sync](http://localhost:8000/video-tag-sync)
* [http://localhost:8000/post-to-tag](http://localhost:8000/post-to-tag)
* [http://localhost:8000/video-to-tag](http://localhost:8000/video-to-tag)
* [http://localhost:8000/tag-to-post](http://localhost:8000/tag-to-post)
* [http://localhost:8000/tag-to-video](http://localhost:8000/tag-to-video)

