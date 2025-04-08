<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PetitionController;
use App\Http\Controllers\Backend\LivetvController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatusController;
use App\Http\Livewire\BackendUsers;
use App\Http\Livewire\BackendUserslw;
//use App\Http\Livewire\BackendPetitions;
use App\Http\Livewire\HomeSearchliwe;
use App\Http\Livewire\Contact;
use App\Http\Livewire\UserSearch;
use GuzzleHttp\Middleware;

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
    return view('main.home');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/userdashboard', function () {
    return view('user.index');
})->name('userdashboard');



// Route::get('dashboard', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard', [PetitionController::class, 'Index'])->middleware('auth:sanctum', 'verified')->name('user.index');

// Route::middleware('auth:sanctum', 'verified')->get('/dashboard', function () {
//     return view('user.index');
// });

//Admin Logout
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//Admin Category All Routs
Route::get('/categories', [CategoryController::class, 'Index'])->name('categories');
Route::get('/add/category', [CategoryController::class, 'AddCategory'])->name('add.category');
Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');
Route::get('/edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/update/category/{id}', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');

//Admin Users All Routs - Livewire
Route::get('/backend-users', BackendUsers::class)->name('backend-users');
Route::get('/backend-userslw', BackendUserslw::class)->name('backend-userslw');
Route::get('/', HomeSearchliwe::class);
// Route::get('/backend-petitions', [BackendPetitions::class, 'getData'])->name('backend-petitions');
//Route::get('/backend-petitions', BackendPetitions::class)->name('backend-petitions');
//Route::get('/backend-petitionslw', BackendPetitionslw::class)->name('backend-petitionslw');


//Route::get('/backend-petitions', [AdminController::class, 'BackendPetitions'])->name('backend-petitions');
Route::get('/user-search/{name?}', UserSearch::class);
Route::get('/contact', Contact::class);







//Admin Users_Petitions All Routs - Laravel
Route::get('/adminedit/petition/{id}', [AdminController::class, 'AdmineditPetition'])->name('adminedit.petition');
Route::post('/update/backend-petition/{id}', [AdminController::class, 'UpdateBackendPetition'])->name('update.backend-petition');
Route::get('/admindelete/petition/{id}', [AdminController::class, 'AdmindeletePetition'])->name('admindelete.petition');
Route::get('/admindelete/user/{id}', [AdminController::class, 'AdmindeleteUser'])->name('admindelete.user');
Route::get('/backend-petitions', [AdminController::class, 'BackendPetitions'])->name('backend-petitions');



//Create Petitions Routes
Route::post('/dashboard', [PetitionController::class, 'StorePetition'])->name('store.petition');
Route::get('/dashboard/{id}', [PetitionController::class, 'EditPetition'])->name('edit.petition');
Route::post('/dashboard/{id}', [PetitionController::class, 'UpdatePetition'])->name('update.petition');
Route::get('/dashboard/{id}', [PetitionController::class, 'DeletePetition'])->name('delete.petition');

//Create Petitions status_petition Route
Route::post('/dashboard/status', [StatusController::class, 'StatusPetition'])->name('status.petition');

//SEO Setting Routes
Route::get('/seo/setting', [CategoryController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/seo/update/{id}', [CategoryController::class, 'SeoUpdate'])->name('seo.update');


//Subdomena
Route::prefix('{subdomain}.peticia.org')->group(function () {
    Route::get('', [PetitionController::class, 'SinglePost'])->name('single.post');
    //Route::post('', [PetitionController::class, 'SignPetition'])->name('sign.petition');
});


Route::post('sign/petition', [PetitionController::class, 'SignPetition'])->name('sign.petition');

// LiveTV Setting
Route::get('/livetv/setting', [LivetvController::class, 'LiveTvSetting'])->name('livetv.setting');
Route::post('/livetv/update/{id}', [LivetvController::class, 'LiveTvUpdate'])->name('update.livetv');
Route::get('/livetv/active/{id}', [LivetvController::class, 'LiveTvActive'])->name('active.livetv');
Route::get('/livetv/deactive/{id}', [LivetvController::class, 'LiveTvDeActive'])->name('deactive.livetv');


// Search
Route::get('/', [SearchController::class, 'search'])->name('web.search');

//Zoznam všetkých petícií
Route::get('/zoznam', function () {
    return view('main.zoznam');
});
