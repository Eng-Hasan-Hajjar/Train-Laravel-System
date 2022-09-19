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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web','admin']],function (){
    Route::get('admin','AdminController@index');
    //Route::get('chartjs', 'AdminController@chartjs');

    Route::get('user','UserController@user');
    Route::get('station','StationController@station');
    Route::get('train','TrainController@train');
    Route::get('trains_stations','TrainStationController@trains_stations');
    Route::get('seats','SeatController@seats');
    Route::get('admin_offer','OfferController@admin_offer');
//user
    Route::get('read_user_url','UserController@read_user');
    Route::post('create_user_url','UserController@create_user');
    Route::get('delete_user_url','UserController@delete_user');
    Route::get('edite_user_url','UserController@edite_user');
    Route::post('update_user_url','UserController@update_user');
//station
    Route::get('read_station_url','StationController@read_station');
    Route::post('create_station_url','StationController@create_station');
    Route::get('delete_station_url','StationController@delete_station');
    Route::get('edite_station_url','StationController@edite_station');
    Route::post('update_station_url','StationController@update_station');
//train_station
    Route::get('read_train_station_url','TrainStationController@read_train_station');
    Route::post('create_train_station_url','TrainStationController@create_train_station');
    Route::get('delete_train_station_url','TrainStationController@delete_train_station');
    Route::get('edite_train_station_url','TrainStationController@edite_train_station');
    Route::post('update_train_station_url','TrainStationController@update_train_station');
//train
    Route::get('read_train_url','TrainController@read_train');
    Route::post('create_trian_url','TrainController@create_trian');
    Route::get('delete_train_url','TrainController@delete_train');
    Route::get('edite_train_url','TrainController@edite_train');
    Route::post('update_trian_url','TrainController@update_trian');
//seat
    Route::get('read_seat_url','SeatController@read_seat');
    Route::post('create_seat_url','SeatController@create_seat');
    Route::get('delete_seat_url','SeatController@delete_seat');
    Route::get('edite_seat_url','SeatController@edite_seat');
    Route::post('update_seat_url','SeatController@update_seat');
//offer
    Route::get('read_offer_url','OfferController@read_offer');
    Route::post('create_offer_url','OfferController@create_offer');
    Route::get('delete_offer_url','OfferController@delete_offer');
    Route::get('edite_offer_url','OfferController@edite_offer');
    Route::post('update_offer_url','OfferController@update_offer');
//Revarsation
    Route::get('admin_reversation','ReversationController@admin_reversation');
});



//Route::get('search_page','CustomerController@search_page');

Route::get('ticket_view','CustomerController@ticket_view');
//Route::get('search','CustomerController@search');
//Route::get('pagination_search','CustomerController@pagination_search');
//Route::post('reservation','CustomerController@reservation');
//Route::get('check_ticket','CustomerController@check_ticket');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/','CustomerController@index');

});
Route::get('first_step_url','CustomerController@first_step');
Route::post('last_step_url','CustomerController@last_step');
Route::get('profile','ProfileController@profile');
Route::get('cancle_reversation','ProfileController@cancle_reversation');
Route::get('offer','OfferController@offer');
Route::get('pdf_generate','CustomerController@pdf_generate');

