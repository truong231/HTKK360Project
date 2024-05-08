<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controller\AdminController;
use App\Http\Controller\CartController;
use App\Http\Controller\HomeController;
use App\Http\Controller\UserController;
use App\Http\Controller\ProductController;

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
Route::get('/dang-ky', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::post('/dang-ky', 'App\Http\Controllers\UserController@store')->name('users.post');

Route::get('/dang-nhap', 'App\Http\Controllers\UserController@showlogin')->name('users.showlogin');
Route::post('/dang-nhap', 'App\Http\Controllers\UserController@login')->name('users.login');

Route::get('/login-facebook', 'App\Http\Controllers\UserController@login_facebook');
Route::get('/dang-nhap/callback', 'App\Http\Controllers\UserController@callback_facebook');

Route::get('/dang-xuat', 'App\Http\Controllers\UserController@logout');

Route::get('/edit-user-{id}','App\Http\Controllers\UserController@edit_user');
Route::post('/update-user-{id}','App\Http\Controllers\UserController@update_user');
Route::get('/chose-warehouse-1-{id}','App\Http\Controllers\UserController@chose_warehouse1');
Route::get('/chose-warehouse-2-{id}','App\Http\Controllers\UserController@chose_warehouse2');
Route::get('/chose-warehouse-3-{id}','App\Http\Controllers\UserController@chose_warehouse3');
Route::get('/chose-warehouse-4-{id}','App\Http\Controllers\UserController@chose_warehouse4');

Route::get('/user', 'App\Http\Controllers\UserController@homeuser')->name('users.homeuser');
Route::get('/don-hang', 'App\Http\Controllers\UserController@homeorder')->name('users.homeorder');
Route::get('/user-dashboard', 'App\Http\Controllers\UserController@dashboard');
Route::get('/don-hang-tao', 'App\Http\Controllers\UserController@addorder');

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

Route::get('/dich-vu','App\Http\Controllers\HomeController@service');

Route::get('/dich-vu-dh','App\Http\Controllers\HomeController@servicemenu');
Route::get('/dich-vu-dh','App\Http\Controllers\HomeController@service1');
Route::get('/dich-vu-dh-van-chuyen','App\Http\Controllers\HomeController@service2');
Route::get('/dich-vu-dh-ghep-nhom','App\Http\Controllers\HomeController@service3');
Route::get('/dich-vu-dh-doi-chuyen-tien','App\Http\Controllers\HomeController@service4');
Route::get('/dich-vu-dh-kiem-dem','App\Http\Controllers\HomeController@service5');

Route::get('/bang-gia','App\Http\Controllers\HomeController@price');
Route::get('/bang-gia-ky-gui','App\Http\Controllers\HomeController@price2');
Route::get('/bang-gia-quang-chau','App\Http\Controllers\HomeController@price3');

Route::get('/tra-cuoc','App\Http\Controllers\HomeController@checkfares');

Route::get('/huong-dan','App\Http\Controllers\HomeController@guide');
Route::get('/huong-dan-don-hang','App\Http\Controllers\HomeController@orderguide');
Route::get('/huong-dan-don-hang-tao','App\Http\Controllers\HomeController@orderguide1');
Route::get('/huong-dan-don-hang-taobao-1688-tmall-alibaba','App\Http\Controllers\HomeController@orderguide2');
Route::get('/huong-dan-don-hang-cong-cu-dat-hang','App\Http\Controllers\HomeController@orderguide3');
Route::get('/huong-dan-don-hang-dang-ky-dang-nhap-tai-khoan','App\Http\Controllers\HomeController@orderguide4');
Route::get('/huong-dan-don-hang-ky-gui-hang-trung-quoc','App\Http\Controllers\HomeController@orderguide5');
Route::get('/huong-dan-don-hang-nap-tien-vao-tai-khoan-khach-hang-cua-thuong-do','App\Http\Controllers\HomeController@orderguide6');

Route::get('/cau-hoi-thuong-gap-td','App\Http\Controllers\HomeController@policy');
Route::get('/chinh-sach','App\Http\Controllers\HomeController@policies');
Route::get('/chinh-sach-giai-quyet-khieu-nai-0','App\Http\Controllers\HomeController@policy2');
Route::get('/quy-dinh-ve-ky-gui-hang','App\Http\Controllers\HomeController@policy3');
Route::get('/chinh-sach-bao-mat-thong-tin-thanh-vien','App\Http\Controllers\HomeController@policy4');
Route::get('/dat-hang-trong-vong-12-gio','App\Http\Controllers\HomeController@policy5');
Route::get('/chinh-sach-ct','App\Http\Controllers\HomeController@policy6');
Route::get('/chinh-sach-ct-bao-hanh','App\Http\Controllers\HomeController@policy7');
Route::get('/chinh-sach-ct-bao-mat-thong-tin-ca-nhan','App\Http\Controllers\HomeController@policy8');
Route::get('/chinh-sach-ct-va-quy-dinh-chung','App\Http\Controllers\HomeController@policy9');
Route::get('/chinh-sach-ct-doi-tra-va-hoan-tien','App\Http\Controllers\HomeController@policy10');
Route::get('/chinh-sach-ct-giai-quyet-tranh-chap','App\Http\Controllers\HomeController@policy11');
Route::get('/hinh-thuc-thanh-toan','App\Http\Controllers\HomeController@policy12');
Route::get('/hinh-thuc-giao-nhan','App\Http\Controllers\HomeController@policy13');


Route::get('/tin-tuc','App\Http\Controllers\HomeController@news');

Route::get('/su-kien','App\Http\Controllers\HomeController@events');

Route::get('/gioi-thieu','App\Http\Controllers\HomeController@introduce');

Route::get('/gioi-thieu','App\Http\Controllers\HomeController@introduce');

//Product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

//Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
//Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product','App\Http\Controllers\ProductController@update_product');

Route::get('/orders','App\Http\Controllers\ProductController@orders');

Route::post('/add-cart','App\Http\Controllers\CartController@add')->name('addCart');;
//Route::get('/cart','App\Http\Controllers\CartController@index');

//Cart
//Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
//Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');

Route::get('/quen-mat-khau','MailController@quen_mat_khau');
