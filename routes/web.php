<?php

Route::get('/', function () {
    return Redirect::to('logowanie');
});

Route::get('logowanie', function() {
    return view('auth/login');
});

Auth::routes();

Route::get('panel', function() {
    return Redirect::to('panel/start');
});

// Navbar
Route::get('panel/start', 'DashboardController@start')->name('start');
Route::get('panel/parking', 'ParkingController@getParkingsList')->name('parking');
Route::get('panel/ustawienia', 'SettingController@settings')->name('ustawienia');

// Patient CRUD
Route::POST('panel/deleteParking', 'ParkingController@deleteParking');

// ChangePassword
Route::POST('panel/changePassword', 'SettingController@changePassword');
