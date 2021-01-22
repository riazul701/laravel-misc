# Eloquent Many To Many Relationship

[Laravel Many to Many Eloquent Relationship Tutorial](https://www.itsolutionstuff.com/post/laravel-many-to-many-eloquent-relationship-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_roles_table --create="roles"
php artisan make:migration create_role_user_table --create="role_user"
php artisan make:model Role
php artisan make:model UserRole
php artisan serve
```

### Run Project
* [http://localhost:8000/get-role](http://localhost:8000/get-role)
* [http://localhost:8000/get-user](http://localhost:8000/get-user)
* [http://localhost:8000/attach](http://localhost:8000/attach)
* [http://localhost:8000/sync](http://localhost:8000/sync)
* [http://localhost:8000/attach-2](http://localhost:8000/attach-2)
* [http://localhost:8000/sync-2](http://localhost:8000/sync-2)
