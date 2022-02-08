<?php

namespace Janki\PasswordChangeNotification\Observers;

use janki\passwordChangeNotification\Contracts\PasswordChangeNotificationContract;
class PasswordChangeObserver
{
    //
    public function updated(PasswordChangeNotificationContract $model){
        $model->sendPasswordChangeMailNotification();
    }

}
