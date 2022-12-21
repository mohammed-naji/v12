<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Route::get(url, action);
// Route::post(url, action);
// Route::put(url, action);
// Route::patch(url, action);
// Route::delete(url, action);

// use , namespace

// 5 pages => home, about, contact, team, services

// PHP Notations
// . Concat
// => Assoc Array
// :: class method
// -> object method


// Route::post('/', function() {
//     return 'home page';
// });

// Route::put('/', function() {
//     return 'home page';
// });

// Route::patch('/', function() {
//     return 'home page';
// });

// Route::delete('/', function() {
//     return 'home page';
// });

// Route::get('', function() {
//     return 'home page - get';
// });

// Route::get('/about', function() {
//     return 'about page';
// });

// Route::get('/contact', function() {
//     return 'contact page';
// });

// Route::get('/team', function() {
//     return 'team page';
// });

// Route::get('/services', function() {
//     return 'services page';
// });

// // https://bakkah.com/sessions
// https://bakkah.com/sessions/capm
// https://bakkah.com/sessions/ecba/self-study

// Route::get('user/{name?}', function($name = 'online') {
//     return 'user ' . $name;
// // })->whereAlpha('name');
// // })->whereNumber('name');
// })->whereAlphaNumeric('name');

// Route::get('user', function() {
//     return 'user';
// });

// Route::match(['get', 'put', 'delete'], '/cookie-policy', function() {
//     return 'Done';
// });

// Route::any('/momen', function() {
//     $foods = [
//         'Mohammed Naji' => ['Shawerma', 'Pizza'],
//         'Watan' => ['Shawerma', 'Pizza'],
//         'Haneen' => ['Pasta', 'Candy'],
//         'Mohammed' => ['Kabsa', 'Meat'],
//         'Mostafa' => ['Chicken'],
//         'Abood' => ['Shawerma', 'Pizza', 'Pasta'],
//         'Momen' => ['Burger']
//     ];

//     foreach($foods as $name => $food) {
//         echo "$name Love Food: " . implode(", ", $food);
//         // $i = 1;
//         // foreach($food as $f) {
//         //     echo $f;
//         //     if($i < count($food)) {
//         //         echo ', ';
//         //     }

//         //     $i++;
//         // }
//         // echo "<br>";
//     }

// });

// include 'admin.php';

// Route::view('/', 'welcome');
// Route::get('/', function() {
//     return view('welcome');
// });

// Route::get('/', [TestController::class, 'index']);
// Route::get('/', 'TestController@index');

Route::get('/', [TestController::class, 'index'])->name('test.index');
Route::get('/contact', [TestController::class, 'contact'])->name('test.contact');
Route::get('/team', [TestController::class, 'team'])->name('test.team');
Route::get('/services/{id}', [TestController::class, 'services'])->name('test.services');
Route::get('/about', [TestController::class, 'about'])->name('test.about');
