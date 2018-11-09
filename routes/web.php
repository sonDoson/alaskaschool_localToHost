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
//
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
//
Route::get('/', function () {
    return redirect('/introduce');
});
Route::get('/introduce', 'ControllerIntroduce@getIntroduce')->name('getIntroduce');
Route::get('/cat/{id_category}', 'ControllerLvCategory@getCategoryList')->name('getCategoryList');
Route::get('/cat/{id_category}/{id_posts}', 'ControllerLvPosts@getPosts')->name('getPosts');
Route::get('/hline', 'ControllerHlineItems@getHline')->name('getHline');
Route::get('/search', 'ControllerSearchItems@getSearch')->name('getSearch');
Route::get('/contact', 'ControllerContact@getContact')->name('getContact');
//MAIL
Route::post('/send_mail', 'ControllerSendMail@postSendMail')->name('postSendMail');
Route::get('/thank-you', 'ControllerThanks@getThanks')->name('getThanks');
//
Route::get('/login', 'ControllerUserLogin@getLogin')->name('login');
Route::post('/login', 'ControllerUserLogin@postLogin')->name('postLogin');
Route::get('/logout', 'ControllerUserLogout@getLogout')->name('getLogout');
Route::get('/user/repasswd', 'ControllerUserRePasswd@getRePasswd')->name('getRePasswd');
Route::post('/user/repasswd', 'ControllerUserRePasswd@postRePasswd')->name('postRePasswd');

Route::group(['middleware' => ['auth']], function () {
   
    Route::get('/user/welcome', 'ControllerUserWelcome@getUserWelcome')->name('getUserWelcome');
    Route::get('/user/setting', 'ControllerUserSetting@getUserSetting')->name('getUserSetting');
    Route::post('/user/setting', 'ControllerUserSetting@postUserSetting')->name('postUserSetting');
    //POSTS
    Route::get('/user/posts/category', 'ControllerUserPostsCategory@getPostsCategory')->name('getPostsCategory');
    Route::post('/user/posts/category', 'ControllerUserPostsCategory@postPostsCategory')->name('postPostsCategory');
    Route::get('/user/posts/posts', 'ControllerUserPostsPosts@getPostsPosts')->name('getPostsPosts');
    Route::post('/user/posts/posts', 'ControllerUserPostsPosts@postPostsPosts')->name('postPostsPosts');
    Route::get('/user/posts/list', 'ControllerUserPostsList@getPostsList')->name('getPostsList');
    Route::post('/user/posts/list', 'ControllerUserPostsList@postPostsList')->name('postPostsList');
    Route::get('/user/posts/edit', 'ControllerUserPostsEdit@getPostsEdit')->name('getPostsEdit');
    Route::post('/user/posts/edit', 'ControllerUserPostsEdit@postPostsEdit')->name('postPostsEdit');
    //CONTACT
    Route::get('/user/contact/edit', 'ControllerUserContactEdit@getEditContact')->name('getEditContact');
    Route::post('/user/contact/edit', 'ControllerUserContactEdit@postEditContact')->name('postEditContact');

    //FUNCTION
    Route::post('/user/edit_category', 'ControllerUserEditCategory@postEditCategory')->name('postEditCategory');
    Route::post('/user/delete_category', 'ControllerUserDeleteCategory@postDeleteCategory')->name('postDeleteCategory');
    Route::post('/user/delete_item', 'ControllerUserDeleteItem@postDeleteItem')->name('postDeleteItem');
    Route::post('/user/list_ajax', 'ControllerUserAjaxList@postAjaxList')->name('postAjaxList');
    Route::post('/user/load_more', 'ControllerUserAjaxLoadMore@postAjaxLoadMore')->name('postAjaxLoadMore');
    Route::get('/user/delete', 'ControllerUserPostsDelete@getPostsDelete')->name('getPostsDelete');

});