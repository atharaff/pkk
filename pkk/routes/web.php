<?php
//routes/web.php
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/suka', function () {
    return view('suka');
});
Route::get('/shop', function () {
    return view('shop');
});



Route::resource('posts', PostController::class);

Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name('doLogin');
Route::post("/do-logout", [UserController::class, "doLogout"])->name('doLogout');
Route::get("/sample", [UserController::class, "createSample"])->name('createSample'); 
