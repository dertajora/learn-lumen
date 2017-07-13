<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/test', 'HomeController@index');
$app->get('api/article','ArticleController@index');




$app->get('/derta', function(){
    return 'Hello World!';
});


// $app->get('api/bimasakti','PDAM\BimasaktiController@index');

// $app->get('admin/profile', ['middleware' => 'ageHandle', function () {
//     //
// }]);

// $app->get('api/bimasakti', [
//     'middleware' => 'Logging',
//     'uses' => 'PDAM\BimasaktiController@index'
// ]);

$app->group(['middleware' => 'Logging'], function () use ($app) {
    $app->get('api/bimasakti','PDAM\BimasaktiController@index');
    $app->get('api/pelangi','PDAM\PelangiController@index');
});