# Event

[How to create Event for Mail sending in Laravel 5.2?](https://www.itsolutionstuff.com/post/how-to-create-event-for-mail-sending-in-laravel-52example.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:event SendMail
php artisan make:listener SendMailFired --event="SendMail"
php artisan serve
```
