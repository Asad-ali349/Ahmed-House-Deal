<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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



Route::controller(AdminController::class)->middleware(['auth:admin'])->group(
    function(){
        Route::post('/logout','logout');
        Route::get('/dashboard','dashboard');
        Route::get('/profile','profile');
        Route::get('/edit_profile/{user_id}','edit_profile');
        Route::post('/edit_profile','submit_edit_profile');
        Route::get('/change_password','change_password');
        Route::post('/change_password','submit_change_password');
        Route::get('/add_property','add_property');
        Route::post('/add_property','submit_add_property');
        Route::get('/add_property_gallery/{property_id}','add_property_gallery')->name('add_property_gallery');
        Route::post('/add_property_gallery','submit_add_property_gallery')->name('submit_add_property_gallery');
        Route::get('/add_property_doc/{property_id}','add_property_docs');
        Route::post('/add_property_doc','submit_add_property_docs');
        Route::get('/edit_property/{property_id}','edit_property')->name('edit_property');
        Route::post('/edit_property','submit_edit_property');
        Route::get('/edit_property_gallery/{property_id}','edit_property_gallery')->name('edit_property_gallery');
        Route::post('/edit_property_gallery','submit_edit_property_gallery')->name('submit_edit_property_gallery');
        Route::get('/edit_property_doc/{property_id}','edit_property_docs');
        Route::post('/edit_property_doc','submit_edit_property_docs');
        Route::get('/delete_gallery/{property_id}','delete_gallery');
        Route::get('/delete_doc/{property_id}','delete_doc');
        Route::get('/property_detail/{property_id}','property_detail');
        Route::get('/view_property','view_property');
        Route::get('/add_vendor','add_vendor');
        Route::post('/add_vendor','submit_add_vendor');
        Route::get('/view_vendor','view_vendor');
        Route::get('/vendor_detail/{vendor_id}','vendor_detail');
        Route::get('/edit_vendor/{vendor_id}','edit_vendor');
        Route::post('/edit_vendor','submit_edit_vendor');
        Route::get('/services','services');
        Route::post('/services','submit_add_services');
        Route::post('/edit_service','submit_edit_services');
        Route::get('/add_expense/{property_id}','add_expense');
        Route::post('/add_expense','submit_add_expense');
        Route::post('/add_expense_without_File','submit_add_expense_without_File');
        Route::get('/expense_detail/{expense_id}','expense_detail');
        Route::post('/add_expense_docs','add_expense_docs');
        Route::get('/edit_expense/{expense_id}','edit_expense');
        Route::post('/edit_expense','submit_edit_expense');
        Route::get('/delete_expense_doc/{expense_id}','delete_expense_doc');
        Route::get('/sell_property/{property_id}','sell_property');
        Route::post('/sell_property','submit_sell_property');
        Route::get('/view_fullpayment_properties','view_fullpayment_properties');
        Route::get('/view_lease_properties','view_lease_properties');
        Route::get('/sold_property_detail/{sold_property_id}','sold_property_detail')->name('sold_property_detail');
        Route::get('/accept_payment/{invoice_id}/{amount}/{sold_property_id}','accept_payment');
        Route::get('/delete_service/{service_id}','delete_service');
        Route::get('/delete_vendor/{vendor_id}','delete_vendor');
        Route::get('/delete_property/{property_id}','delete_property');
        Route::get('/delete_investor/{investor_id}','delete_investor');
        Route::get('/delete_investment/{investment_id}','delete_investment');
        Route::get('/cal_revenue','cal_revenue');
        Route::get('/add_investor','add_investor');
        Route::post('/add_investor','submit_add_investor');
        Route::get('/edit_investor/{investor_id}','edit_investor');
        Route::post('/edit_investor','submit_edit_investor');
        Route::get('/view_investors','view_investors');
        Route::get('/investor_detail/{investor_id}','investor_detail');
    }
);
