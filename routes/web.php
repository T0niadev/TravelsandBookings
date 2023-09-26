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
Route::get('/', function () {
    return view('web.main');
});

Route::get('/mighty-admin', function () {


    return view('auth.login');
});

//Auth


Route::get('mighty-admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('mighty-admin', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'LoginFOrm']);


// Registration Routes...
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm']);
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes...

Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm']);
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm']);
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset']);
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('dashboard', function(){

		return view('/dashboard');
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [App\Http\Controllers\Admin\ToursController::class, 'index']);
Route::get('/category/create', [App\Http\Controllers\Admin\ToursController::class, 'create']);
Route::post('/category', [App\Http\Controllers\Admin\ToursController::class, 'store']);
Route::get('/category/{category}/edit', [App\Http\Controllers\Admin\ToursController::class, 'edit']);
Route::patch('/category/{category}/update', [App\Http\Controllers\Admin\ToursController::class, 'update']);



Route::get('/blogs', [App\Http\Controllers\Admin\BlogsController::class, 'index']);
Route::get('/blogs/create', [App\Http\Controllers\Admin\BlogsController::class, 'create']);
Route::post('/blogs', [App\Http\Controllers\Admin\BlogsController::class, 'store']);
Route::get('/blogs/{blogs}/edit', [App\Http\Controllers\Admin\BlogsController::class, 'edit']);
Route::post('/blogs/{blogs}/update', [App\Http\Controllers\Admin\BlogsController::class, 'update']);
Route::get('/blogs/{blogs}/show', [App\Http\Controllers\Admin\BlogsController::class, 'show']);
Route::post('/blogs/destroy/{blogs}', [App\Http\Controllers\Admin\BlogsController::class, 'destroy']);
// Route::get('/blogs/{blogs}/post', 'Admin\BlogsController@post');

Route::get('/packages', [App\Http\Controllers\Admin\TourPackagesController::class, 'index']);
Route::get('/packages/create', [App\Http\Controllers\Admin\TourPackagesController::class, 'create']);
Route::post('/packages', [App\Http\Controllers\Admin\TourPackagesController::class, 'store']);
Route::get('/packages/{packages}/edit', [App\Http\Controllers\Admin\TourPackagesController::class, 'edit']);
Route::post('/packages/{packages}/update',[App\Http\Controllers\Admin\TourPackagesController::class, 'update']);
Route::get('/packages/{packages}/show', [App\Http\Controllers\Admin\TourPackagesController::class, 'show']);
Route::post('/packages/{packages}/destroy', [App\Http\Controllers\Admin\TourPackagesController::class, 'destroy']);


Route::get('/gallery/{gallery}', [App\Http\Controllers\Admin\TourPackagesController::class, 'gallery']);
Route::get('/gallery/{gallery}/addnew', [App\Http\Controllers\Admin\TourPackagesController::class, 'addnew']);
Route::post('/gallery/{packages}', [App\Http\Controllers\Admin\TourPackagesController::class, 'upload']);
Route::get('/deletegallery/{id}', [App\Http\Controllers\Admin\TourPackagesController::class, 'deleteattachment']);


Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\Admin\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\Admin\UsersController::class, 'store']);
Route::get('/users/{users}/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
Route::post('/users/{users}/update', [App\Http\Controllers\Admin\UsersController::class, 'update']);
Route::get('/users/{users}/profile', [App\Http\Controllers\Admin\UsersController::class, 'profile']);
Route::post('/users/{users}/upgrade', [App\Http\Controllers\Admin\UsersController::class, 'upgrade']);
Route::get('/users/{users}/show', [App\Http\Controllers\Admin\UsersController::class, 'show']);
Route::post('/users/{users}/destory', [App\Http\Controllers\Admin\UsersController::class, 'destroy']);


Route::get('/usersetting', [App\Http\Controllers\Admin\UsersettingController::class, 'setting']);
Route::post('/usersetting/update', [App\Http\Controllers\Admin\UsersettingController::class, 'update']);


Route::get('/ourteam',[App\Http\Controllers\Web\OurteamControllers::class, 'team']);
Route::get('/admin/team', [App\Http\Controllers\Web\OurteamControllers::class, 'index']);
Route::get('/ourteam/create', [App\Http\Controllers\Web\OurteamControllers::class, 'create']);
Route::post('/admin/team', [App\Http\Controllers\Web\OurteamControllers::class, 'store']);
Route::get('/ourteam/edit/{ourteam}', [App\Http\Controllers\Web\OurteamControllers::class, 'edit']);
Route::post('/ourteam/update/{ourteam}', [App\Http\Controllers\Web\OurteamControllers::class, 'update']);
Route::get('/ourteam/{ourteam}/show', [App\Http\Controllers\Web\OurteamControllers::class, 'show']);
Route::post('/ourteam/{ourteam}/destroy', [App\Http\Controllers\Web\OurteamControllers::class, 'destroy']);



Route::get('/membercategory', [App\Http\Controllers\Admin\MemberCategoriesControllers::class, 'index']);
Route::get('/membercategory/create', [App\Http\Controllers\Admin\MemberCategoriesControllers::class, 'create']);
Route::get('/membercategory/{membercategory}/edit', [App\Http\Controllers\Admin\MemberCategoriesControllers::class, 'edit']);
Route::post('/membercategory', [App\Http\Controllers\Admin\MemberCategoriesControllers::class, 'store']);
Route::post('/membercategory/{membercategory}', [App\Http\Controllers\Admin\MemberCategoriesControllers::class, 'update']);


Route::get('/locations', [App\Http\Controllers\Admin\LocationsController::class, 'index']);
Route::get('/locations/create', [App\Http\Controllers\Admin\LocationsController::class, 'create']);
Route::post('/locations', [App\Http\Controllers\Admin\LocationsController::class, 'store']);
Route::get('/locations/{locations}/edit', [App\Http\Controllers\Admin\LocationsController::class, 'edit']);
Route::post('/locations/{locations}/update', [App\Http\Controllers\Admin\LocationsController::class, 'update']);


Route::get('/schedules/{schedules}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'index']);
Route::get('/schedules/{schedules}/create', [App\Http\Controllers\Admin\TourSchedulesController::class, 'create']);
Route::post('/schedules/{packages}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'store']);
Route::get('/schedules/edit/{schedules}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'edit']);
Route::post('/schedules/update/{schedules}',[App\Http\Controllers\Admin\TourSchedulesController::class, 'update']);
Route::get('/schedules/show/{schedules}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'show']);
Route::get('/schedules/showdel/{schedules}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'showdel']);
Route::post('/schedules/destroy/{schedules}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'destroy']);
Route::get('/deleteimage/{id}', [App\Http\Controllers\Admin\TourSchedulesController::class, 'deleteattachment']);



Route::get('/tourleaders', [App\Http\Controllers\Admin\TourLeadersController::class, 'index']);
Route::get('/tourleaders/create', [App\Http\Controllers\Admin\TourLeadersController::class, 'create']);
Route::post('/tourleaders', [App\Http\Controllers\Admin\TourLeadersController::class, 'store']);
Route::get('/tourleaders/{tourleaders}', [App\Http\Controllers\Admin\TourLeadersController::class, 'edit']);
Route::post('/tourleaders/{tourleaders}/update', [App\Http\Controllers\Admin\TourLeadersController::class, 'update']);
Route::get('/tourleaders/show/{tourleaders}', [App\Http\Controllers\Admin\TourLeadersController::class, 'show']);
Route::post('/tourleaders/destroy/{tourleaders}', [App\Http\Controllers\Admin\TourLeadersController::class, 'destroy']);



Route::get('/admin/destinations', [App\Http\Controllers\Admin\DestinationsController::class, 'index']);
Route::get('/admin/destinations/create', [App\Http\Controllers\Admin\DestinationsController::class, 'create']);
Route::post('/admin/destinations', [App\Http\Controllers\Admin\DestinationsController::class, 'store']);
Route::get('/admin/destinations/{destinations}', [App\Http\Controllers\Admin\DestinationsController::class, 'edit']);
Route::post('/admin/destinations/{destinations}/update', [App\Http\Controllers\Admin\DestinationsController::class, 'update']);
Route::get('/admin/destinations/{destinations}/show', [App\Http\Controllers\Admin\DestinationsController::class, 'show']);
Route::post('/admin/destinations/{destinations}/destroy', [App\Http\Controllers\Admin\DestinationsController::class, 'destroy']);


Route::get('/admin/destinations-gallery/{destinations}', [App\Http\Controllers\Admin\DestinationsController::class, 'gallery']);
Route::get('/admin/destinations-gallery/{destinations}/addnew', [App\Http\Controllers\Admin\DestinationsController::class, 'addnew']);
Route::post('/admin/destinations-gallery/{destinations}', [App\Http\Controllers\Admin\DestinationsController::class, 'upload']);
Route::get('/removeimg/{id}', [App\Http\Controllers\Admin\DestinationsController::class, 'deleteattachment']);


Route::get('/testimonial', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'index']);
Route::get('/testimonial/create', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'create']);
Route::post('/testimonial', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'store']);
Route::get('/testimonial/edit/{testimonial}', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'edit']);
Route::post('/testimonial/update/{testimonial}', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'update']);
Route::get('/testimonial/show/{testimonial}', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'show']);
Route::post('/testimonial/destroy/{testmonial}', [App\Http\Controllers\Admin\TestimonialsControllers::class, 'destroy']);


// frontend
Route::get('/',[App\Http\Controllers\Web\HomePageController::class, 'index']);
// Review
Route::get('/admin/reviews', [App\Http\Controllers\Web\ReviewControllers::class, 'index'])->middleware('auth');

Route::get('/tour-package', [App\Http\Controllers\Web\PackageControllers::class, 'index']);
Route::get('/tour-details/{id}', [App\Http\Controllers\Web\TourdetailsController::class, 'index']);
Route::post('/tour-details/{id}/review', [App\Http\Controllers\Web\ReviewControllers::class, 'store']);
Route::get('/destinations-details/{id}', [App\Http\Controllers\Web\DestinationsdetailsController::class, 'index']);

Route::get('/destination', [App\Http\Controllers\Web\TourDestinationControllers::class, 'index']);

Route::get('/blog', [App\Http\Controllers\Web\TourBlogsControllers::class,'index']);

Route::get('/blog-inner/{id}', [App\Http\Controllers\Web\BlogsdetailsControllers::class, 'index']);

// booking
Route::get('/booking', [App\Http\Controllers\Web\BookingControllers::class, 'index'])->middleware('auth');
Route::get('/booking/{id}', [App\Http\Controllers\Web\BookingControllers::class, 'booking']);
Route::post('/booking/store', [App\Http\Controllers\Web\BookingControllers::class, 'store']);
Route::get('/booking/edit/{id}',[App\Http\Controllers\Web\BookingControllers::class, 'edit'])->middleware('auth');
Route::post('/booking/{id}/update/',[App\Http\Controllers\Web\BookingControllers::class, 'update'])->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\Web\ContactusControllers::class, 'index'])->middleware('auth');
Route::get('/contact-us', [App\Http\Controllers\Web\ContactusControllers::class, 'create']);
Route::post('/contact-us/store', [App\Http\Controllers\Web\ContactusControllers::class, 'store']);

Route::get('/about-us', function() {

    return view('web.about-us');

});



