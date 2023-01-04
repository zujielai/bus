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
    return view('welcome');
});

Route::get('/addSchedule', function () {
    return view('addSchedule');
});

Route::get('/cancelSchedule', function () {
    return view('cancelSchedule');
});

Route::get('/userProfile', function () {
    return view('userProfile');
});

Route::get('/busTicket', function () {
    return view('busTicket');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/checkBusTicketRecord', function () {
    return view('checkBusTicketRecord');
});

Route::get('/myTrip', function () {
    return view('myTrip');
});

Route::get('/myTrip2', function () {
    return view('myTrip2');
});

Route::get('/myCart', function () {
    return view('myCart');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/addQr', function () {
    return view('addQr');
});

Route::post('/addSchedule/store',[App\Http\Controllers\ScheduleController::class,'add'])->name('addSchedule');

Route::get('/busTicket',[App\Http\Controllers\ScheduleController::class,'view'])->name('busTicket');

Route::get('/cancelSchedule',[App\Http\Controllers\ScheduleController::class,'view2'])->name('cancelSchedule');

Route::get('/deleteSchedule/{id}',[App\Http\Controllers\ScheduleController::class,'delete'])->name('deleteSchedule');

Route::get('/editSchedule/{id}',[App\Http\Controllers\ScheduleController::class,'edit'])->name('editSchedule');

Route::post('/updateSchedule',[App\Http\Controllers\ScheduleController::class,'update'])->name('updateSchedule');

Route::post('/searchSchedule',[App\Http\Controllers\ScheduleController::class,'searchSchedule'])->name('searchSchedule');

Route::get('/showSchedule/{id}',[App\Http\Controllers\ScheduleController::class,'showDetail'])->name('scheduleDetail');

Route::get('/showCart/{id}',[App\Http\Controllers\ScheduleController::class,'showCart'])->name('myCart');

Route::get('/showCart2/{id}',[App\Http\Controllers\ScheduleController::class,'showCart2'])->name('myCart2');

Route::get('/myTrip', [App\Http\Controllers\PaymentController::class, 'showOrder'])->name('myTrip');

Route::get('/checkBusTicketRecord', [App\Http\Controllers\PaymentController::class, 'showOrder2'])->name('checkBusTicketRecord');

Route::get('/myTrip2', [App\Http\Controllers\TngController::class, 'showOrder3'])->name('myTrip2');

Route::get('/checkBusTicketRecord2', [App\Http\Controllers\TngController::class, 'showOrder4'])->name('checkBusTicketRecord2');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::get('/index', function () {
    return view('index');
});

Route::post('/addProfile',[App\Http\Controllers\ProfileController::class,'add'])->name('addProfile');

Route::get('/userProfile',[App\Http\Controllers\ProfileController::class,'view'])->name('userProfile');

Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

Route::get('/deleteMyOrder/{id}',[App\Http\Controllers\PaymentController::class,'delete'])->name('deleteMyOrder');

Route::get('/deleteMyTng/{id}',[App\Http\Controllers\TngController::class,'delete'])->name('deleteMyTng');

Route::post('\addTng',[App\Http\Controllers\TngController::class,'add'])->name('addTng');

Route::post('/addHistory/store',[App\Http\Controllers\HistoryController::class,'add'])->name('addHistory');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});
});

Route::post('/addFeedback/store',[App\Http\Controllers\FeedbackController::class,'add'])->name('addFeedback');

Route::get('/feedback',[App\Http\Controllers\FeedbackController::class,'view'])->name('feedback');

Route::post('/addQr/store',[App\Http\Controllers\FeedbackController::class,'add2'])->name('addQr');

Route::get('/setting',[App\Http\Controllers\FeedbackController::class,'view2'])->name('setting');


Route::get('/setting/{id}',[App\Http\Controllers\FeedbackController::class,'edit'])->name('editQr');

Route::post('/updateQr',[App\Http\Controllers\FeedbackController::class,'update'])->name('updateQr');









