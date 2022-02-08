<?php

use Janki\PasswordChangeNotification\Models\User;

Route::group([
],function(){
    Route::get("SendPasswordChangeMail",function(){
      $user = User::first();
      $user->password ="testing@1234784";
      $user->save();
      echo "In route";
    });



});
