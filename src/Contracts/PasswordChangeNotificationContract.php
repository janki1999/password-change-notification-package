<?php

namespace Janki\PasswordChangeNotification\Contracts;

interface PasswordChangeNotificationContract{
    public static function booted();
    public function PasswordColumnName();
     public function EmailColumnName();
    public function PaswordChangedNotificationMail();
     public function isPasswordChanged();
     public function HasPasswordChangedMailQueuable();
     public function sendPasswordChangeMailNotification();
}
