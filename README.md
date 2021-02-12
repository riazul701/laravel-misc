# User Ban And Revoke

[How to create ban/revoke user functionality in Laravel 5 example ?](https://www.itsolutionstuff.com/post/how-to-create-ban-revoke-user-functionality-in-laravel-5-example-example.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan migrate
composer require laravel/ui:2.x
php artisan ui bootstrap --auth
npm install
npm run dev
composer require cybercog/laravel-ban
php artisan vendor:publish --provider="Cog\Ban\Providers\BanServiceProvider" --tag="migrations"
php artisan migrate
php artisan make:migration add_banned_at_column_to_users_table
php artisan migrate
php artisan make:middleware ForbidBannedUserCustom
php artisan make:controller UserController
php artisan make:seeder UserTableSeeder
php artisan db:seed --class=UserTableSeeder
php artisan serve
```

### Run Project
[http://localhost:8000/](http://localhost:8000/)

### Related Web Address
* [Laravel 7 Auth Example | Laravel 7 Authentication Example](https://www.itsolutionstuff.com/post/laravel-7-auth-example-laravel-7-make-auth-commandexample.html)
* [https://github.com/cybercog/laravel-ban](https://github.com/cybercog/laravel-ban)
