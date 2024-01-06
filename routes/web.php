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

Route::get('/data/daily_stats.json', function () {
    $path = public_path('assets/data.json');
    
    if (file_exists($path)) {
        $contents = file_get_contents($path);
        $json = json_decode($contents, true);

        return response()->json($json);
    } else {
        abort(404, 'JSON file not found');
    }
});