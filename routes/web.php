<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\indexController;
use App\Http\Controllers\singlepropertyController;
use App\Http\Controllers\singlepostController;
use App\Http\Controllers\listingController;
use App\Http\Controllers\admin\popularlocationController;
use App\Http\Controllers\admin\TipsAndAdvicesController;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\blogstandardController;
use App\Http\Controllers\agentusController;
use App\Http\Controllers\agentsingleController;
use App\Http\Controllers\aboutusController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\registerController;
use App\Http\Controllers\admin\forgotpasswordController;
use App\Http\Controllers\admin\tablesController;

use App\Http\Controllers\admin\fourzerofourController;
use App\Http\Controllers\admin\indexController as AdminIndexController;
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

// user route
Route::get('/index/user' ,[indexController::class,'index'])->name('index');
Route::post('/indexpost' ,[indexController::class,'indexpost'])->name('indexpost');
Route::get('/singleproperty' ,[singlepropertyController::class,'singleproperty'])->name('singleproperty');
Route::get('/singlepost' ,[singlepostController::class,'singlepost'])->name('singlepost');
Route::get('/listing' ,[listingController::class,'listing'])->name('listing');
Route::get('/landingpage' ,[landingpageController::class,'landingpage'])->name('landingpage');
Route::get('/contactus' ,[contactusController::class,'contactus'])->name('contactus');
Route::get('/blogstandard' ,[blogstandardController::class,'blogstandard'])->name('blogstandard');
Route::get('/agentus' ,[agentusController::class,'agentus'])->name('agentus');
Route::get('/agentsingle' ,[agentsingleController::class,'agentsingle'])->name('agentsingle');
Route::get('/aboutus' ,[aboutusController::class,'aboutus'])->name('aboutus');
Route::get('/page' ,[pageController::class,'page'])->name('page');
Route::post('/upload' ,[indexController::class,'upload'])->name('upload');
Route::get('/popularlocation' ,[popularlocationController::class,'popularlocation'])->name('popularlocation');



// admin route
Route::get('/register' ,[registerController::class,'register'])->name('register');
Route::get('/login' ,[loginController::class,'login'])->name('login');
Route::get('/forgotpassword' ,[forgotpasswordController::class,'forgotpassword'])->name('forgotpassword');
Route::get('/tables' ,[tablesController::class,'tables'])->name('tables');
Route::get('/fourzerofour' ,[fourzerofourController::class,'fourzerofour'])->name('fourzerofour');
Route::get('/index' ,[AdminIndexController::class,'index'])->name('index');
Route::get('delete/delete/{id}' ,[tablesController::class,'delete'])->name('delete');
Route::post('table/update/{id}', [tablesController::class, 'update'])->name('table.update');






// popularlocationpost route
Route::post('/popularlocationpost', [popularlocationController::class, 'indexpost'])->name('popularlocationpost');
Route::post('/update/{id}',[popularlocationController::class, 'update'])->name('popularlocation.update');
Route::get('/delete/{id}',[popularlocationController::class, 'delete'])->name('popularlocation.delete');
Route::get('/upload',[popularlocationController::class, 'upload'])->name('upload');

// Tips and Advices route

Route::get('/tipsandadvices', [TipsAndAdvicesController::class,'tipsandadvices'])->name('tipsandadvices');

Route::post('/tipsandadvices/upload', [TipsAndAdvicesController::class,'tipsandadvicespost'])->name('tipsandadvices.upload');
Route::get('/tipsandadvices/delete/{id}', [TipsAndAdvicesController::class,'delete'])->name('tipsandadvices.delete');
Route::get('/tipsandadvices/update/{id}', [TipsAndAdvicesController::class,'update'])->name('tipsandadvices.update');