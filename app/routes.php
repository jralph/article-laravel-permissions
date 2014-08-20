<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Create a basic login system.
Route::post('login', 'LoginController@process');
Route::get('login', 'LoginController@index');

// Create an admin panel that requires auth.
Route::group(['prefix' => 'admin', 'before' => 'auth'], function()
{   
    // No permissions required.
    Route::get('/', function()
    {
        return 'You have reached the admin dashboard.';
    });

    // User must have post-editor OR content-editor permissions.
    Route::get('posts', [
        'before' => 'permission:post-editor,content-editor',
        function() {
            return 'You have reached the posts page.';
        }
    ]);

    // User must have content-editor permission.
    Route::get('media', [
        'before' => 'permission:content-editor',
        function() {
            return 'You have reached the media page.';
        }
    ]);

    // Userm ust have post-editor AND content-editor permissions.
    Route::get('posts/media', [
        'before' => 'permissions:post-editor,content-editor',
        function() {
            return 'You have reached the post media page.';
        }
    ]);
});
