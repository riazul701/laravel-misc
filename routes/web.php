<?php

use Illuminate\Support\Facades\Route;

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
////    return view('welcome');

//    $sites = collect([
//        'http://google.com',
//        'http://plus.google.com',
//        'http://facebook.com',
//        'http://twitter.com',
//        'http://search.twitter.com',
//        'http://apple.com'
//    ]);
//
//    dd($sites);
//});

//Route::get('/', function () {
//    $sites = collect([
//        'http://google.com',
//        'http://plus.google.com',
//        'http://facebook.com',
//        'http://twitter.com',
//        'http://search.twitter.com',
//        'http://apple.com'
//    ])->map(function ($site) {
//        return str_replace('http://', 'http://www.', $site);
//    })->reject(function ($site) {
//        return str_contains($site, 'facebook') == true;
//    });
//
//    dd($sites);
//});

/* 1. all() */
//Route::get('/', function () {
//    $sites = collect([
//        'http://google.com',
//        'http://plus.google.com',
//        'http://facebook.com',
//        'http://twitter.com',
//        'http://search.twitter.com',
//        'http://apple.com'
//    ]);
//
//    $all = $sites->all();
//
//    dd($all);
//});

/* 2. avg() */
//Route::get('/', function () {
////    $avg = collect(['1234', '546', '777'])->avg();
////    echo $avg;
//
//    $avg = collect([
//        ['size' => 'tall', 'price' => 2.50],
//        ['size' => 'grande', 'price' => 3.45],
//        ['size' => 'venti', 'price' => 4.75]
//    ])->avg('price');
//
//    dd($avg);
//});

/* 3. chunk() */
//Route::get('/', function () {
//    $chunk = collect([
//        (object)['site' => 'google.com'],
//        (object)['site' => 'facebook.com'],
//        (object)['site' => 'yahoo.com'],
//        (object)['site' => 'digg.com'],
//        (object)['site' => 'twitter.com'],
//        (object)['site' => 'moz.com']
//
//    ])->chunk(2);
//
//    dd($chunk);
//});

/* 4. collapse() */
//Route::get('/', function () {
//    $collection = collect([
//        ['color' => 'blue', 4, 2],
//        ['x', 'y', 'color' => 'red', 'shape' => 'circle', 300],
//        ['make' => 'Acura', 'type' => 'NSX']
//    ]);
//    dd($collection);
//
//    dd($collection->collapse());
//});

/* 5. contains() */
//Route::get('/', function () {
//    $collection = collect([
//        'color' => 'blue',
//        4,
//        2,
//        'x',
//        'y',
//        'shape' => 'circle',
//        300,
//        'make' => 'Acura',
//        'type' => 'NSX'
//    ]);
//    dd($collection->contains('color'));
//    dd($collection->contains('color', ''));

//    $collection = collect([
//        [
//            'color' => 'blue',
//            4,
//            2,
//            'xray',
//            'y',
//            'shape' => 'circle',
//            300,
//            'make' => 'Acura',
//            'type' => 'NSX'
//        ]
//    ]);
//
//    dd($collection->contains('make', 'Acura'));

//    $collection = collect([
//        'color' => 'blue',
//        4,
//        2,
//        'xray',
//        'y',
//        'shape' => 'circle',
//        300,
//        'make' => 'Acura',
//        'type' => 'NSX'
//    ]);
//
//    dd($collection->contains('make', 'Acura'));

//    $collection = collect([
//        'color' => 'blue',
//        4,
//        2,
//        'xray',
//        'y',
//        'shape' => 'circle',
//        300,
//        'make' => 'Acura',
//        'type' => 'NSX'
//    ]);
//
//    $result = $collection->contains(function ($key, $value){
//        return ($key == 'hiphop' or $value == 'NSX');
//    });
//
//    dd($result);

//    $collection = collect([
//        'color' => 'blue',
//        4,
//        2,
//        'xray',
//        'y',
//        'shape' => 'circle',
//        300,
//        'make' => 'Acura',
//        'type' => 'NSX'
//    ]);
//
//    $result = $collection->contains(function ($key, $value){
//        return ($key == 'color' and $value == 'blue');
//    });
//
//    dd($result);
//});

/* 6. count() */
//Route::get('/', function () {
//    $collection = collect([
//        'color' => 'blue',
//        'size' => 'extra large',
//        'comedian' => 'Seinfeld',
//        'search engine' => 'google'
//    ]);
//
//
//    dd($collection->count());
//});

/* 7. diff() */
//Route::get('/', function () {
//    $want = collect(['Apple', 'Google', 'Twitter', 'Cisco', 'Dell', 'HP']);
//    $nothiring = collect(['Apple', 'Google']);
//
//    $interview = $want->diff($nothiring);
//
//    dd($interview);
//});

/* 8. each() */
//Route::get('/', function () {
//    $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
//
//    $collection->each(function ($value) {
//        if ($value > 5) {
//            return false;
//        }
//        echo $value * $value . '<br>';
//    });

//    $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
//
//    foreach ($collection as $collection) {
//        if ($collection < 6) {
//            echo $collection * $collection . '<br>';
//        }
//    }
//});

/* 9. every() */
//Route::get('/', function () {
//    $collection = collect([
//        ['red', 'green', 'blue'],
//        ['apple', 'orage', 'lemon'],
//        ['yaba', 'daba', 'doo'],
//        ['hip', 'hop', 'hooray'],
//        ['meat', 'potatoes', 'gravy'],
//        ['apple pie', 'pumpkin latte', 'apple cider'],
//    ]);

//    dd($collection->every(2));
//    dd($collection->every(2, 1));
//});

/* 10. filter() */
//Route::get('/', function () {
//    $collection = collect([
//        ['red', 'green', 'blue'],
//        ['apple', 'orange', 'lemon'],
//        ['yaba', 'daba', 'doo'],
//        ['hip', 'hop', 'hooray'],
//        ['meat', 'potatoes', 'gravy'],
//        ['apple pie', 'pumpkin latte', 'apple cider'],
//    ]);
//
//    $filterized = $collection->filter(function ($item) {
//        return str_contains('lemon', $item);
//    });
//
//    dd($filterized);
//});

/* 11. first() */
//Route::get('/', function () {
//    $collection = collect([
//        ['sunshine', 'blue sky', 'blue water'],
//        ['apple pie', 'yellow', 'black roof'],
//        [1,2,3],
//        'random stuff',
//        'not a number',
//        ['apple crisp', 'jackolantern'],
//    ]);
//
//    $first = $collection->first();
//
//    dd($first);

//    $collection = collect([
//        ['sunshine', 'blue sky', 'blue water'],
//        ['apple pie', 'yellow', 'black roof'],
//        [1, 2, 3],
//        'random stuff',
//        'not a number',
//        ['apple crisp', 'jackolantern'],
//    ]);
//
//    $first = $collection->first(function ($key, $value) {
//        return is_string($value);
//    });
//
//    dd($first);
//});

/* 12. flatten() */
//Route::get('/', function () {
//    $collection = collect([
//        'mobile' => 'iPhone',
//        'grub' => ['restaurant' => 'Chipoltle', 'meal' => 'burrito'],
//        ['editor' => ['vendor' => 'jetbrains', 'ide' => 'phpstorm']]
//    ]);

//    dd($collection);
//    dd($collection->flatten());
//});

/* 13. flip() */
//Route::get('/', function () {
//    $collection = collect([
//        'mobile' => 'iPhone',
//        'grub' => ['restaurant' => 'Chipoltle', 'meal' => 'burrito'],
//        ['editor' => ['vendor' => 'jetbrains', 'ide' => 'phpstorm']]
//    ]);
//
//    dd($collection->flip());

//    $collection = collect([
//        'mobile' => 'iPhone',
//        'integer' => 10,
//        'string' => 'all day',
//        'another integer' => 20
//    ]);
//
//    dd($collection->flip());
//});

/* 14. forget() */
//Route::get('/', function () {
//    $collection = collect([
//        'mobile' => 'iPhone',
//        'integer' => 10,
//        'string' => 'all day',
//        'another integer' => 20
//    ]);
//
//    dd($collection->forget('string'));
//});

/* 15. forPage() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'google.com'],
//        ['url' => 'facebook.com'],
//        ['url' => 'amazon.com'],
//        ['url' => 'youtube.com'],
//        ['url' => 'yahoo.com'],
//        ['url' => 'wikipedia.org'],
//        ['url' => 'ebay.com'],
//        ['url' => 'twitter.com'],
//        ['url' => 'craigslist.com'],
//        ['url' => 'reddit.com'],
//        ['url' => 'netflix.com'],
//        ['url' => 'linkedin.com'],
//        ['url' => 'bing.com'],
//        ['url' => 'pinterest.com'],
//        ['url' => 'apple.com'],
//        ['url' => 'instagram.com'],
//        ['url' => 'msn.com'],
//        ['url' => 'walmart.com'],
//        ['url' => 'yelp.com'],
//        ['url' => 'weather.com'],
//        ['url' => 'zillow.com'],
//        ['url' => 'wordpress.com'],
//        ['url' => 'target.com'],
//        ['url' => 'buzzfeed.com'],
//        ['url' => 'microsoft.com'],
//    ]);
//
//    dd($collection->forPage(3, 5));
//});

/* 16. get() */
//Route::get('/', function () {
//    $collection = collect([
//        'mobile' => 'iPhone',
//        'integer' => 10,
//        'string' => 'all day',
//        'another integer' => 20
//    ]);
//
//    dd($collection->get('mobile'));
//});

/* 17. groupBy() */
//Route::get('/', function () {
//    $collection = collect([
//        ['search' => 'google.com'],
//        ['social' => 'facebook.com'],
//        ['shopping' => 'amazon.com'],
//        ['entertainment' => 'youtube.com'],
//        ['entertainment' => 'yahoo.com'],
//        ['info' => 'wikipedia.org'],
//        ['shopping' => 'ebay.com'],
//        ['social' => 'twitter.com'],
//        ['info' => 'craigslist.com'],
//        ['entertainment' => 'reddit.com'],
//        ['entertainment' => 'netflix.com'],
//        ['career' => 'linkedin.com'],
//        ['search' => 'bing.com'],
//        ['entertainment' => 'pinterest.com'],
//        ['shopping' => 'apple.com'],
//        ['social' => 'instagram.com'],
//        ['info' => 'msn.com'],
//        ['shopping' => 'walmart.com'],
//        ['info' => 'yelp.com'],
//        ['info' => 'weather.com'],
//        ['shopping' => 'zillow.com'],
//        ['blogging' => 'wordpress.com'],
//        ['shopping' => 'target.com'],
//        ['entertainment' => 'buzzfeed.com'],
//        ['software' => 'microsoft.com'],
//    ]);

//    dd($collection->groupBy('entertainment'));
//    dd($collection->groupBy('shopping'));
//});

/* 18. has() */
//Route::get('/', function () {
//    $collection = collect([
//        'search' => 'google.com',
//        'social' => 'facebook.com',
//        'shopping' => 'amazon.com',
//        'entertainment' => 'youtube.com',
//        'info' => 'wikipedia.org',
//        'career' => 'linkedin.com',
//        'blogging' => 'wordpress.com',
//        'software' => 'microsoft.com'
//    ]);
//
//    dd($collection->has('software'));
//});

/* 19. implode() */
//Route::get('/', function () {
//    $collection = collect([
//        ['weather' => 'sunshine', 'activity' => 'swimming'],
//        ['weather' => 'cloudy', 'activity' => 'working'],
//        ['weather' => 'snow', 'activity' => 'skiing'],
//        ['weather' => 'rain', 'activity' => 'coding'],
//    ]);
//
//    dd($collection->implode('activity', ' **** '));
//});

/* 20. intersect() */
//Route::get('/', function () {
//    $collection1 = collect([1, 2, 3, 4, 5, 6]);
//
//    $collection2 = collect([5, 6, 7, 8, 9, 10]);
//
//    dd($collection1->intersect($collection2));
//});

/* 21. isEmpty() */
//Route::get('/', function () {
//    $collection1 = collect([1, 2, 3, 4, 5, 6]);
//
//    $collection2 = collect([]);
//
////    dd($collection1->isEmpty());
//    // false
//
////    dd($collection2->isEmpty());
//    // true
//});

/* 22. keyBy() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'google.com'],
//        ['url' => 'facebook.com'],
//        ['url' => 'amazon.com'],
//        ['url' => 'youtube.com'],
//        ['url' => 'yahoo.com'],
//        ['url' => 'wikipedia.org'],
//        ['url' => 'ebay.com'],
//        ['url' => 'twitter.com'],
//        ['url' => 'craigslist.com'],
//        ['url' => 'reddit.com'],
//        ['url' => 'netflix.com'],
//        ['url' => 'linkedin.com'],
//        ['url' => 'bing.com'],
//        ['url' => 'pinterest.com'],
//        ['url' => 'apple.com'],
//        ['url' => 'instagram.com'],
//        ['url' => 'msn.com'],
//        ['url' => 'walmart.com'],
//        ['url' => 'yelp.com'],
//        ['url' => 'weather.com'],
//        ['url' => 'zillow.com'],
//        ['url' => 'wordpress.com'],
//        ['url' => 'target.com'],
//        ['url' => 'buzzfeed.com'],
//        ['url' => 'microsoft.com'],
//    ]);
//
//    dd($collection->keyBy('url'));
//});

/* 23. keys() */
//Route::get('/', function () {
//    $collection = collect([
//        ['google' => 'alphabet', 4, 2],
//        'four' => 4,
//        1234,
//        'name' => 'Jim',
//        ['xray', 'redsox', 'color' => 'green', 'shape' => 'perfect circle', 500],
//        ['make' => 'Acura', 'type' => 'NSX'],
//        'weather' => 'sunny',
//        'play' => 'videogames',
//        'object' => (object)['soup' => 'french onion']
//    ]);
//
//    dd($collection->keys());
//});

/* 24. last() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'google.com'],
//        ['url' => 'facebook.com'],
//        ['url' => 'amazon.com'],
//        ['url' => 'youtube.com'],
//        ['url' => 'yahoo.com'],
//        ['url' => 'wikipedia.org'],
//        ['url' => 'ebay.com'],
//        ['url' => 'twitter.com'],
//        ['url' => 'craigslist.com'],
//        ['url' => 'reddit.com'],
//        ['url' => 'netflix.com'],
//        ['url' => 'linkedin.com'],
//        ['url' => 'bing.com'],
//        ['url' => 'pinterest.com'],
//        ['url' => 'apple.com'],
//        ['url' => 'instagram.com'],
//        ['url' => 'msn.com'],
//        ['url' => 'walmart.com'],
//        ['url' => 'yelp.com'],
//        ['url' => 'weather.com'],
//        ['url' => 'zillow.com'],
//        ['url' => 'wordpress.com'],
//        ['url' => 'target.com'],
//        ['url' => 'buzzfeed.com'],
//        ['url' => 'microsoft.com'],
//    ]);

//    dd($collection->last());

//    dd($collection->last(function ($key, $value){
//        return str_contains($value['url'], '.org');
//    }));
//});

/* 25. map() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'etsy.com'],
//        ['url' => 'aol.com'],
//        ['url' => 'diply.com'],
//        ['url' => 'foxnews.com'],
//        ['url' => 'bestbuy.com'],
//    ]);
//
//    dd($collection->map(function ($item){
//        return strrev($item['url']);
//    }));
//});

/* 26. merge() */
//Route::get('/', function () {
//    $collection1 = collect([
//        ['url' => 'comcast.net'],
//        ['url' => 'nfl.com'],
//        ['url' => 'washingtonpost.com'],
//        ['url' => 'homedepot.com'],
//        ['url' => 'microsoftonline.com'],
//    ]);
//
//    $collection2 = collect([
//        ['url' => 'wikia.com'],
//        ['url' => 'indeed.com'],
//        ['url' => 'usps.com'],
//        ['url' => 'capitalone.com'],
//        ['url' => 'att.com'],
//    ]);
//
//    dd($collection1->merge($collection2));
//});

/* 27. pluck() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'comcast.net', 'industry' => 'telecom'],
//        ['url' => 'nfl.com', 'industry' => 'entertainment'],
//        ['url' => 'washingtonpost.com', 'industry' => 'news'],
//        ['url' => 'homedepot.com', 'industry' => 'homebuilders'],
//        ['url' => 'microsoftonline.com', 'industry' => 'software'],
//    ]);
//
//    dd($collection->pluck('industry'));
//});

/* 28. pop() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'americanexpress.com'],
//        ['url' => 'pandora.com'],
//        ['url' => 'ask.com'],
//        ['url' => 'groupon.com'],
//        ['url' => 'hulu.com'],
//    ]);
//
//    dd($collection->pop());
//});

/* 29. prepend() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'ups.com'],
//        ['url' => 'dropbox.com'],
//        ['url' => 'verizonwireless.com'],
//        ['url' => 'usatoday.com'],
//        ['url' => 'answers.com'],
//    ]);
//
//    dd($collection->prepend(['url' => 'vegibit.com']));
//});

/* 30. pull() */
//Route::get('/', function () {
//    $collection = collect([
//        'url' => 'cnet.com', 'industry' => 'tech news', 'reviews' => true
//    ]);
//
//    dd($collection->pull('industry'));
//    dd($collection);
//});

/* 31. push() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'forbes.com'],
//        ['url' => 'stackoverflow.com'],
//        ['url' => 'office.com'],
//    ]);
//
//    dd($collection->push(['url' => 'adobe.com']));
//});

/* 32. put() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'macys.com'],
//        ['url' => 'cbssports.com'],
//        ['url' => 'fedex.com'],
//    ]);
//
//    dd($collection->put(1, ['was put' => 'clobbered']));
//});

/* 33. random() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'slickdeals.net'],
//        ['url' => 'mlb.com'],
//        ['url' => 'amazonaws.com'],
//        ['url' => 'twitch.tv'],
//        ['url' => 'lowes.com'],
//        ['url' => 'webmd.com'],
//        ['url' => 'businessinsider.com'],
//        ['url' => 'bleacherreport.com'],
//        ['url' => 'salesforce.com'],
//        ['url' => 'bbc.com'],
//        ['url' => 'github.com'],
//        ['url' => 'gap.com'],
//    ]);
//
//    dd($collection->random());
//});

/* 34. reduce() */
//Route::get('/', function () {
//    $collection = collect([
//        1234, 3456, 987, 3456, 92347
//    ]);
//
//    dd($collection->reduce(function ($carry, $item) {
//        return $carry + $item;
//    }));
//});

/* 35. reject() */
//Route::get('/', function () {
//    $collection = collect([
//        'http://wsj.com',
//        'http://discovercard.com',
//        'http://realtor.com',
//        'http://theguardian.com',
//        'http://newegg.com',
//        'http://nbcnews.com'
//    ])->reject(function ($site) {
//        return str_contains($site, 'discover') == true;
//    });
//
//    dd($collection);
//});

/* 36. reverse()  */
//Route::get('/', function () {
//    $collection = collect([
//        'http://wsj.com',
//        'http://discovercard.com',
//        'http://realtor.com',
//        'http://theguardian.com',
//        'http://newegg.com',
//        'http://nbcnews.com'
//    ])->reverse();
//
//    dd($collection);
//});

/* 37. search() */
//Route::get('/', function () {
//    $collection = collect([
//        'flickr.com',
//        'taboola.com',
//        'costco.com',
//        'nordstrom.com',
//        'ancestry.com',
//        'stackexhange.com'
//    ])->search('stackexhange.com');
//
//    dd($collection);
//});

/* 38. shift() */
//Route::get('/', function () {
//    $collection = collect([
//        'Deviantart.com',
//        'Allrecipes.com',
//        'Retailmenot.com',
//        'Thesaurus.com',
//    ])->shift();
//
//    dd($collection);
//});

/* 39. shuffle() */
//Route::get('/', function () {
//    $collection = collect([
//        'Southwest.com',
//        'Wunderground.com',
//        'Goodreads.com',
//        'Ca.gov',
//        'Npr.org',
//        'Pch.com ',
//        'Drudgereport.com',
//        'Blackboard.com',
//        'People.com'
//    ])->shuffle();
//
//    dd($collection);
//});

/* 40. slice() */
//Route::get('/', function () {
//    $collection = collect([
//        'Expedia.com' => 'Has fun commercials',
//        'Soundcloud.com' => 'Cool music website.',
//        'Intuit.com ' => 'Business software for all.',
//        'Patch.com' => 'local news',
//        'Trulia.com' => 'Search Real Estate',
//        'Accuweather.com' => 'Get the forecast',
//        'Staples.com' => 'buy some office supplies',
//    ])->slice(3, 2, true);
//
//    dd($collection);
//});

/* 41. sort() */
//Route::get('/', function () {
//    $collection = collect([0, 4, 9, 22, 123, 432, 1, 5, 77 ])->sort();
//
//    dd($collection);
//});

/* 42. sortBy() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'Overstock.com', 'votes' => 15],
//        ['url' => 'Fidelity.com', 'votes' => 5],
//        ['url' => 'Vimeo.com', 'votes' => 22],
//        ['url' => 'Glassdoor.com', 'votes' => 5],
//        ['url' => 'Sears.com', 'votes' => 10],
//        ['url' => 'Ign.com ', 'votes' => 31],
//        ['url' => 'Cbs.com', 'votes' => 1],
//    ])->sortBy('votes');
//
//    dd($collection);
//});

/* 43. sortByDesc() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'Overstock.com', 'votes' => 15],
//        ['url' => 'Fidelity.com', 'votes' => 5],
//        ['url' => 'Vimeo.com', 'votes' => 22],
//        ['url' => 'Glassdoor.com', 'votes' => 5],
//        ['url' => 'Sears.com', 'votes' => 10],
//        ['url' => 'Ign.com ', 'votes' => 31],
//        ['url' => 'Cbs.com', 'votes' => 1],
//    ])->sortByDesc('votes');
//
//    dd($collection);
//});

/* 44. splice() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'Spotify.com'],
//        ['url' => 'Feedly.com'],
//        ['url' => 'Lifehacker.com'],
//        ['url' => 'Bloomberg.com'],
//        ['url' => 'Foodnetwork.com'],
//        ['url' => 'T-mobile.com'],
//    ]);
//
//    $chunk = $collection->splice(3, 2, [['url' => 'Gizmodo.com'], ['url' => 'Woot.com']]);
//
//    var_dump($chunk);
//
//    dd($collection);
//});

/* 45. sum() */
//Route::get('/', function () {
//    $collection = collect([2, 2])->sum();
//
//    dd($collection);

//    $collection = collect([
//        ['burger', 'cost' => 2.58],
//        ['fries', 'cost' => 1.33],
//        ['lemonade', 'cost' => 2.25],
//        ['ice cream', 'cost' => 1.50]
//    ])->sum('cost');
//
//    dd($collection);
//});

/* 46. take() */
//Route::get('/', function () {
//    $collection = collect([
//        ['burger', 'cost' => 2.58],
//        ['fries', 'cost' => 1.33],
//        ['lemonade', 'cost' => 2.25],
//        ['ice cream', 'cost' => 1.50]
//    ])->take(2);
//
//    dd($collection);
//});

/* 47. toArray() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'google.com'],
//        ['url' => 'facebook.com'],
//        ['url' => 'amazon.com'],
//        ['url' => 'youtube.com'],
//        ['url' => 'twitter.com'],
//        ['url' => 'craigslist.com'],
//        ['url' => 'reddit.com'],
//        ['url' => 'pinterest.com'],
//        ['url' => 'apple.com'],
//        ['url' => 'instagram.com'],
//        ['url' => 'wordpress.com'],
//        ['url' => 'target.com'],
//        ['url' => 'buzzfeed.com'],
//        ['url' => 'microsoft.com'],
//    ]);
//
//    dd($collection->toArray());
//});

/* 48. toJson() */
//Route::get('/', function () {
//    $collection = collect([
//        ['url' => 'google.com'],
//        ['url' => 'facebook.com'],
//        ['url' => 'amazon.com'],
//        ['url' => 'youtube.com'],
//        ['url' => 'twitter.com'],
//        ['url' => 'craigslist.com'],
//        ['url' => 'reddit.com'],
//        ['url' => 'pinterest.com'],
//        ['url' => 'apple.com'],
//        ['url' => 'instagram.com'],
//        ['url' => 'wordpress.com'],
//        ['url' => 'target.com'],
//        ['url' => 'buzzfeed.com'],
//        ['url' => 'microsoft.com'],
//    ]);
//
//    dd($collection->toJson());
//});

/* 49. transform() */
//Route::get('/', function () {
//    $collection = collect([5, 10, 4, 15, 20]);
//
//    $collection->transform(function ($item, $key) {
//        return $item * 3;
//    });
//
//    dd($collection->all());
//});

/* 50. unique() */
//Route::get('/', function () {
//    $collection = collect(['pizza', 'pizza', 'water', 'fruit juice', 'water', 7, 7, 7]);
//
//    $unique = $collection->unique();
//
//    dd($unique);
//});

/* 51. values() */
//Route::get('/', function () {
//    $collection = collect([
//        '123' => 'google.com',
//        '234' => 'amazon.com',
//        '345' => 'yahoo.com',
//        '456' => 'ebay.com',
//        '567' => 'twitter.com',
//        '678' => 'craigslist.com',
//        '789' => 'netflix.com',
//    ]);
//
//    dd($collection);

//    $collection = collect([
//        '123' => 'google.com',
//        '234' => 'amazon.com',
//        '345' => 'yahoo.com',
//        '456' => 'ebay.com',
//        '567' => 'twitter.com',
//        '678' => 'craigslist.com',
//        '789' => 'netflix.com',
//    ])->values();
//
//    dd($collection);
//});

/* 52. where() */
//Route::get('/', function () {
//    $collection = collect([
//        ['car' => 'Honda', 'mileage' => 2000],
//        ['car' => 'Tesla', 'mileage' => 35000],
//        ['car' => 'Subaru', 'mileage' => 15000],
//        ['car' => 'Ford', 'mileage' => 100000],
//        ['car' => 'Chevy', 'mileage' => 85000],
//        ['car' => 'Kia', 'mileage' => 100250],
//    ])->where('mileage', 15000);
//
//    dd($collection);
//});

/* 53. zip() */
Route::get('/', function () {
    $collection = collect([
        ['car' => 'Honda', 'mileage' => 2000],
        ['car' => 'Tesla', 'mileage' => 35000],
        ['car' => 'Subaru', 'mileage' => 15000],
        ['car' => 'Ford', 'mileage' => 100000],
        ['car' => 'Chevy', 'mileage' => 85000],
        ['car' => 'Kia', 'mileage' => 100250],
    ])->zip([
        'warranty',
        'warranty',
        'warranty',
        'warranty',
        'warranty',
        'warranty',
    ]);

    dd($collection);
});
