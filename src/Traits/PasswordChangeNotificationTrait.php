<?php

namespace Janki\PasswordChangeNotification\Traits;
use Janki\PasswordChangeNotification\Observers\PasswordChangeObserver;
use Janki\PasswordChangeNotification\Mail\PaswordChangedNotificationMail;
use Illuminate\Support\Facades\Mail;

trait PasswordChangeNotificationTrait{
    public static function booted() {
        static::observe(PasswordChangeObserver::class);
    }
    public function PasswordColumnName() {
        return 'password';
    }
    public function EmailColumnName() {
        return 'email';
    }
    public function PaswordChangedNotificationMail(){
        return new PaswordChangedNotificationMail;
    }
    public function isPasswordChanged() {
        return $this->wasChanged($this->PasswordColumnName());
    }
    public function HasPasswordChangedMailQueuable() {
        return false;
    }
    public function sendPasswordChangeMailNotification() {

        if(!$this->isPasswordChanged()){
            return;
         }
         $mail = Mail::to($this->getRawOriginal($this->EmailColumnName()));
         echo " Password changed succesfully.<br>";
         if($this->HasPasswordChangedMailQueuable()) {
             $mail->queue($this->PaswordChangedNotificationMail());
             return;
         }
         $mail->send($this->PaswordChangedNotificationMail());
    }
}
