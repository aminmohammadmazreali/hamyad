<?php


Route::get('/', function () {

    return view('welcome');

});


// Admin Routes
Route::group([
    'prefix' => '/admin',
    'namespace' => 'Admin',
    'middleware' => 'auth:web'],
    function () {
//        Route::get('/admin', array('as' => 'admin', 'uses' => 'LoginController@index'));
//        Route::get('/admin/register', array('as' => 'register', 'uses' => 'RegisterController@register'));

});


// Authentication Routes...

$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');

$this->post('login', 'Auth\LoginController@login')->name('auth.login');

$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');



// Registration Routes...

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');

$this->post('register', 'Auth\RegisterController@register')->name('auth.register');



// Password Reset Routes...

$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');

$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');

$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');

$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');





Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index');



    Route::resource('roles', 'RolesController');

    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('users', 'UsersController');

    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('user_actions', 'UserActionsController');

    Route::resource('admins', 'AdminsController');

    Route::post('admins_mass_destroy', ['uses' => 'AdminsController@massDestroy', 'as' => 'admins.mass_destroy']);

    Route::post('courses_mass_destroy', ['uses' => 'CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);

    Route::resource('reviews', 'ReviewsController');

    Route::post('reviews_mass_destroy', ['uses' => 'ReviewsController@massDestroy', 'as' => 'reviews.mass_destroy']);

    Route::resource('tags', 'TagsController');

    Route::post('tags_mass_destroy', ['uses' => 'TagsController@massDestroy', 'as' => 'tags.mass_destroy']);
    Route::get('mycourses','UsersOperation@RetrieveMyCourses');
    Route::get('mypacks','UsersOperation@RetrieveMyPacks');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

#Main URL's
Route::resource('categories', 'CategoryController');
Route::resource('packs', 'PackController');
Route::resource('courses', 'CoursesController');


#test Routes
Route::get('coursereview/{course}','CoursesController@ShowReviews');
#Email Verification Route
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');
