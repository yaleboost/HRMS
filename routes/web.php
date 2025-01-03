<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\admincontroller;


route::get('/',[employeecontroller::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[employeecontroller::class,'redirect']);
route::get('/vieweremployee',[admincontroller::class,'vieweremployee']);

route::POST('/registeremployee',[admincontroller::class,'registeremployee']);
route::get('/allemployee',[admincontroller::class,'allemployee']);


route::get('/deleteemployee/{id}',[admincontroller::class,'deleteemployee']);
route::get('/updateemployee/{id}',[admincontroller::class,'updateemployee']);

route::POST('/updateemployeeconirm/{id}',[admincontroller::class,'updateemployeeconirm']);

route::get('/viewscholarship',[admincontroller::class,'viewescholarship']);//for regstering purpose
route::POST('/addscholarship',[admincontroller::class,'addscholarship']);

route::get('/viewescholarship',[admincontroller::class,'viewscholarship']);//for display scholarship data
route::get('/deletescholarship/{id}',[admincontroller::class,'deletescholarship']);//deleting scholarship
 
route::get('/updatescholarship/{id}',[admincontroller::class,'updatescholarship']);//for feaching data and pass to front end
route::POST('/updatescholarshipconfirm/{id}',[admincontroller::class,'updatescholarshipconfirm']);//for real update scholarship

route::get('/viewsemester',[admincontroller::class,'viewesemester']);//for display semester data
route::POST('/addsemester',[admincontroller::class,'addsemester']);
route::get('/viewssemester',[admincontroller::class,'viewssemester']);//for display semester data
route::get('/deletesemester/{id}',[admincontroller::class,'deletesemester']);//deleting scholarship
route::get('/updatesemester/{id}',[admincontroller::class,'updatesemester']);//for feaching data and pass to front end
route::POST('/updatesemesterconfirm/{id}',[admincontroller::class,'updatesemesterconfirm']);//for real update semester

route::get('/viewdepartment',[admincontroller::class,'viewdepartment']);//for display semester data
route::POST('/adddepartment',[admincontroller::class,'adddepartment']);//for display semester data
route::get('/viewddepartment',[admincontroller::class,'viewddepartment']);
route::get('/deletedepartment/{id}',[admincontroller::class,'deletedepartment']);//deleting scholarship
route::get('/updatedepartment/{id}',[admincontroller::class,'updatedepartment']);//for feaching data and pass to front end
route::POST('/updatedepartmentconfirm/{id}',[admincontroller::class,'updatedepartmentconfirm']);//for real update semester



route::get('/checkmissingresult',[admincontroller::class,'checkmissingresult']);//for checking missing result



Route::get('/checkmissresult', [AdminController::class, 'checkMissingResults'])->name('admin.checkMissingResults');
Route::get('/u', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

Route::get('/failsemester', [AdminController::class, 'showFailedSemesters'])->name('semesters.failed');

Route::get('/failed', [AdminController::class, 'getFailedSemesters'])->name('semesters.failed');

 