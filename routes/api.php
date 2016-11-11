<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/jobs', function() {
  return \App\Job::all()->toJson();
});

Route::get('/applications/{limit?}', function($limit=0) {
    $applicationEntity = new \App\Application();
    return collect(['data' => $applicationEntity->getApplications($limit)])->toJson();
});


Route::post('/application/{id}/status/{newStatus}', function($id, $newStatus) {
    $success =  \App\Application::find($id)->update(['status' => $newStatus]);

    return collect(['data' => $success])->toJson();

});



Route::get('/application/{id}', function($id) {

    return collect(['data' => \App\Application::find($id)])->toJson();

});