<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
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

// PascalCase
// camelCase
// snake_case
// kebab-case

// Route::get('/', [TestController::class, 'index']);
// Route::get('/', 'TestController@index');

Route::get('/', [TestController::class, 'index'])->name('test.index');
// Route::get('/contact', [TestController::class, 'contact'])->name('test.contact');
Route::get('/team', [TestController::class, 'team'])->name('test.team');
Route::get('/services/{id}', [TestController::class, 'services'])->name('test.services');
Route::get('/about', [TestController::class, 'about'])->name('test.about');

Route::get('site1/{name?}', [Site1Controller::class, 'index'])->name('site1.index');

Route::get('site2/new', [Site2Controller::class, 'index'])->name('site2.index');


Route::prefix('site3')->name('site3.')->group(function() {
    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    Route::get('/about', [Site3Controller::class, 'about'])->name('about');
    Route::get('/contact', [Site3Controller::class, 'contact'])->name('contact');
    Route::get('/post', [Site3Controller::class, 'post'])->name('post');
});

Route::prefix('resume')->name('resume.')->group(function() {
    Route::get('/', [ResumeController::class, 'index'])->name('index');
    Route::get('/experience', [ResumeController::class, 'experience'])->name('experience');
    Route::get('/education', [ResumeController::class, 'education'])->name('education');
    Route::get('/skills', [ResumeController::class, 'skills'])->name('skills');
    Route::get('/interests', [ResumeController::class, 'interests'])->name('interests');
    Route::get('/awards', [ResumeController::class, 'awards'])->name('awards');
});

Route::get('form1', [FormsController::class, 'form1'])->name('forms.form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('forms.form1_data');

Route::get('form2', [FormsController::class, 'form2'])->name('forms.form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('forms.form2_data');

Route::get('form3', [FormsController::class, 'form3'])->name('forms.form3');
Route::post('form3', [FormsController::class, 'form3_data'])->name('forms.form3_data');

Route::get('form4', [FormsController::class, 'form4'])->name('forms.form4');
Route::post('form4', [FormsController::class, 'form4_data'])->name('forms.form4_data');

Route::get('form5', [FormsController::class, 'form5'])->name('forms.form5');
Route::post('form5', [FormsController::class, 'form5_data'])->name('forms.form5_data');

Route::get('contact', [FormsController::class, 'contact'])->name('forms.contact');
Route::post('contact', [FormsController::class, 'contact_data'])->name('forms.contact_data');




// Posts CRUD Application
// Soft Delete Routes
Route::get('posts/trash', [PostController::class, 'trash'])->name('posts.trash');
Route::get('posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::get('posts/{id}/forcedelete', [PostController::class, 'forcedelete'])->name('posts.forcedelete');


Route::get('posts', [PostController::class, 'index'])->name('posts.index');


Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');

Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
// dd(now('+6 months'));
// Relation Routes
Route::get('one-to-one', [RelationController::class, 'one_to_one']);
Route::get('users', [RelationController::class, 'users']);

Route::get('one-to-many', [RelationController::class, 'one_to_many']);
Route::get('post/{id}', [RelationController::class, 'post']);
Route::post('add-comment', [RelationController::class, 'add_comment'])->name('post.add_comment');

Route::get('register-subjects', [RelationController::class, 'register_subjects']);
Route::post('register-subjects', [RelationController::class, 'register_subjects_data'])->name('register_subjects_data');
