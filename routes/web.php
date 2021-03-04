<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group([],function(){

    Route::get('/', function () {
        return view('website.websitehome');
    });
    
    Route::get('/websitehome', function () {
        return view('website.websitehome');
    });
    // Route::get('/faq', function () {
    //     return view('website.faq');
    // })->name('FAQ');
    Route::get('/faqfind','FaqController@findsearchFaq');
    Route::get('/faq','FaqController@retrieveFaqlist')->name('FAQ');
    Route::get('/oclp', function () {
        return view('website.our-customers-loyalty-program');
    });
    Route::get('/vmc', function () {
        return view('website.video-music-collection');
    });
    Route::get('/virtual-staging', function () {
        return view('website.virtual-staging');
    })->name('virtual-staging');
    
    Route::get('/sign-in', function () {
        return view('website.sign-in');
    })->name('sign-in');
    Route::get('/sign-up', function () {
        return view('website.sign-up');
    })->name('sign-up');
    Route::get('/support-desk', function () {
        return view('website.ticket');
    })->name('support-desk');
});

Route::group(['middleware' => ['__Session']], function () {
    Route::match(['post', 'get'], '/edit_user', 'users\edit\EditUserController@ViewUser');

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');       
    });

    Route::get('pending_tours', 'admin\PendingToursController@index')->name('pending_tours');
    Route::get('pending_tours/getdata', 'admin\PendingToursController@getdata')->name('pending_tours.getdata');
   
    // Route::get('/pending_tours', function () {
    //     return view('admin.pending_tours');
    // });
    Route::get('/completed_tours', function () {
        return view('admin.completed_tours');
    });
    Route::get('/users', function () {
        return view('admin.users');
    });
    Route::get('/pending_users', function () {
        return view('admin.pending_users');
    });
    Route::get('/town_tours', function () {
        return view('admin.town_tours');
    });
    Route::get('/amenities_tours', function () {
        return view('admin.amenities_tours');
    });
    Route::get('/sponsors', function () {
        return view('admin.sponsors');
    });
    Route::get('/tour_licenses', function () {
        return view('admin.tour_licenses');
    });
     Route::get('/settings', function () {
        return view('admin.settings');
    });
    // Users Side
    Route::get('/ordernow', function () {
        return view('users.ordernow');
    });
    Route::get('/active_tours', function () {
        return view('users.active_tours');
    });
});


Route::match(['post', 'get'], '/login', 'authentication\LoginController@authentication');
Route::match(['post', 'get'], '/register', 'register\RegisterController@register');
// Route::match(['post', 'get'], '/pending_tours', 'admin\PendingToursController@index');
// Route::resource('pending-tours', 'admin\PendingToursController');

