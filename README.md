# Eloquent ORM - Relationships

[Laravel One To Many Relationship Tutorial](https://appdividend.com/2018/01/04/laravel-one-to-many-relationship-tutorial/)

### Laravel Artisan/Tinker Commands
```php
php artisan tinker
Employee::find(1)->transactions;
Transaction::find(2)->employee->amount;
```
