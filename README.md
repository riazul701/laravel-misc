# Database - Migrations

[How to Create Table using Migration in Laravel?](https://www.itsolutionstuff.com/post/how-to-create-table-using-migration-in-laravelexample.html)

### Composer and Artisan Commands
```shell script
# Create Migration:
php artisan make:migration create_posts_table
# Run Migration:
php artisan migrate
# Create Migration with Table:
php artisan make:migration alter_posts_table --table=posts
# Run Specific Migration:
php artisan migrate --path=/database/migrations/2020_04_01_064006_create_posts_table.php
# Migration Rollback:
php artisan migrate:rollback
```
