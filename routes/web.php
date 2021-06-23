<?php

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
Route::pattern('domain', '(www.picoinnovation.com|picoinnovation.com)');
Route::group(['domain' => '{domain}'], function () {

Route::get('/','HomePageController@index');

Route::get('/product','ProductController@index');

Route::get('/product/{id}/detail','ProductController@show');

Route::get('/product/category/{id}','ProductController@category');

Route::get('/services/{id}/all','ServiceController@index');

Route::get('/service/{id}/detail','ServiceController@show');

Route::get('/about','StaffController@index');

Route::get('/member/profile/{id}','StaffController@show');

Route::get('/contact','HomePageController@contact');

Route::get('/wishlist','WishListController@wishList');

Route::get('/news','HomePageController@comming_soon');
Route::get('/events','HomePageController@comming_soon');
Route::get('/activity','HomePageController@comming_soon');

// start js event
Route::post('/product/addtocart/{id}','ProductController@addToCart');
Route::post('/product/addtowishlist/{id}','WishListController@addToWishList');
Route::get('/product/removewishlist/{id}','WishListController@removeWishList');
// end js event

});

Route::group(['domain' => 'admin.picoinnovation.com'], function () {
// Admin route lists
Route::get('/','Admin\AdminController@login');
Route::get('/login','Admin\AdminController@login')->name('login');
Route::post('/login','Admin\AdminController@store');

Route::group(['middleware'=>['auth']], function(){
	Route::get('/home','Admin\AdminController@index');
	Route::get('/logout','Admin\AdminController@destroy');

	//team
	Route::get('/create_team','Admin\TeamController@create');
	Route::post('/add_team','Admin\TeamController@store');
	Route::get('/view_team_position','Admin\TeamController@index');
	Route::get('/team/{team}/edit','Admin\TeamController@edit');
	Route::patch('/team/{team}','Admin\TeamController@update');
	Route::delete('/team/{team}','Admin\TeamController@destroy');

	//position
	Route::get('/create_position','Admin\PositionController@create');
	Route::post('/add_position','Admin\PositionController@store');
	Route::get('/position/{position}/edit','Admin\PositionController@edit');
	Route::patch('/position/{position}','Admin\PositionController@update');
	Route::delete('/position/{position}','Admin\PositionController@destroy');

	//staff
	Route::get('/view_staff','Admin\StaffController@index');
	Route::get('/create_staff','Admin\StaffController@create');
	Route::post('/add_staff','Admin\StaffController@store');
	Route::get('/staff/{staff}/show','Admin\StaffController@show');
	Route::get('/staff/{staff}/edit','Admin\StaffController@edit');
	Route::patch('/staff/{staff}/update','Admin\StaffController@update');
	Route::delete('/staff/{staff}/delete','Admin\StaffController@destroy');

	//skill type
	Route::get('/create_skill_type','Admin\SkillTypeController@create');
	Route::post('/add_skill_type','Admin\SkillTypeController@store');
	Route::get('view_skilltype_skill','Admin\SkillTypeController@index');
	Route::get('/skill_type/{skill}/edit','Admin\SkillTypeController@edit');
	Route::patch('//skill_type/{skill}','Admin\SkillTypeController@update');
	Route::delete('/skill_type/{skill}','Admin\SkillTypeController@destroy');

	//skill
	Route::get('/create_skill','Admin\SkillController@create');
	Route::post('/add_skill','Admin\SkillController@store');
	Route::get('/skill/{skill}/edit','Admin\SkillController@edit');
	Route::patch('/skill/{skill}','Admin\SkillController@update');
	Route::delete('/skill/{skill}','Admin\SkillController@destroy');
	Route::post('/skills/{id}','Admin\SkillController@getSkill'); // ajax request

	//service type
	Route::get('/create_service_type','Admin\ServiceTypeController@create');
	Route::post('/add_service_type','Admin\ServiceTypeController@store');
	Route::get('/view_service_type','Admin\ServiceTypeController@index');	
	Route::get('/service_type/{servicetype}/edit','Admin\ServiceTypeController@edit');
	Route::patch('/service_type/{servicetype}','Admin\ServiceTypeController@update');
	Route::delete('/service_type/{servicetype}/delete','Admin\ServiceTypeController@destroy');

	//service
	Route::get('/create_service','Admin\ServiceController@create');
	Route::post('/add_service','Admin\ServiceController@store');
	Route::get('/view_service','Admin\ServiceController@view');
	Route::get('/services/{service}/edit','Admin\ServiceController@edit');
	Route::patch('/services/update/{service}','Admin\ServiceController@update');
	Route::delete('/services/{service}/delete','Admin\ServiceController@destroy');

	//category
	Route::get('/create_category','Admin\CategoryController@create');
	Route::post('/add_category','Admin\CategoryController@store');
	Route::get('/view_category','Admin\CategoryController@view');
	Route::get('/category/{category}/edit','Admin\CategoryController@edit');
	Route::patch('/category/update/{category}','Admin\CategoryController@update');
	Route::delete('/category/{category}/delete','Admin\CategoryController@destroy');

	//sub category
	Route::resource('/sub_category','Admin\SubCategoryController');

	//product
	Route::get('/create_product','Admin\ProductController@create');
	Route::post('/add_product','Admin\ProductController@store');
	Route::get('/view_product','Admin\ProductController@view');
	Route::get('/products/{product}/edit','Admin\ProductController@edit');
	Route::patch('/products/update/{product}','Admin\ProductController@update');
	Route::delete('/products/{product}/delete','Admin\ProductController@destroy');
	Route::get('/products/{product}/view','Admin\ProductController@show');

	Route::post('/product_category/specific/{id}','Admin\ProductController@category_specifications');
});

});
