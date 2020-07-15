# Security - Authentication

[Laravel 7/6 User Roles and Permissions from Scratch | Laravel 7/6 ACL](https://www.itsolutionstuff.com/post/laravel-6-user-roles-and-permissions-from-scratch-laravel-6-aclexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require spatie/laravel-permission
composer require laravelcollective/html
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate
php artisan make:migration create_products_table
php artisan migrate
composer require laravel/ui
php artisan ui bootstrap --auth
# Install NPM:
npm install
# Run NPM:
npm run dev
php artisan make:seeder PermissionTableSeeder
php artisan db:seed --class=PermissionTableSeeder
php artisan make:seeder CreateAdminUserSeeder
php artisan db:seed --class=CreateAdminUserSeeder
php artisan serve
```

### Run Project
[http://localhost:8000/](http://localhost:8000/)
