<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\WarentyCardController;



//------------------  ADMIN CONTROLLER ----------------- //
Route::get('/dashbord',[AdminController::class,'dashbord'])->name('admin.dashbord');

//------------------------- WARENTY CARD CONTROLLER ----------------- //
Route::get('/warentycard/index',[WarentyCardController::class,'index'])->name('warentycard.index');
Route::get('/warentycard/create',[WarentyCardController::class,'warentycard'])->name('warentycard.add');
Route::post('/warentycard/store',[WarentyCardController::class,'store'])->name('warentycard.store');
Route::get('/warentycard/delete/{id}',[WarentyCardController::class,'delete'])->name('warentycard.delete');
Route::get('/warentycard/show/{id}',[WarentyCardController::class,'show'])->name('warentycard.show');


//-------------------  COMPLAIN CONTROLLER ------------------//
Route::get('/complain/index',[ComplainController::class,'index'])->name('complain.index');
Route::get('/complain/create',[ComplainController::class,'complain'])->name('complain.add');
Route::post('/complain/store',[ComplainController::class,'store'])->name('complain.store');
Route::get('/complain/delete/{id}',[ComplainController::class,'delete'])->name('complain.dalete');

//------------------ USER REGISTER CONTROLLER -------------//

Route::get('/userregister/index',[UserRegisterController::class,'index'])->name('userregister.index');
Route::get('/userregister/store',[UserRegisterController::class,'userregister'])->name('userregister.add');
Route::post('/userregister/store',[UserRegisterController::class,'store'])->name('userregister.store');
Route::get('/userregister/delete/{id}',[UserRegisterController::class,'delete'])->name('userregister.delete');
Route::get('/userregister/show/{id}',[UserRegisterController::class,'show'])->name('userregister.show');



// --------------------FRONTEND -- CONTROLLER----------------//

// Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/complain', [HomeController::class, 'complain'])->name('complain');
Route::get('/user_rec', [HomeController::class, 'user_rec'])->name('user_rec');
Route::get('/inqury', [HomeController::class, 'inqury'])->name('inqury');
Route::get('/varranty', [HomeController::class, 'varranty'])->name('varranty');
