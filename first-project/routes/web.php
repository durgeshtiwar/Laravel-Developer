<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DBconnectionController;
use App\Http\Controllers\FetchApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//->middleware('check1');

// Route::get('/about', function () {
//     return "<h1>About Page</h1>";
// });
// Route::get('/user/{id?}', function($id = 4) {
//     return "<h1>User_id is = ".$id."</h1>";
// });
// // Route::get('/user/{developer}/{id}', function($developer,$id) {
// //     return "<h1>User_id is = ".$id."</h1><h1>Developer is = ".$developer."</h1>";
// // })->where(['developer'=>'[A-Za-z]+','id'=>'[0-9]+']);
// // helper Function
// Route::get('/user/{developer}/{id}', function($developer,$id) {
//     return "<h1>User_id is = ".$id."</h1><h1>Developer is = ".$developer."</h1>";
// })->whereAlpha('developer')->whereNumber('id');
// Route::get('yaha', function (){
//     return "<h1>Yaha Wala Page</h1>";
// });
// Route::get('waha', function (){
//     return "<h1>Waha Wala Page</h1>";
// });
// Route::redirect('yaha', 'waha');


// //Route Prefix
// Route::prefix('admin')->group(function(){
//     Route::get('order', function () {
//         return "<h1>Admin Order Page</h1>";
//     });
//     Route::get('report', function () {
//         return "<h1>Admin report Page</h1>";
//     });
//     Route::get('shipping', function () {
//         return "<h1>Admin shipping Page</h1>";
//     });    
// });



// Route::middleware('check1')->group(function(){
//     Route::get('/form', function () {
//         return view('Form');
//     });
//     Route::get('about/{name}',[AboutController::class,'show']);
//     Route::post('/submit',[FormController::class,'submit']);
// });


Route::get('getData',[DBconnectionController::class,'DBconnection']);
Route::get('getApi',[FetchApiController::class,'fetchApi']);