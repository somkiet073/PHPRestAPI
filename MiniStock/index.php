<?php
    require_once __DIR__.'./vendor/autoload.php';

    use Statics\Connectdb;

    $dbconnect = new Connectdb();
    $conn = $dbconnect->getConnect();
