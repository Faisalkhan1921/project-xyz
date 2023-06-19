<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminCategoryController;
use App\Http\Controllers\Backend\AdminUserRoleController;
use App\Http\Controllers\Backend\BloodGroupController;
use App\Http\Controllers\Backend\CollegeboardController;
use App\Http\Controllers\Backend\DistController;
use App\Http\Controllers\Backend\PassyearController;
use App\Http\Controllers\Backend\SportsController;
use App\Http\Controllers\Frontend\PersonalInfoController;
use App\Http\Controllers\Frontend\StudentDocController;
use App\Http\Controllers\Frontend\StudentProfileController;
use App\Http\Controllers\Frontend\UserbankChalanController;
use App\Http\Controllers\Frontend\UserEduInfoController;

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
    return view('Auth.login');
});

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

//logout
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::prefix('profile')->group(function(){

    Route::get('admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
    Route::get('admin/view',[AdminProfile::class,'AdminProfile'])->name('admin.profile');
    Route::get('admin/edit/view',[AdminProfile::class,'ProfileEditView'])->name('edit.profile.pic');
    Route::post('admin/store/profile_image',[AdminProfile::class,'storeprofile'])->name('store.profile_image');
    Route::get('admin/change/password/view',[AdminProfile::class,'ChangePasswordViwe'])->name('change.password.view');
    Route::post('admin/update/password',[AdminProfile::class,'UpdatePassword'] )->name('update.password');
        
});

// Route::prefix('/categories')->group(function(){

// Route::get('/manage',[AdminCategoryController::class,'index'])->name('manage.categories');
    
// });


Route::prefix('/districts')->group(function(){
    //manage districts
Route::get('manage',[DistController::class,'store'])->name('manage.dist');
Route::post('store',[DistController::class,'storedist'])->name('store.dist.data');
Route::get('edit',[DistController::class,'storedist'])->name('edit.dist');
Route::get('delete',[DistController::class,'storedist'])->name('delete.dist');

});


Route::prefix('/sports')->group(function(){
    //manage sports
Route::get('manage',[SportsController::class,'index'])->name('manage.sports');
Route::post('store',[SportsController::class,'store'])->name('store.sports');
Route::get('edit',[SportsController::class,'index'])->name('edit.sports');
Route::get('delete',[SportsController::class,'index'])->name('delete.sports');

});

Route::prefix('/blood')->group(function(){
    //manage blood
Route::get('manage',[BloodGroupController::class,'index'])->name('manage.blood');
Route::post('store',[BloodGroupController::class,'store'])->name('store.blood');
Route::get('edit',[BloodGroupController::class,'index'])->name('edit.blood');
Route::get('delete',[BloodGroupController::class,'index'])->name('delete.blood');

});

Route::prefix('/Boards')->group(function(){
    //manage boards 
Route::get('manage',[CollegeboardController::class,'index'])->name('manage.boards');
Route::post('store',[CollegeboardController::class,'store'])->name('store.board');
Route::get('edit',[CollegeboardController::class,'edit'])->name('edit.boards');
Route::get('delete',[CollegeboardController::class,'delete'])->name('delete.boards');

});


Route::prefix('/passingyear')->group(function(){
    // Passing year 
Route::get('manage',[PassyearController::class,'index'])->name('manage.passingyear');
Route::post('store',[PassyearController::class,'storepassyear'])->name('store.passingyear');
Route::get('edit',[PassyearController::class,'edit'])->name('edit.passingyear');
Route::get('delete',[PassyearController::class,'delete'])->name('delete.passingyear');

});

Route::prefix('/categories')->group(function(){
    //manage categories and sub categories
Route::get('/manage',[AdminCategoryController::class,'index'])->name('manage.categories');
Route::post('/store',[AdminCategoryController::class,'store'])->name('store.cat.data');
Route::get('/edit/{id}',[AdminCategoryController::class,'edit_index'])->name('edit.catgory');
Route::post('/update/{id}',[AdminCategoryController::class,'update_index'])->name('update.cat.data');
Route::get('/delete/{id}',[AdminCategoryController::class,'delete_index'])->name('delete.cat');

});

Route::prefix('/sub_categories')->group(function(){
    Route::get('/manage',[AdminCategoryController::class,'index_subcat'])->name('manage.sub_cat');
    Route::post('/store',[AdminCategoryController::class,'store_subcat'])->name('store.subcat.data');
      
});

Route::prefix('/adminuserrole')->group(function(){
     Route::get('/manage',[AdminUserRoleController::class,'index'])->name('manage.admin.user.role'); 
});




Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('frontend.user_index');
})->name('dashboard');


//user part
Route::get('/stident/bank/chalan',[UserbankChalanController::class,'index'])->name('user.bank.chalan');
Route::get('/gen/challan',[UserbankChalanController::class,'generatechalan'])->name('chalan.api');

//user basic info 
Route::get('/student/basic/info',[PersonalInfoController::class,'PersInfo'])->name('user.basic.info');
Route::post('/student/Basic/Info/store',[PersonalInfoController::class,'store'])->name('student.store.persinfo');

//user edu info
Route::get('/student/edu/info',[UserEduInfoController::class,'eduinfo'])->name('user.edu.info');
Route::post('/student/edu/info/store/ssc',[UserEduInfoController::class,'store'])->name('store.matric.records');
Route::post('/student/edu/info/store/hsc',[UserEduInfoController::class,'storehsc'])->name('store.hsc.records');


//upload profile information
Route::get('student/profile/image',[StudentProfileController::class,'userprofileinfo'])->name('user.profile.info');
Route::post('upload/profile/image',[StudentProfileController::class,'stu_img_upload'])->name('upload.stu.img');

//user document info
Route::get('/student/document/upload',[StudentDocController::class,'index'])->name('user.documents.info');
Route::post('/student/domicile/upload',[StudentDocController::class,'storedomicile'])->name('add.stu.domicile.img');
Route::post('/student/prc/upload',[StudentDocController::class,'storeprcs'])->name('add.stu.prc.img');
Route::post('/student/cnic/upload',[StudentDocController::class,'storecnic'])->name('add.stu.cnic.img');
Route::post('/student/ssc/upload',[StudentDocController::class,'storessc'])->name('add.stu.ssc.img');
Route::post('/student/hsc/upload',[StudentDocController::class,'storehsc'])->name('add.stu.hsc.img');