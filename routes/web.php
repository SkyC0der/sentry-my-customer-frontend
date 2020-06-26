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



// backend codes

Route::prefix('/backend/login')->group(function () {
    Route::get('/', ['uses' => "Auth\LoginController@index"])->name('login');
    Route::post('/authenticate', ['uses' => "Auth\LoginController@authenticate"])->name('login.authenticate');
});

Route::get('/backend/register', function () {
    return view('backend.register.signup');
});

Route::post('/backend/register', 'RegisterController@register')->name('register');

Route::get('/backend/recoverPassword', function () {
    return view('backend.recoverPassword.recoverPassword');
});


Route::get('backend/activate', 'ActivateController@index');


// dashboard
Route::get('/backend/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

// transaction

Route::get('/backend/transactions', function () {
    return view('backend.transactions.index');
});

// Route::get('/backend/view_transaction/{{$id}}', function () {
//     return view('backend.transactions.show');
// });

Route::get('/backend/{id}', 'SingleTransactionController@index')->name('view_transaction');

Route::resource('/backend/users', 'UsersController');


Route::get('/backend/debt_reminders', function () {
    return view('backend.debt_reminder.index');
});


Route::get('/backend/complaint', function () {
    return view('backend.complaintform.complaintform');
});

Route::get('/backend/complaint_log', function () {
    return view('backend.complaintlog.complaintlog');
});

// all users

Route::get('/users_list', function () {
    return view('users_list.single_user');
});

Route::get('/backend/view_user', function () {
    return view('backend.users_list.show');
});

// analytics
Route::get('/backend/analytics', function () {
    return view('backend.analytics.analytics');
})->name('analytics');


// settings

// Route::get('/backend/settings', function () {
//     return view('backend.settings.settings');
// });

Route::get('/backend/settings', 'SettingsController@index');

Route::post('/backend/settings', 'SettingsController@update')->name('settings');

