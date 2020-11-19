<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/searchView', 'ProductManagement\TicketController@showSearchView')->name('tickets.searchView');
Route::get('/advancedSearchView', 'ProductManagement\TicketController@advancedSearchView')->name('tickets.advancedSearchView');
Route::get('/checkView', 'ProductManagement\TicketController@showcheckView')->name('tickets.checkView');
Route::get('/search', 'ProductManagement\TicketController@search')->name('tickets.search');
Route::group(['middleware' => ['auth']], function() {
    // Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/change-password', 'HomeController@changePassword')->name('change_password');

    Route::resource('roles','UserManagement\RoleController');
    Route::resource('users','UserManagement\UserController');
    Route::resource('products','ProductManagement\ProductController');
    Route::resource('tickets','ProductManagement\TicketController');
    Route::get('/multicreate', 'ProductManagement\TicketController@multicreate')->name('tickets.multicreate');
    Route::post('/multistore', 'ProductManagement\TicketController@multistore')->name('tickets.multistore');

    Route::resource('times','ProductManagement\TimesController');
    Route::resource('incomes','IncomeController');
    Route::resource('balances','BalanceController');
    Route::get('/addbalance/{id}', 'UserManagement\UserController@addbalance')->name('users.addbalance');
    Route::patch('/updatebalance/{id}', 'UserManagement\UserController@updatebalance')->name('users.updatebalance');
    
    
    Route::get('/mybalance', 'UserManagement\UserController@userbalance')->name('users.balance');
    Route::get('/myaccount', 'UserManagement\UserController@useraccount')->name('users.account');
    Route::get('/mytickets', 'UserManagement\UserController@usertickets')->name('users.usertickets');
    Route::get('/ticketStatus', 'ProductManagement\TicketController@ticketStatus')->name('tickets.ticketStatus');
    Route::get('/buyticket/{id}', 'ProductManagement\TicketController@buyticket')->name('tickets.buynow');

    Route::get('/dashboard', 'BackendManagement\DashboardController@index')->name('dashboard');
    Route::get('/incomereport', 'IncomeController@incomereport')->name('incomereport');
    Route::get('/balance', 'IncomeController@balance')->name('balance');

});

