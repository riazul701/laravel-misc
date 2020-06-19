<?php

use Illuminate\Support\Facades\Route;
use App\Painter;
use App\Painting;

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

//Route::get('/', function () {
//    $reflection = new ReflectionClass('App\Painter'); // inspect the methods and constants of any class
//    print_r($reflection->getMethods());
//});

//Route::get('/', function () {
//    $painter = new Painter;
//    $painter->username = 'Leonardo Da Vinci';
//    $painter->bio = 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters for his iconic Mona Lisa and Last Supper.';
//    $painter->save();
//});

//Route::get('/', function () {
//    $painters = Painter::all()->first();
//    echo $painters->username.'<br>';
//    echo $painters->bio;
//});

//Route::get('/', function () {
//    $painters = Painter::all()->first();
//    $painters->username = 'Leonardo Da-Vinci';
//    $painters->save();
//});

//Route::get('/', function () {
//    $painters = Painter::all()->first();
//    $painters->delete();
//});

//Route::get('/', function () {
//    $painter = new Painter;
//    $painter->username = 'Leonardo Da Vinci';
//    $painter->bio = 'Renaissance painter, scientist, inventor, and more. Da Vinci is one of most famous painters for his iconic Mona Lisa and Last Supper.';
//    $painter->save();
//
//    $painter = new Painter;
//    $painter->username = 'Vincent Van Gogh';
//    $painter->bio = 'Dutch post-impressionist painter. Famous paintings include: Sunflowers, The Starry night, Cafe Terrace at Night.';
//    $painter->save();
//
//    $painter = new Painter;
//    $painter->username = 'Rembrandt';
//    $painter->bio = 'One of greatest painters, admired for his vivid realism. Famous paintings include The Jewish Bride, The Storm of the sea of Galilee';
//    $painter->save();
//});

//Route::get('/', function () {
//    $painter = Painter::find(4);
//    $painting = new Painting;
//    $painting->title = 'The Storm on the Sea of Galilee';
//    $painting->body = 'The Storm on the Sea of Galilee is a painting from 1633 by the Dutch Golden Age painter Rembrandt van Rijn that was in the Isabella Stewart Gardner Museum of Boston, Massachusetts, United States, prior to being stolen on March 18, 1990.';
//    $painting->painter_id = $painter->id;
//    $painting->save();
//});

//Route::get('/', function () {
//    $painter = Painter::whereUsername('Leonardo Da Vinci')->first();
//    foreach ($painter->paintings as $painting) {
//        echo $painting->title.'<br>';
//        echo $painting->body.'<br><br>';
//    }
//});

//Route::get('/', function () {
//    $painting = Painting::whereTitle('The Potato Eaters')->first();
//    echo Painter::find($painting->painter_id)->username;
//});

//Route::get('/', function () {
//    $painting = Painting::whereTitle('The Potato Eaters')->first();
//    echo $painting->painter->username.'<br>';
//    echo $painting->painter->bio;
//});

//Route::get('/', function () {
//    $paintings = Painting::all();
//    foreach ($paintings as $painting) {
//        echo $painting->painter->username;
//        echo ' painted the ';
//        echo $painting->title;
//        echo '<br>';
//    }
//});

Route::get('/', function () {
    $paintings = Painting::with('painter')->get();
    foreach ($paintings as $painting) {
        echo $painting->painter->username;
        echo ' painted the ';
        echo $painting->title;
        echo '<br>';
    }
});
