<?php
require_once __DIR__.'./vendor/autoload.php';

use Statics\Connectdb;

$dbconnect = new Connectdb();
$conn = $dbconnect->getConnect();

$strSQL = 'SELECT * FROM users ORDER BY id DESC';
$stmt = $conn->prepare($strSQL);
$stmt->execute();

// อ่านข้อมูลออกมา
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print_r($result);

// แปลงค่า array เป็น json
echo json_encode($result);