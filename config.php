<?php
// config.php

// 루트 디렉토리 설정
define('ROOT_DIR', __DIR__);

$server_name = $_SERVER['SERVER_NAME'];
//도메인이름

// 웹 서버의 루트 디렉토리 경로
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

// 데이터베이스 설정 (예시)
define('DB_HOST', 'localhost');
define('DB_NAME', 'pawfectwave');
define('DB_USER', 'pawfectwave');
define('DB_PASS', 'js241219!');

define('IMG_URL', 'pawfectwave-team-react.vercel.app');


$conn = new mysqli('localhost', 'pawfectwave', 'js241219!', 'pawfectwave');

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}

$sql="INSERT INTO user(author, title, content, created_at, updated_at) VALUES(?, ?, ?, ?, ?)";

$author = isset($_POST['author']) ? trim($_POST['author']) : ''; // 'author'가 없으면 빈 문자열로 설정
$title = isset($_POST['title']) ? trim($_POST['title']) : '';
$content = isset($_POST['content']) ? trim($_POST['content']) : '';
$created_at = date('Y-m-d H:i:s');  // 현재 시간으로 생성
$updated_at = $created_at;          // 처음과 업데이트된 시간은 동일하게 설정


?>
