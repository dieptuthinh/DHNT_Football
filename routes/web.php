<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layout');
});

Auth::routes();

// Frontend
// cái /home chỉ là url đường dẫn
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/404', [App\Http\Controllers\HomeController::class, 'error_page']);



Route::post('/search', [App\Http\Controllers\HomeController::class, 'search']);
Route::post('/autocomplete-ajax', [App\Http\Controllers\HomeController::class, 'autocomplete_ajax']);



Route::middleware(['auth'])->group(function () {
    // user infomation
    Route::get('/user-infomation/{id}', [App\Http\Controllers\UserInfoController::class, 'user_infomation']);
    Route::post('/update-user-info/{id}', [App\Http\Controllers\UserInfoController::class, 'update_user_infomation']);

    Route::get('/create-team', [App\Http\Controllers\TeamController::class, 'create_team']);
    Route::post('/insert-team', [App\Http\Controllers\TeamController::class, 'insert_team']);

        // my team
    Route::get('/my-team/{team_id}', [App\Http\Controllers\TeamController::class, 'my_team']);
    Route::post('/update-team-info/{team_id}', [App\Http\Controllers\TeamController::class, 'update_team_infomation']);


    Route::get('/create-match', [App\Http\Controllers\MatchController::class, 'create_match']);
    Route::post('/insert-match', [App\Http\Controllers\MatchController::class, 'insert_match']);
    Route::get('/history-match', [App\Http\Controllers\MatchController::class, 'history_match']);

    // booking
    Route::get('/booking', [App\Http\Controllers\BookingController::class, 'booking']);
    Route::post('/create-booking', [App\Http\Controllers\BookingController::class, 'create_booking']);
    Route::get('/history-booking', [App\Http\Controllers\BookingController::class, 'history_booking']);
    
    // Route::post('/create-booking-7', [App\Http\Controllers\BookingController::class, 'booking_7']);
    // Route::post('/create-booking-11', [App\Http\Controllers\BookingController::class, 'booking_11']);
    // Route::post('/create-booking-futsal', [App\Http\Controllers\BookingController::class, 'booking_futsal']);
    

});




// booking info field Field type
Route::get('/field-info-5', [App\Http\Controllers\BookingController::class, 'field_info_5']);
Route::get('/field-info-7', [App\Http\Controllers\BookingController::class, 'field_info_7']);
Route::get('/field-info-11', [App\Http\Controllers\BookingController::class, 'field_info_11']);
Route::get('/field-info-futsal', [App\Http\Controllers\BookingController::class, 'field_info_futsal']);

// list Team
Route::get('/list-team', [App\Http\Controllers\TeamController::class, 'show_list_team']);




// Match
Route::get('/list-match', [App\Http\Controllers\MatchController::class, 'list_match']);


Route::get('/waiting-for-match/{match_id}', [App\Http\Controllers\MatchController::class, 'waiting_for_match']);
Route::get('/accept-macth/{match_id}', [App\Http\Controllers\MatchController::class, 'accept_macth']);

// match filter
Route::get('/match-mc', [App\Http\Controllers\MatchController::class, 'match_mc']);
Route::get('/match-tb', [App\Http\Controllers\MatchController::class, 'match_tb']);
Route::get('/match-tby', [App\Http\Controllers\MatchController::class, 'match_tby']);
Route::get('/match-tbk', [App\Http\Controllers\MatchController::class, 'match_tbk']);
Route::get('/match-k', [App\Http\Controllers\MatchController::class, 'match_k']);
Route::get('/match-km', [App\Http\Controllers\MatchController::class, 'match_km']);



// booking
Route::get('/booking-price', [App\Http\Controllers\BookingController::class, 'booking_price']);
Route::get('/waiting-for-booking/{booking_details_id}', [App\Http\Controllers\BookingController::class, 'waiting_for_booking']);
Route::get('/accept-booking/{booking_details_id}', [App\Http\Controllers\BookingController::class, 'accept_booking']);


// -----------------------------------------------------------------------------------------------------------------------

// Backend

// booking admin
Route::get('/booking-admin', [App\Http\Controllers\BookingController::class, 'booking_admin']);
Route::get('/revenue', [App\Http\Controllers\BookingController::class, 'revenue']);
Route::get('/all-booking', [App\Http\Controllers\BookingController::class, 'all_booking']);
Route::get('/all-booking-card', [App\Http\Controllers\BookingController::class, 'all_booking_details']);
Route::get('/delete-booking-card/{booking_id}', [App\Http\Controllers\BookingController::class,'delete_booking_details']);
Route::get('/delete-booking/{booking_id}', [App\Http\Controllers\BookingController::class,'delete_booking']);






// Admin
// /admin là chỉ đường dẫn chạy đến function index của HomeController
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin_login']);
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'admin_logout']);
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'admin_dashboard']);
Route::post('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);


Route::get('/all-admin', [App\Http\Controllers\AdminController::class, 'all_admin']);
Route::get('/add-admin', [App\Http\Controllers\AdminController::class, 'add_admin']);
Route::post('/insert-admin', [App\Http\Controllers\AdminController::class,'insert_admin']);
Route::post('/update-admin/{admin_id}', [App\Http\Controllers\AdminController::class,'update_admin']);

Route::get('/edit-admin/{admin_id}', [App\Http\Controllers\AdminController::class,'edit_admin']);
Route::get('/delete-admin/{admin_id}', [App\Http\Controllers\AdminController::class,'delete_admin']);

// User
Route::get('/all-user', [App\Http\Controllers\UserInfoController::class, 'all_user']);
Route::get('/add-user', [App\Http\Controllers\UserInfoController::class, 'add_user']);
Route::post('/insert-user', [App\Http\Controllers\UserInfoController::class,'insert_user']);
Route::post('/update-user/{id}', [App\Http\Controllers\UserInfoController::class,'update_user']);

Route::get('/edit-user/{id}', [App\Http\Controllers\UserInfoController::class,'edit_user']);
Route::get('/delete-user/{id}', [App\Http\Controllers\UserInfoController::class, 'delete_user']);


// Team
Route::get('/all-team', [App\Http\Controllers\TeamController::class, 'all_team']);
Route::get('/delete-team/{team_id}', [App\Http\Controllers\TeamController::class,'delete_team']);

// Match
Route::get('/all-match', [App\Http\Controllers\MatchController::class, 'all_match']);
Route::get('/delete-match/{match_id}', [App\Http\Controllers\MatchController::class,'delete_match']);

// field type
Route::get('/all-field-type', [App\Http\Controllers\FieldTypeController::class,'all_field_type']);
Route::get('/add-field-type', [App\Http\Controllers\FieldTypeController::class,'add_field_type']);
Route::post('/insert-field-type', [App\Http\Controllers\FieldTypeController::class,'insert_field_type']);
Route::post('/update-field-type/{field_type_id}', [App\Http\Controllers\FieldTypeController::class,'update_field_type']);

Route::get('/edit-field-type/{field_type_id}', [App\Http\Controllers\FieldTypeController::class,'edit_field_type']);
Route::get('/delete-field-type/{field_type_id}', [App\Http\Controllers\FieldTypeController::class,'delete_field_type']);

// field 
Route::get('/all-field', [App\Http\Controllers\FieldController::class,'all_field']);
Route::get('/add-field', [App\Http\Controllers\FieldController::class,'add_field']);
Route::post('/insert-field', [App\Http\Controllers\FieldController::class, 'insert_field']);
Route::post('/update-field/{field_id}', [App\Http\Controllers\FieldController::class, 'update_field']);

Route::get('/edit-field/{field_id}', [App\Http\Controllers\FieldController::class, 'edit_field']);
Route::get('/delete-field/{field_id}', [App\Http\Controllers\FieldController::class, 'delete_field']);



