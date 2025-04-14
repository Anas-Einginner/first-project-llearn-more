<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use League\Flysystem\UrlGeneration\PrefixPublicUrlGenerator;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', function () {
//     return 'Welcome Anas to Laravel with the distinguished teacher Ahmed Zaqout ';
// });
// Route::get('/home',function(){
//    return view('home');
// });
// Route::get('/new/{id?}',function ($id = null) {
//     $news =[1 , 4, 6, 9];
//     if($id){
//     echo 'the id is the new is <br> '. $id;
//     }
//     else{
//         echo 'All news <br>';
//     foreach ($news as $new) {
//         echo $new . '<br>';
//     }
//     }
// });
// site1 = home / about us / contact us 

// Route::prefix('site1')->group(function(){

//     Route::get('/home',function(){
//        echo '<h1>home</h1>';
//     });
//     Route::get('/about',function(){
//         echo '<h1>About us</h1>';
//     });
//     Route::get('/contact',function(){
//         echo '<h1>Contact us</h1>';
//     });
// });

// url muss write the id
// Route::prefix('site1')->group(function(){
//     Route::get('/home',[ SiteOneController::class,'home']);
//     Route::get('/about',[SiteOneController::class,'about']);
//     Route::get('/contact',[SiteOneController::class,'contact']);
//     Route::get('/msg/{id}',[SiteOneController::class,'msg']);
// });
Route::prefix('site1')->controller(SiteOneController::class)->group(function(){
    Route::get('/home','home');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/msg/{id}','msg');
});