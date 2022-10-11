<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\PriaController;
use App\Http\Controllers\WanitaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\GaleriController;

// FE screening
// use App\Http\Controllers\Frontend\HomeController;

// STARTS FRONTEND
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\OurTeamController;
// END FRONTEND

// STARTS BACKEND
use App\Http\Controllers\AboutBackendController;
use App\Http\Controllers\ArticleBackendController;
// END BACKEND

use App\Models\Category;
use App\Models\User;

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

// Route::get('/', function (MempelaiController $mempelai) {
//     // dd($mempelai);
//     return view('frontend/home', [
//         'pageTitle' => "Home"
//         // ,
//         // 'pria' => $mempelai->pria_id
//     ]);
// });

// Route::get('/about-us', function () {
//     return view('frontend/about', [
//         'pageTitle' => "About"
//     ]);
// });
// START FRONT END
Route::get('/', [HomeController::class, 'index']); //->middleware('guest');  
Route::get('/about-us', [AboutController::class, 'index']); //->middleware('guest');  
Route::get('/articles', [ArticleController::class, 'index']); //->middleware('guest');  
Route::get('/company', [CompanyController::class, 'index']); //->middleware('guest');  
Route::get('/contact-us', [ContactUsController::class, 'index']); //->middleware('guest');  
Route::get('/our-team', [OurTeamController::class, 'index']); //->middleware('guest'); 
Route::get('/article/{id}', [ArticleController::class, 'detail'])->name('detail.article');
Route::get('/company/{id}', [CompanyController::class, 'detail'])->name('detail.company');
// START FRONT END

//Route::get('/post', [PostController::class, 'index']);

// middleware > defaultnya itu /home, untuk mengubahnya (app/http/providers/routeservice) ganti /home
// berikan name('login'), karna pada (app/http/middleware/authenticate) 'login', agar membaca route get/login itu namanya login   
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);   
Route::post('/logout', [LoginController::class, 'logout']);   

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');  
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/admin', function(){
    return view ('admin.index');
})->middleware('auth');  
Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');  
// jika ingin setting masuk ke register tidak harus login terlebih dahulu, pakai middleware'guest'
// jika ingin setting tidak bisa masuk ke dashboard harus login terlebih dahulu, pakai middleware'auth'

// START BACKEND
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('user', 'App\Http\Controllers\UserController');

Route::get('/about', [AboutBackendController::class, 'index'])->name('about.index');
Route::resource('about', 'App\Http\Controllers\AboutBackendController');

Route::get('/ourteam', [OurTeamBackendController::class, 'index'])->name('ourteam.index');
Route::resource('ourteam', 'App\Http\Controllers\OurTeamBackendController');

Route::resource('articles', 'App\Http\Controllers\ArticleBackendController');

Route::get('/our-clients', [OurClientBackendController::class, 'index'])->name('ourclient.index');
Route::resource('our-clients', 'App\Http\Controllers\OurClientBackendController');
// END BACKEND

Route::get('/mempelai', [MempelaiController::class, 'index'])->name('mempelai.index');
Route::resource('mempelai', 'App\Http\Controllers\MempelaiController');


Route::get('/wanita', [WanitaController::class, 'index'])->name('wanita.index');
Route::resource('wanita', 'App\Http\Controllers\WanitaController');

Route::get('/tempatacara', [TempatAcaraController::class, 'index'])->name('tempatacara.index');
Route::resource('tempatacara', 'App\Http\Controllers\TempatAcaraController');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::resource('kategori', 'App\Http\Controllers\KategoriController');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::resource('galeri', 'App\Http\Controllers\GaleriController');

Route::prefix('galeri')->group(function () {
    // Route::get('/', [\App\Http\Controllers\GaleriController::class, 'index'])->name('galeri.index');
    // Route::get('/create', [\App\Http\Controllers\GaleriController::class, 'create'])->name('galeri.create');
    // Route::post('/store', [\App\Http\Controllers\GaleriController::class, 'store'])->name('galeri.store');
    Route::post('/store/media', [\App\Http\Controllers\GaleriController::class, 'storeMedia'])->name('galeri.storeMedia');
    // Route::get('/{id}', [\App\Http\Controllers\GaleriController::class, 'edit'])->name('galeri.edit');
    // Route::put('/{id}', [\App\Http\Controllers\GaleriController::class, 'update'])->name('galeri.update');
    // Route::delete('/{id}', [\App\Http\Controllers\GaleriController::class, 'destroy'])->name('galeri.delete');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
// menamaan pada      ini  \|/ (category) harus sama dengan ini \|/  $category  
Route::get('/categories/{category:slug}', function(Category $category){
    return view ('/post/category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
        'pageTitle' => 'Category '.$category->name
    ]);
});

Route::get('/authors/{user}', function(User $user){
    return view ('/post/index', [
        'title' => 'User Post',
        'posts' => $user->posts,
        'pageTitle' => 'User Post'
    ]);
});

Route::group(['prefix' => 'api'], function () {
    Route::get('getDataPria', 'App\Http\Controllers\ApiController@getDataPria')->name('DataPria');
    Route::get('getDataWanita', 'App\Http\Controllers\ApiController@getDataWanita')->name('DataWanita');
    Route::get('getDataTempatAcara', 'App\Http\Controllers\ApiController@getDataTempatAcara')->name('DataTempatAcara');
});
// Route::get('/', function () {
//     return view('welcome');
// });