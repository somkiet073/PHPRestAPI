<?php
    require_once __DIR__.'./vendor/autoload.php';

    use Statics\Connectdb;

    $dbconnect = new Connectdb();
    $conn = $dbconnect->getConnect();

    // Param ที่ได้จากการ Post ค่ามาจากหน้า From หรือ Postman
    $username='admin';
    $password=md5("123456");
    $fullname='somkiet paowang';
    $email='email@email.com';
    $tel='0811111111';
    $status='1';

    // INSERT Data To User
    $strSQL = ' INSERT INTO users (username,password,fullname,email,tel,status) 
                VALUES (:username,:password,:fullname,:email,:tel,:status)';

    $stmt = $conn->prepare($strSQL);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':fullname',$fullname);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':tel',$tel);
    $stmt->bindParam(':status',$status);

    if($stmt->execute()){
        echo 'Add new member success.';
    }else {
        echo 'Add data faild!!!';
    }