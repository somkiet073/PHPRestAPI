<?php
    require_once __DIR__.'/app/autoload.php';
    // die(__DIR__.'/app/autoload.php');
    use Statics\User;

    $user = new User(); // การสร้าง Object ขึ้นมา

    $user->frist_name = 'somkiet'; // ส่วนของการเซตค่าให้ properties frist_name
    $user->last_name = 'paowang';   // ส่วนของการเซตค่าให้ properties last_name
    $user->email = 'somkiet@email.com'; // ส่วนของการเซตค่าให้ properties email

    $user->loginprocess(); // ส่วนของการเรียกใช้ Method