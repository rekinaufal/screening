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
use App\Http\Controllers\MailController;

// FE screening
// use App\Http\Controllers\Frontend\HomeController;

// STARTS FRONTEND
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\OurTeamController;
use App\Http\Controllers\Frontend\JobfairController;
use App\Http\Controllers\Frontend\ServiceEBCController;
use App\Http\Controllers\Frontend\ServiceTSController;
// END FRONTEND

// STARTS BACKEND
use App\Http\Controllers\JobsBackendController;
use App\Http\Controllers\AboutBackendController;
use App\Http\Controllers\ArticleBackendController;
use App\Http\Controllers\NewsBackendController;
use App\Http\Controllers\EmailController;
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
Route::get('/services-ebc', [ServiceEBCController::class, 'index']); //->middleware('guest');  
Route::get('/services-ts', [ServiceTSController::class, 'index']); //->middleware('guest');  
Route::get('/article', [ArticleController::class, 'index']); //->middleware('guest');  
Route::get('/article/{id}', [ArticleController::class, 'detail'])->name('detail.article');
Route::get('/news/{id}', [NewsBackendController::class, 'detail'])->name('detail.news');
Route::get('/event', [ArticleController::class, 'indexEvent']); //->middleware('guest');  
Route::get('/company', [CompanyController::class, 'index']); //->middleware('guest');  
Route::get('/company/{id}', [CompanyController::class, 'detail'])->name('detail.company');
Route::get('/contact-us', [ContactUsController::class, 'index']); //->middleware('guest');  
Route::get('/our-team', [OurTeamController::class, 'index']); //->middleware('guest'); 
Route::get('profile!', 'App\Http\Controllers\UserController@profile');
Route::get('/detailJobfair/{id}', [JobfairController::class, 'jobfairDetail'])->name('detailJobfair.jobfairDetail');
Route::put('Applied!', [JobfairController::class, 'Applied'])->name('Applied!.Applied');
Route::post('/company', [CompanyController::class, 'search'])->name('company.search');
Route::get('/jobs/{id}', [JobsBackendController::class, 'download'])->name('jobs.download');

// START FRONT END

//TEMPORARY

Route::get('/see-all-job', function () {
    return view('frontend/seeAllJob', [
        'pageTitle' => "About"
    ]);
});

//TEMPIRARY

Route::get('/kirimemail','App\Http\Controllers\MailController@index');
//Route::get('/post', [PostController::class, 'index']);

// middleware > defaultnya itu /home, untuk mengubahnya (app/http/providers/routeservice) ganti /home
// berikan name('login'), karna pada (app/http/middleware/authenticate) 'login', agar membaca route get/login itu namanya login   
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/admin_panel', [LoginController::class, 'adminPanel'])->name('login_admin')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);   
Route::post('/logout', [LoginController::class, 'logout']);   
Route::resource('applied', 'App\Http\Controllers\AppliedController');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');  
// Route::get('/registertalent', 'App\Http\Controllers\RegisterController@storeTalent');
Route::post('/registertalent', [RegisterController::class, 'storeTalent']);
Route::post('/registercompany', [RegisterController::class, 'storeCompany']);

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

Route::get('/companies', [CompanyBackendController::class, 'index'])->name('company.index');
Route::resource('companies', 'App\Http\Controllers\CompanyBackendController');

Route::get('/jobs', [JobsBackendController::class, 'index'])->name('jobs.index');
Route::resource('jobs', 'App\Http\Controllers\JobsBackendController');

Route::get('/talents', [TalentBackendController::class, 'index'])->name('talents.index');
Route::get('/get-cities-by-province', 'App\Http\Controllers\TalentBackendController@getCitiesByProvince')->name('get-cities-by-province');
Route::resource('talents', 'App\Http\Controllers\TalentBackendController');

Route::get('/banners', [BannersBackendController::class, 'index'])->name('banners.index');
Route::resource('banners', 'App\Http\Controllers\BannerBackendController');

Route::get('/news', [NewsBackendController::class, 'index'])->name('news.index');
Route::resource('news', 'App\Http\Controllers\NewsBackendController');

Route::get('/events', [EventBackendController::class, 'index'])->name('events.index');
Route::resource('events', 'App\Http\Controllers\EventBackendController');

Route::post('sendMessage', [\App\Http\Controllers\Frontend\ContactUsController::class, 'SendMessage'])->name('message.SendMessage');

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

Route::get('/service', [ServiceBackendController::class, 'index'])->name('service.index');
Route::resource('service', 'App\Http\Controllers\ServiceBackendController');
Route::resource('service_details', 'App\Http\Controllers\ServiceDetailsBackendController');

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
    Route::get('getDataAppliedCompany', 'App\Http\Controllers\ApiController@getDataAppliedCompany')->name('DataAppliedCompany');
    Route::get('getDataCompany', 'App\Http\Controllers\ApiController@getDataCompany')->name('DataCompany');
    Route::get('getDataJobfair', 'App\Http\Controllers\ApiController@getDataJobfair')->name('DataJobfair');
    Route::get('getDataPria', 'App\Http\Controllers\ApiController@getDataPria')->name('DataPria');
    Route::get('getDataWanita', 'App\Http\Controllers\ApiController@getDataWanita')->name('DataWanita');
    Route::get('getDataTempatAcara', 'App\Http\Controllers\ApiController@getDataTempatAcara')->name('DataTempatAcara');
});

Route::get('kirim-email','App\Http\Controllers\EmailController@index');
// Route::get('/', function () {
//     return view('welcome');
// });