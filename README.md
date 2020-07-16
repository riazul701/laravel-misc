# Upload - Image Using Ajax

[Laravel 6 Ajax Image Upload Example](https://www.itsolutionstuff.com/post/laravel-6-ajax-image-upload-exampleexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_ajax_image_tabel
php artisan migrate
php artisan make:model AjaxImage
php artisan make:controller AjaxImageUploadController
php artisan serve
```

### Run Project
[http://localhost:8000/ajaxImageUpload](http://localhost:8000/ajaxImageUpload)
