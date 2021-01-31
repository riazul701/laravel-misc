<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Country;
use App\Post;
use App\Customer;
use App\CustomerBalance;

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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Laravel Like Query Example using Eloquent Where Clause
 * https://www.itsolutionstuff.com/post/laravel-5-like-query-example-using-eloquent-where-clauseexample.html
 */
Route::get('where-like', function () {
//    SELECT *
//    FROM `users`
//    WHERE `name` LIKE '%hdtopi%';

    $search = 'hdtopi';
    $user = User::where('name','LIKE',"%{$search}%")
        ->get();
    print_r($user);
});

/**
 * Laravel Query Builder Where Exists Example
 * https://www.itsolutionstuff.com/post/laravel-5-query-builder-where-exists-exampleexample.html
 */
Route::get('where-exists', function () {
//    SELECT *
//    FROM `items`
//    WHERE EXISTS
//    (SELECT `items_city`.`id`
//     FROM `items_city`
//     WHERE items_city.item_id = items.id)

    DB::table('items')
        ->whereExists(function ($query) {
            $query->select("items_city.id")
                ->from('items_city')
                ->whereRaw('items_city.item_id = items.id');
        })
        ->get();
});

/**
 * Laravel orWhere Condition using Eloquent Query
 * https://www.itsolutionstuff.com/post/laravel-orwhere-condition-using-eloquent-queryexample.html
 */
Route::get('or-where', function () {
//    SELECT *
//    FROM users
//    WHERE id = '23' OR email = 'itsolutionstuff@gmail.com'

    $users = \DB::table('users')
        ->where('id', 23)
        ->orWhere('email', 'itsolutionstuff@gmail.com')
        ->get();
    dd($users);

//    $users = User::select("*")
//        ->where('id', 23)
//        ->orWhere('email', 'itsolutionstuff@gmail.com')
//        ->get();
//    dd($users);
});

/**
 * Laravel Multiple Where Condition Example
 * https://www.itsolutionstuff.com/post/laravel-multiple-where-condition-exampleexample.html
 */
Route::get('multiple-where', function () {
//    SELECT * FROM `users`
//    WHERE active = 1 AND is_ban = 0

    $users = User::select('*')
        ->where('active', '=', 1)
        ->where('is_ban', '=', 0)
        ->get();
    dd($users);

//    $users = User::select('*')
//        ->where([
//            ['active', '=', 1],
//            ['is_ban', '=', 0]
//        ])
//        ->get();
//    dd($users);
});

/**
 * Laravel Where Clause with Mysql Function Example
 * https://www.itsolutionstuff.com/post/how-to-use-where-clause-with-mysql-function-in-laravel-5example.html
 */
Route::get('where-sql-function', function () {
//    $data = DB::table("items")->select("items.*")
//        ->where(DB::raw("Year(items.created_at)"),'2016')
//        ->orderBy('items.created_at')
//        ->get();
//    dd($data);

    $data = DB::table("items")->select("items.*")
        ->whereRaw(DB::raw("Year(items.created_at) = '2016'"))
        ->orderBy('items.created_at')
        ->get();
    dd($data);
});

/**
 * Laravel where clause with date_format() example
 * https://www.itsolutionstuff.com/post/laravel-where-clause-with-date-format-exampleexample.html
 */
Route::get('where-date-format', function () {
    $data = DB::table("items")
        ->select("id","title","created_at")
        ->where(DB::raw("(DATE_FORMAT(created_at,'%Y-%m'))"),"2016-07")
        ->get();
    print_r($data);
});

/**
 * Laravel - Where Condition with Two Columns Example
 * https://www.itsolutionstuff.com/post/laravel-5-where-condition-with-two-columns-example-codeexample.html
 */
Route::get('where-two-column', function () {
//    $data = DB::table("items")
//        ->whereColumn('created_at','updated_at')
//        ->get();
//    print_r($data);

    $data = DB::table("items")
        ->whereColumn('created_at','>','updated_at')
        ->get();
    print_r($data);
});

/**
 * Laravel - whereDate(), whereMonth(), whereDay() and whereYear() examples.
 * https://www.itsolutionstuff.com/post/laravel-53-wheredate-wheremonth-whereday-and-whereyear-examplesexample.html
 */
Route::get('where-date', function () {
//    $products = DB::table('products')
//        ->whereDate('created_at', '2016-09-03')
//        ->get();
//    dd($products);

//    $products = DB::table('products')
//        ->whereMonth('created_at', '09')
//        ->get();
//    dd($products);

//    $products = DB::table('products')
//        ->whereDay('created_at', '03')
//        ->get();
//    dd($products);

    $products = DB::table('products')
        ->whereYear('created_at', '2016')
        ->get();
    dd($products);
});

/**
 * Laravel Collection first() and firstWhere() Methods Example
 * https://www.itsolutionstuff.com/post/laravel-collection-first-and-firstwhere-methods-exampleexample.html
 */
Route::get('first-where', function () {
//    $collection = collect([
//        ['id'=>1, 'name'=>'Hardik'],
//        ['id'=>2, 'name'=>'Vimal'],
//        ['id'=>3, 'name'=>'Harshad'],
//        ['id'=>4, 'name'=>'Harsukh'],
//    ]);
//    $first = $collection->first();
//    dd($first);

//    $collection = collect([
//        ['id'=>1, 'name'=>'Hardik', 'salery' => '15000'],
//        ['id'=>2, 'name'=>'Vimal', 'salery' => '10000'],
//        ['id'=>3, 'name'=>'Harshad', 'salery' => '17000'],
//        ['id'=>4, 'name'=>'Harsukh', 'salery' => '18000'],
//    ]);
//    $first = $collection->firstWhere('name', 'Hardik');
//    dd($first);

    $collection = collect([
        ['id'=>1, 'name'=>'Hardik', 'salery' => 15000],
        ['id'=>2, 'name'=>'Vimal', 'salery' => 10000],
        ['id'=>3, 'name'=>'Harshad', 'salery' => 17000],
        ['id'=>4, 'name'=>'Harsukh', 'salery' => 18000],
    ]);
    $first = $collection->firstWhere('salery', '>', 16000);
    dd($first);
});

/**
 * Laravel Wherein Query Example
 * https://www.itsolutionstuff.com/post/laravel-wherein-query-exampleexample.html
 */
Route::get('where-in', function () {
//    SELECT *
//    FROM users
//    WHERE id IN (4, 5, 6)

//    $users = User::select("*")
//        ->whereIn('id', [4, 5, 6])
//        ->get();
//    dd($users);

//    $myString = '1,2,3';
//    $myArray = explode(',', $myString);
//    $users = User::select("*")
//        ->whereIn('id', $myArray)
//        ->get();
//    dd($users);

    $users = DB::table('users')
        ->whereIn('name', ['Hardik', 'Vimal', 'Harshad'])
        ->get();
    dd($users);
});

/**
 * Laravel WhereNotIn Query Example
 * https://www.itsolutionstuff.com/post/laravel-wherenotin-query-exampleexample.html
 */
Route::get('where-not-in', function () {
//    SELECT *
//    FROM users
//    WHERE id NOT IN (4, 5, 6)

//    $users = User::select("*")
//        ->whereNotIn('id', [4, 5, 6])
//        ->get();
//    dd($users);

//    $myString = '1,2,3';
//    $myArray = explode(',', $myString);
//    $users = User::select("*")
//        ->whereNotIn('id', $myArray)
//        ->get();
//    dd($users);

    $users = DB::table('users')
        ->whereNotIn('name', ['Hardik', 'Vimal', 'Harshad'])
        ->get();
    dd($users);
});

/**
 * How to use whereHas with orWhereHas in Laravel?
 * https://www.itsolutionstuff.com/post/how-to-use-wherehas-with-orwherehas-in-laravelexample.html
 */
Route::get('where-has/{name}', function (Request $request) {
    $users = User::with(['city', 'state']);

    if ($request->has('name')) {
        $users = $users->whereHas('city', function( $query ) use ( $request ){
            $query->where('name', $request->name);
        })->orWhereHas('state', function( $query ) use ( $request ){
            $query->where('name', $request->name);
        });
    }

    $users = $users->get();

    dd($users);
});

/**
 * laravel 5.4 New Feature - Add eloquent whereKey method
 * https://www.itsolutionstuff.com/post/laravel-54-new-feature-add-eloquent-wherekey-methodexample.html
 */
Route::get('where-key', function () {
    $posts = DB::table('posts')
        ->select(["id","title","status"])
        ->whereStatus("PUBLISHED")
        ->get();
    dd($posts);
});

/**
 * Laravel - whereIn and whereNotIn with subquery example using query builder
 * https://www.itsolutionstuff.com/post/laravel-5-wherein-and-wherenotin-with-subquery-example-using-query-builderexample.html
 */
Route::get('where-in-subquery', function () {
//    SELECT * FROM `users`
//	  WHERE `id` IN (
//    SELECT `user_id` FROM `invite_users`
//    )

//    $users = DB::table("users")->select('*')
//        ->whereIn('id',function($query){
//            $query->select('user_id')->from('invite_users');
//        })
//        ->get();
//    dd($users);

//    SELECT * FROM `users`
//	WHERE `id` NOT IN (
//    SELECT `user_id` FROM `invite_users`
//    )

    $users = DB::table("users")->select('*')
        ->whereNOTIn('id',function($query){
            $query->select('user_id')->from('invite_users');
        })
        ->get();
    dd($users);
});

/**
 * How to Group By with Order By Desc in Laravel?
 * https://www.itsolutionstuff.com/post/how-to-group-by-with-order-by-desc-in-laravelexample.html
 */

Route::get('group-by-with-order-by', function () {
//    $id = 1;
//    $messages = Message::select("*")
//        ->where('receiver_id',$id)
//        ->orderBy('created_at', 'desc')
//        ->get()
//        ->unique('sender_id');
//    dd($messages);

//    $message = Message::orderBy('created_at','DESC');
//    $id = 1;
//    $messages = DB::table(DB::raw("({$message->toSql()}) as sub"))
//        ->where('receiver_id',$id)
//        ->groupBy('sender_id')
//        ->get();
//    dd($messages);

//    $id = 1;
//    $messages = Message::select(DB::raw('*, max(created_at) as created_at'))
//        ->where('receiver_id',$id)
//        ->orderBy('created_at', 'desc')
//        ->groupBy('sender_id')
//        ->get();
//    dd($messages);

    $id = 1;
    $messages = Message::select("*")
        ->where('receiver_id',$id)
        ->orderBy('created_at', 'desc')
        ->groupBy('sender_id')
        ->get();
    dd($messages);
});

/**
 * Order by using multiple columns and manually array field in Laravel?
 * https://www.itsolutionstuff.com/post/order-by-using-multiple-columns-and-manually-array-field-in-laravelexample.html
 */

Route::get('order-by-multiple-column', function () {
//    $data = DB::table('users')
//        ->select('users.*')
//        ->orderBy('site_id', 'asc')
//        ->orderBy('sub_site_id', 'asc')
//        ->get();
//    dd($data);

//    $data = DB::table('users')
//        ->select('users.*')
//        ->orderByRaw(DB::raw("FIELD(status, 'Pending', 'Approved', 'Rejected')"))
//        ->get();
//    dd($data);

    $data = DB::table('users')
        ->select('users.*')
        ->orderByRaw(DB::raw("FIELD(sub_site_id, 2, 7, 1, 4) DESC"))
        ->get();
    dd($data);
});

/**
 * Laravel - Orderby Random using rand() and DB::raw() example
 * https://www.itsolutionstuff.com/post/laravel-5-orderby-random-using-rand-and-dbraw-exampleexample.html
 */

Route::get('order-by-random', function () {
    return DB::table("posts")
        ->select("posts.*")
        ->orderBy(DB::raw('RAND()'))
        ->take(8)
        ->get();
});

/**
 * How to use groupby having with DB::raw in Laravel Query Builder?
 * https://www.itsolutionstuff.com/post/how-to-use-groupby-having-with-dbraw-in-laravel-query-builderexample.html
 */

Route::get('group-by-with-db-raw', function () {
    $items = DB::table("items")
        ->select("items.id","items.title"
            ,"items.min_quantity"
            ,DB::raw('SUM(items_count.quantity) as total_quantity'))
        ->join("items_count","items_count.id_item","=","items.id")
        ->groupBy("items.id")
        ->having("total_quantity","<",DB::raw("items.min_quantity"))
        ->get();
    print_r($items);
});

/**
 * How to group by multiple columns in Laravel Query Builder?
 * https://www.itsolutionstuff.com/post/how-to-group-by-multiple-columns-in-laravel-query-builderexample.html
 */

Route::get('group-by-multiple-column', function () {
    $data = DB::table("items_count")
        ->select(
            'items_count.*'
            ,DB::raw("SUM(items_count.quantity) as total_quantity"))
        ->groupBy('items_count.id_item','items_count.id_cat')
        ->get();
    print_r($data);
});

/**
 * Where condition in Laravel Relationship Example
 * https://www.itsolutionstuff.com/post/where-condition-in-laravel-relationship-exampleexample.html
 */

Route::get('where-with-relationship', function () {
//    $users = User::whereHas('countries', function($q){
//        $q->where('name', '=', 'Abc');
//    })->get();
//    dd($users);

    $search = 'Abc';
    $users = User::whereHas('countries', function($q) use($search){
        $q->where('name', '=', $search);
    })->get();
    dd($users);
});

/**
 * Laravel Order By Relation Column Example
 * https://www.itsolutionstuff.com/post/laravel-order-by-relation-column-exampleexample.html
 */

Route::get('order-by-with-relationship', function () {
    // Laravel Orderby Belongsto Relationship ASC
//    $posts = Post::with(['author' => function ($q){
//        $q->orderBy('name');
//    }])->get();
//    dd($posts);

    // Laravel Orderby Belongsto Relationship DESC
//    $posts = Post::with(['author' => function ($q){
//        $q->orderBy('name', 'DESC');
//    }])->get();
//    dd($posts);

    // Laravel Orderby Relation Column using Collection ASC
//    $posts = Post::get()->sortBy(function($query){
//        return $query->author->name;
//    })->all();
//    dd($posts);

    // Laravel Orderby Relation Column using Collection DESC
//    $posts = Post::get()->sortByDesc(function($query){
//        return $query->author->name;
//    })->all();
//    dd($posts);

    // Laravel Orderby Relation Column using Join ASC
//    $posts = Post::select('*')
//        ->join('authors', 'posts.author_id', '=', 'authors.id')
//        ->orderBy('authors.name', 'ASC')
//        ->paginate(10);
//    dd($posts);

    // Laravel Orderby Relation Column using Join DESC
    $posts = Post::select('*')
        ->join('authors', 'posts.author_id', '=', 'authors.id')
        ->orderBy('authors.name', 'DESC')
        ->paginate(10);
    dd($posts);
});

/**
 * Laravel Order By Relationship Sum Column Example
 * https://www.itsolutionstuff.com/post/laravel-order-by-relationship-sum-column-exampleexample.html
 */

Route::get('order-by-with-relationship-sum', function () {
    $customers = Customer::addSelect(['balance' => CustomerBalance::selectRaw('sum(amount) as total')
        ->whereColumn('customer_id', 'customers.id')
        ->groupBy('customer_id')
    ])
        ->orderBy('balance', 'DESC')
        ->get()
        ->toArray();

    dd($customers);
});
