# Follow UnFollow System

[Laravel - Follow Unfollow System Example](https://www.itsolutionstuff.com/post/laravel-5-follow-unfollow-system-exampleexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require overtrue/laravel-follow
php artisan vendor:publish --provider='Overtrue\LaravelFollow\FollowServiceProvider' --tag="migrations"
php artisan migrate
composer require laravel/ui:2.x
php artisan ui bootstrap --auth
npm install
npm run dev
php artisan tinker
factory(App\User::class, 100)->create();
```
