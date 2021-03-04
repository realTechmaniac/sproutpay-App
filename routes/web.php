<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FxremitTransactionsController;
use App\Http\Controllers\SafevestTransactionsController;
use App\Http\Controllers\MoneyTransferTransactionsController;
use App\Http\Controllers\CompanyDetailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminActivitiesController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//APPLICATION WEB ROUTES::-->


//POST ROUTES::

Route::post('/storesafevest', [SafevestTransactionsController::class, 'storeData']);

Route::post('/storeremit', [FxremitTransactionsController::class, 'storeData']);

Route::post('/storemoneytransfer', [moneyTransferTransactionsController::class, 'storeData']);

Route::get('/company-details', [CompanyDetailsController::class, 'index']);
 	
Route::post('/store-company-datails', [CompanyDetailsController::class,'storeCompanyDetails'])->name('company.store');

Route::get('/appdashboard', [UserController::class,'showUserDashboard'])->name('user.dashboard');

Route::middleware(['auth'])->group(function(){

	Route::get('/appdashboard', [UserController::class,'showUserDashboard'])->name('user.dashboard');

	// -> FX Remit Page Route::-->

	Route::get('/fx-remit', [FxremitTransactionsController::class, 'index']);

	//-> SAFEVEST PAGE Route::-->

	Route::get('/safevest', [SafevestTransactionsController::class, 'index']);

	//->MONEYTRANSFER PAGE Route::-->

	Route::get('/moneytransfer', [MoneyTransferTransactionsController::class, 'index']);

});	

//All Admin Routes were inserted here::--->

Route::middleware(['auth', 'not.admin'])->group(function(){

	Route::get('/admin/dashboard', [AdminActivitiesController::class, 'showDashboard']);

	Route::get('/admin/dashboard/individuals', [AdminActivitiesController::class, 'showIndividuals']);

	Route::get('/admin/dashboard/companies', [AdminActivitiesController::class,'showCompanies']);

	Route::get('/admin/dashboard/safevest', [AdminActivitiesController::class, 'getSafevestTransactions']);

	Route::get('/admin/dashboard/fxremit',  [AdminActivitiesController::class, 'getFxremitTransactions']);

	Route::get('/admin/dashboard/moneytransfer',  [AdminActivitiesController::class, 'getMoneyTransferTransactions']);


});