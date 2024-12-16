<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TawaranSpesialController;
use App\Http\Controllers\TravelBlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AdminPesananController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminLaporkanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\EnsureRoleIsAdmin;
use App\Http\Controllers\LogoutController;

Route::get('/beranda', [BerandaController::class, "index"])->name('beranda');
Route::get('/tentangkami',[TentangKamiController::class,"index"])->name('tentangkami');
Route::get('/tawaranspesial',[TawaranSpesialController::class,"index"])->name('tawaranspesial');
Route::get('/tawaranspesial/hotel/{id}', [TawaranSpesialController::class,"showhotel"])->name('tawaranspesial.hotel');
Route::get('/tawaranspesial/guide/{id}', [TawaranSpesialController::class,"showguide"])->name('tawaranspesial.guide');
Route::get('/tawaranspesial/paket/{id}', [TawaranSpesialController::class,"showpaket"])->name('tawaranspesial.paket');
Route::get('/tawaranspesial/hotel/{id}/pesan', [TawaranSpesialController::class,"edithotel"])->name('tawaranspesial.hotel.pesan');
Route::get('/tawaranspesial/paket/{id}/pesan', [TawaranSpesialController::class,"editpaket"])->name('tawaranspesial.paket.pesan');
Route::get('/travelblog',[TravelBlogController::class,"index"])->name('travelblog');
Route::get('/login',[LoginController::class,"index"])->name('login');
Route::post('/login',[LoginController::class,"authenticate"])->name('authenticate');
Route::post('/logout',[LogoutController::class,"logout"])->name('logout');
Route::post('/register',[RegistrasiController::class,"register"])->name('registeruser');
Route::get('/register',[RegistrasiController::class,"index"])->name('register');
Route::get('/travelblog/{id}',[TravelBlogController::class,"show"])->name('travelblog.telusuri');

Route::middleware([EnsureRoleIsAdmin::class])->group(function(){
    Route::get('/admindashboard',[AdminDashboardController::class,"index"])->name('admin.dashboard');
    Route::get('/admindashboard/datahotel',[AdminDashboardController::class,"showsave"])->name('savedatahotel');
    Route::get('/admindashboard/guide',[AdminDashboardController::class,"indexadminguide"])->name('adminguide');
    Route::get('/admindashboard/datapakeet',[AdminDashboardController::class,"showsaveadminguide"])->name('saveadminguide');
    
    Route::get('/adminpesanan',[AdminPesananController::class,"index"])->name('admin.pesanan');
    Route::get('/adminprofile',[AdminProfileController::class,"index"])->name('admin.profile');
    Route::get('/adminprofile/{id}',[AdminProfileController::class,"indexedit"])->name('indexedit');
    Route::get('/detailadmindashboard',[AdminDashboardController::class,"show"])->name('admindashboard.detail');

    Route::get('/adminlaporkan',[AdminLaporkanController::class,"index"])->name('admin.laporkan');
    Route::get('/superadminmember',[MemberController::class,"index"])->name('superadmin.member');
    Route::get('/deletemember/{id}',[MemberController::class,"indexdelete"])->name('deletemember');
    Route::get('/deletepesananhotel/{id}',[AdminPesananController::class,"showdeletepesananhotel"])->name('deletepesananhotel');
    Route::get('/deletepesananpaket/{id}',[AdminPesananController::class,"showdeletepesananpaket"])->name('deletepesananpaket');
    Route::get('/superadminblog',[BlogController::class,"index"])->name('superadmin.blog');
    Route::get('/superadminblog/savedata',[BlogController::class,"showsavedata"])->name('savedatablog');
    Route::get('/detailsuperadminblog',[BlogController::class,"show"])->name('superadmin.blog.detail');
    Route::get('/admindashboardhotel/{id}',[AdminDashboardController::class,"showtambah"])->name('admin.dashboard.villadetail');
    Route::get('/admindashboardguide/{id}',[AdminDashboardController::class,"showtambahadminguide"])->name('admin.dashboard.guidedetail');
    
});

