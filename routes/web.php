<?php


Route::get('/', 'HomeController@index');

Route::get('/api', function (){
    return response()->json('response from serve');
});


Route::get('show',['as'=>'show','uses'=>'HomeController@show']);

//login & Register

Route::group(['namespace'=>'Guard'],function (){

    Route::get('guard',['as'=>'guard','uses'=>'LoginController@index']);

    Route::post('register',['as'=>'register','uses'=>'LoginController@register']);

    Route::post('login',['as'=>'login','uses'=>'LoginController@login']);

    Route::post('logout',['as'=>'logout','uses'=>'LoginController@logout']);
});

//customer
Route::post('cat','ListingController@getCategories');
// Route::post('getCategory','ListingController@getCategories');
Route::group(['namespace'=>'Customer'],function (){



    Route::get('/profile',['as'=>'profile.index','uses'=>'ProfileController@index']);

    Route::resource('listing','ListingController');
    Route::get('/category',['as'=>'listing','uses'=>'ListingController@category']);
    // Route::get('/getCategory/{category_id}',['as'=>'getCategory','uses'=>'ListingController@getCategories']);
    

});


