<?php

use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $dummyDetails = User::paginate(25);
    return view('welcome_2')->withUsers($dummyDetails);
});

Route::any('/search', function () {
    $q = Input::get('q');
    if($q != "") {
        $user = User::where('name', 'LIKE', '%' . $q . '%')->orWhere('email', 'LIKE', '%' . $q . '%')->paginate(5)->setPath('');
        $pagination = $user->appends(array(
            'q' => Input::get('q')
        ));
        if(count($user) > 0) {
//            return view('welcome_2')->withDetails($user)->withQuery($q);
            return view('welcome_2')->withUsers($user)->withQuery($q);
        }
    }
    return view('welcome_2')->withMessage('No Details found. Try to search again !');
});
