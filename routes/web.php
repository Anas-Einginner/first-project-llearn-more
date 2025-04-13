<?php

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
Route::get('/profile/{id}',function($id){
    echo 'Id for Profile is : '. $id ;
});
// user can edit id or not nicht erforderlich
Route::get('news/{id?}', function ($id=null) {
    $news =[1,3,5,7];
    if ($id) {
        echo  'The new is a '.$id ;
    }
    else {
        echo "All the news <br>";
        foreach ($news as $new) {
        echo $new .'<br>' ;
        }
    }

});
// wenn we have so much page have the same name
Route::prefix('site')->group(function() {
    Route::get('/home',function(){
        echo 'Home page' ;
    });
    Route::get('/about',function(){
        echo 'About us' ;
    });
    Route::get('/contact',function(){
        echo 'Contact Us' ;
    });
});
