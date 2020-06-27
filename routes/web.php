<?php

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
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('admin', function() {
    return redirect('/admin/dashboard');
});

// backend codes

Route::prefix('/admin')->group(function () {
    Route::get('/login', ['uses' => "Auth\LoginController@index"])->name('login');
    Route::post('/login/authenticate', ['uses' => "Auth\LoginController@authenticate"])->name('login.authenticate');


    Route::get('/register', 'Auth\RegisterController@index');

    Route::post('/register', 'Auth\RegisterController@register')->name('register');
});

// Protected Routes
Route::group(['prefix' => '/admin',  'middleware' => 'backend.auth'], function () {
    Route::get('/activate', 'ActivateController@index')->name('activate.user');

    // dashboard
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    // Customers
    Route::get('/customers', function () {
        return view('backend.customers.index');
    });
    // transaction

    Route::get('/transactions', function () {
        return view('backend.transactions.index');
    });

    // Route::get('/backend/view_transaction/{{$id}}', function () {
    //     return view('backend.transactions.show');
    // });

    // Route::get('/backend/{id}', 'SingleTransactionController@index')->name('view_transaction');

    Route::resource('/users', 'UsersController');


    Route::get('/debt_reminders', function () {
        return view('backend.debt_reminder.index');
    });


    Route::get('/complaint', function () {
        return view('backend.complaintform.complaintform');
    });

    Route::get('/complaint_log', function () {
        return view('backend.complaintlog.complaintlog');
    });

    // all users

    Route::get('/users_list', function () {
        return view('users_list.single_user');
    });

    Route::get('/view_user', function () {
        return view('backend.users_list.show');
    });

    // analytics
    Route::get('/analytics', function () {
        return view('backend.analytics.analytics');
    })->name('analytics');

    // stores
    Route::get('/stores', function () {
        return view('backend.stores.store_list');
    });

    Route::get('/settings', 'SettingsController@index');

    Route::post('/settings', 'SettingsController@update')->name('settings');
});
