<?php
namespace App;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\NousController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\acceuilController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\magazineController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AddUserController;
use App\Http\Controllers\Admin\AddAlbumController;
use App\Http\Controllers\Admin\AddslideController;
use App\Http\Controllers\TelechargementController;
use App\Http\Controllers\Admin\AddbannerController;
use App\Http\Controllers\ConfidentialiteController;
use App\Http\Controllers\Admin\AddannonceController;
use App\Http\Controllers\Admin\AddmagazineController;

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
Route::resource('cat', catController::class)->only(
    ['index']
);
Route::resource('femme', \App\Http\Controllers\FemmeController::class)->only(
    ['index', 'show']
);
Route::resource('homme', HommeController::class)->only(
    ['index','show']
);
Route::post('telechargement',[TelechargementController::class, 'store'])->name('telechargement.store');
Route::get('album', [AlbumController::class, 'index'])->name('album');
Route::get('album/femme/enfant', [AlbumController::class, 'femme_enfant'])->name('femme_enfant');
Route::get('album/femme/ado', [AlbumController::class, 'femme_ado'])->name('femme_ado');
Route::get('album/femme/jeune', [AlbumController::class, 'femme_jeune'])->name('femme_jeune');
Route::get('album/femme/mature', [AlbumController::class, 'femme_mature'])->name('femme_mature');
Route::get('album/homme/enfant', [AlbumController::class, 'homme_enfant'])->name('homme_enfant');
Route::get('album/homme/ado', [AlbumController::class, 'homme_ado'])->name('homme_ado');
Route::get('album/homme/jeune', [AlbumController::class, 'homme_jeune'])->name('homme_jeune');
Route::get('album/homme/mature', [AlbumController::class, 'homme_mature'])->name('homme_mature');
Route::get('search', [AlbumController::class, 'search'])->name('search');
Route::get('album/{album}', [AlbumController::class,'show'])->name('album.show');
Route::post('/album',[AlbumController::class, 'like'])->name('album.like');
Route::get("login-register", [SocialiteController::class, 'loginRegister']);
Route::get('contact',[ContactController::class, 'index'])->name('contact');
Route::get('Panier', [PanierController::class, 'show'])->name('panier.show');
Route::post('Panier/add/{album}', [PanierController::class, 'add'])->name('panier.add');
Route::get('Panier/remove/{album}', [PanierController::class, 'remove'])->name('panier.remove');
Route::get('Panier/empty', [PanierController::class, 'empty'])->name('panier.empty');

// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class,'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class,'callback'])->name('socialite.callback');

Route::resource('acceuil', acceuilController::class)->only([
    'index'
]);
Route::resource('Nous', NousController::class)->only([
    'index'
]);
Route::resource('annonce',AnnonceController::class)->only(
    ['index','store','show']
);
Route::resource('magazine', magazineController::class);
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
// Route::resource('confidentialite', ConfidentialiteController::class)->only([
//     'index'
// ]);
Route::get('confidentialite', [ConfidentialiteController::class, 'show'])->name('Confidentialite.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
    // Route::put('admin/addannonce',[AddannonceController::class,'update'])->name('Addannonce.update');
    // Route::get('admin/addannonce',[AdminController::class,'addannonce'])->name('Addannonce.');
    // Route::post('admin/addannonce',[AdminController::class,'storeannonce'])->name('storeannonce');
    // Route::get('admin/addmagazine',[AdminController::class,'addmagazine'])->name('addmagazine.');
    Route::resource('admin/addalbum', AddAlbumController::class);
    Route::resource('admin/addmagazine',AddmagazineController::class);
    Route::resource('admin/adduser', AddUserController::class);
    Route::resource('admin/addannonce',AddannonceController::class);
    Route::resource('admin/addslide',AddslideController::class)->except([
        'create', 'show', 'destroy'
    ]);;
    Route::resource('admin/addbanner',AddbannerController::class)->except([
        'create', 'show', 'destroy'
    ]);
    Route::resource('admin', AdminController::class);
});
  // Route::put('admin/addannonce',[AddannonceController::class,'update'])->name('Addannonce.update');
    // Route::get('admin/addannonce',[AdminController::class,'addannonce'])->name('Addannonce.');
    // Route::post('admin/addannonce',[AdminController::class,'storeannonce'])->name('storeannonce');
    // Route::get('admin/addmagazine',[AdminController::class,'addmagazine'])->name('addmagazine.');
    // Route::post('admin/addmagazine',[AdminController::class,'storemagazine'])->name('storemagazine');
    // Route::get('admin/adduser', [AdminController::class,'adduser'])->name('Adduser.');
    // Route::resource('admin/addannonce',AddannonceController::class);
    // Route::resource('admin', AdminController::class);
require __DIR__ . '/auth.php';
