<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('setlocale/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return redirect()->back();
});
// http://localhost/setlocale/en

Route::group(['middleware' => 'setlocale'], function () {

    Route::get('/', 'HomeController@index')->name('HomePage');
    Route::get('/expos/{id?}', 'HomeController@expos')->name('Expos');
    Route::get('/expo/{id}', 'HomeController@expo')->name('Expo');
    Route::get('/map/{id}/{map_id}', 'HomeController@expoMap')->name('ExpoMap');
    Route::post('/expo/{id}', 'HomeController@expoComment')->name('ExpoComment');
    Route::get('/booth/{id}', 'HomeController@booth')->name('Booth');
    Route::get('/news', 'HomeController@news')->name('News');
    Route::get('/post/{id}', 'HomeController@post')->name('Post');
    Route::get('/page/{id}', 'HomeController@page')->name('Page');

    Route::get('/calender', 'HomeController@calender')->name('Calender');
    Route::get('/companies/{id?}', 'HomeController@companies')->name('Companies');
    Route::get('/company/{id}', 'HomeController@company')->name('Company');
    Route::get('/history', 'HomeController@history')->name('History');
    Route::get('/about', 'HomeController@about')->name('About');
    Route::get('/contact', 'HomeController@contact')->name('Contact');

    Auth::routes();

    Route::get('/home', 'Admin\DashboardController@home')->name('home');
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');

    //-- Admin

    Route::get('/admin/admin', 'Admin\AdminController@index')->name('adminDashboard');

    Route::get('/admin/users', 'Admin\AdminController@users')->name('userList');
    Route::delete('/admin/users/{user}', 'Admin\AdminController@deleteUsers')->name('deleteUsers');
    Route::get('/admin/invoices', 'Admin\AdminController@invoices')->name('allInvoices');
    // Route::get('/admin/categories', 'Admin\CategoryController@index')->name('categoryList');
    Route::get('/admin/tickets', 'Admin\AdminController@tickets')->name('tickets');
    Route::delete('/admin/tickets/{id}', 'Admin\AdminController@closeTicket')->name('closeTicket');
    Route::get('/admin/answer-ticket/{id}', 'Admin\AdminController@answerTicket')->name('answerTicket');
    Route::post('/admin/answer-ticket/{id}', 'Admin\AdminController@answeringTicket')->name('answeringTicket');

    Route::get('/admin/counter', 'Admin\AdminController@counter')->name('Counter');
    Route::post('/admin/counter/{id?}', 'Admin\AdminController@updateCounter')->name('updateCounter');

    Route::get('/admin/setting', 'Admin\SettingController@index')->name('setting');
    Route::post('/admin/setting/tel', 'Admin\SettingController@updateTel')->name('updateTel');
    Route::post('/admin/setting/address', 'Admin\SettingController@updateAddress')->name('updateAddress');
    Route::post('/admin/setting/logo', 'Admin\SettingController@updateLogo')->name('updateLogo');
    Route::post('/admin/setting/footer', 'Admin\SettingController@updateFooter')->name('updateFooter');
    Route::post('/admin/setting/exhibitor-benefit', 'Admin\SettingController@exhibitorBenefit')->name('exhibitorBenefit');
    Route::post('/admin/setting/visitor-benefit', 'Admin\SettingController@visitorBenefit')->name('visitorBenefit');
    Route::post('/admin/setting/social-network', 'Admin\SettingController@socialNetwork')->name('socialNetwork');

    Route::resources(
        [
            '/admin/expo' => 'Admin\ExpoController',
            '/admin/booth' => 'Admin\BoothController',
            '/admin/category' => 'Admin\CategoryController',
            '/admin/expo-category' => 'Admin\ExpoCategoryController',
            '/admin/package' => 'Admin\PackageController',
            '/admin/expo-package' => 'Admin\ExpoPackageController',
            '/admin/ticket' => 'Admin\TicketController',

            '/admin/slider' => 'Admin\SliderController',
            '/admin/post' => 'Admin\PostController',
            '/admin/page' => 'Admin\PageController',
            '/admin/comment' => 'Admin\CommentController',
            '/admin/brand' => 'Admin\BrandController',
        ]
    );

    Route::get('/admin/profile', 'Admin\ProfileController@index')->name('Profile');


    Route::get('admin/expo-comment/{id}', 'Admin\ExpoController@expoComment')->name('expoComment');
    Route::delete('admin/expo-comment/{id}', 'Admin\ExpoController@deleteComment')->name('deleteComment');
    Route::post('admin/expo-comment/{id}', 'Admin\ExpoController@acceptComment')->name('acceptComment');

    Route::get('admin/expo-image/{id}', 'Admin\ExpoController@expoImage')->name('expoImage');
    Route::post('admin/expo-image/{id}', 'Admin\ExpoController@addImage')->name('addImage');
    Route::delete('admin/expo-image/{id}', 'Admin\ExpoController@deleteImage')->name('deleteImage');

    Route::get('admin/expo-admin/{id}', 'Admin\ExpoController@expoAdmin')->name('expoAdmin');
    Route::post('admin/expo-admin/{id}', 'Admin\ExpoController@boothConfirm')->name('boothConfirm');
    Route::get('admin/expo-admin/booth_location/{id}', 'Admin\ExpoController@changeBoothLoaction')->name('changeBoothLoaction');
    Route::post('admin/expo-admin/booth_location/{id}', 'Admin\ExpoController@changingBoothLoaction')->name('changingBoothLoaction');

    //-- Exhibitor
    Route::get('/admin/profile', 'Admin\ProfileController@index')->name('Profile');
    Route::post('/admin/profile', 'Admin\ProfileController@store')->name('updateProfile');

    Route::get('/admin/user-category', 'Admin\ProfileController@yourCategory')->name('yourCategory');
    Route::get('/admin/user-category/choose-package', 'Admin\ProfileController@choosePackage')->name('choosePackage');
    Route::post('/admin/user-category/choose-category', 'Admin\ProfileController@chooseCategory')->name('chooseCategory');
    Route::post('/admin/user-category/store', 'Admin\ProfileController@storeCategory')->name('storeCategory');
    //Route::post('/admin/user-category/bank-page', 'Admin\ProfileController@boughtCategoryBank')->name('boughtCategoryBank');
    // Route::post('/admin/user-category/buy-category', 'Admin\ProfileController@boughtCategory')->name('boughtCategory');

    Route::post('/admin/booth/choose-package', 'Admin\BoothController@choosePackage')->name('choosePackage');
    Route::post('/admin/booth/choose-expo', 'Admin\BoothController@chooseExpo')->name('chooseExpo');
    Route::post('/admin/booth/booth-location/{map_id}', 'Admin\BoothController@booth_location')->name('chooseExpo');
    Route::delete('admin/booth/image/{image}', 'Admin\BoothController@deleteBoothImage')->name('deleteBoothImage');

    Route::get('/admin/user-package', 'Admin\UserPackageController@yourPackage')->name('yourPackage');
    Route::get('/admin/user-package/buy-package', 'Admin\UserPackageController@buyPackage')->name('buyPackage');
    Route::post('/admin/user-package/bank-page', 'Admin\UserPackageController@boughtPackageBank')->name('boughtPackageBank');
    Route::post('/admin/user-package/buy-package', 'Admin\UserPackageController@boughtPackage')->name('boughtPackage');

    Route::get('/admin/user-expo-package', 'Admin\UserExpoPackageController@yourPackage')->name('yourExpoPackage');
    Route::get('/admin/user-expo-package/buy-package', 'Admin\UserExpoPackageController@buyPackage')->name('buyExpoPackage');
    Route::post('/admin/user-expo-package/bank-page', 'Admin\UserExpoPackageController@boughtPackageBank')->name('boughtExpoPackageBank');
    Route::post('/admin/user-expo-package/buy-package', 'Admin\UserExpoPackageController@boughtPackage')->name('boughtExpoPackage');

    Route::get('/admin/your-invoice', 'Admin\DashboardController@yourInvoices')->name('yourInvoices');

    Route::post('/admin/expo-history', 'Admin\ExpoController@expoHistory')->name('expoHistory');
});
