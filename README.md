# Like DisLike System

[PHP Laravel - Like Dislike System Tutorial](https://www.itsolutionstuff.com/post/php-laravel-5-like-dislike-system-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require overtrue/laravel-follow
php artisan vendor:publish --provider='Overtrue\LaravelFollow\FollowServiceProvider' --tag="migrations"
php artisan migrate
composer require laravel/ui:2.x
php artisan ui bootstrap --auth
npm install && npm run dev
php artisan make:migration create_posts_table
php artisan migrate
php artisan make:model Post
php artisan make:seeder CreateDummyPost
php artisan db:seed --class=CreateDummyPost
php artisan serve
```
