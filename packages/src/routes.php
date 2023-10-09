<?php

use packages\CustomeController;

Route::get('/customer',function(){
    echo "hey its custome route";
});
Route::get('/',function(){
   return view('packages::index');
});
Route::get('hey',[CustomeController::class,'hey']);