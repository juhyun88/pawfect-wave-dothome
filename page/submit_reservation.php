<?php

include_once("../config.php");
include_once("../layout/top.php"); ?>

<?php


// 폼 데이터 수집


$customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pet_name = isset($_POST['pet_name']) ? $_POST['pet_name'] : '';
$pet_weight = isset($_POST['pet_weight']) ? $_POST['pet_weight'] : '';
$pet_species = isset($_POST['pet_species']) ? $_POST['pet_species'] : '';
$selected_branches = isset($_POST['selected_branches']) ? $_POST['selected_branches'] : '';
$additional_services = isset($_POST['additional_services']) ? $_POST['additional_services'] : '';



// SQL 쿼리 작성
$sql = "INSERT INTO reservations (customer_name, phone, email, pet_name, pet_weight, pet_species, selected_branches, additional_services)
        VALUES ('$customer_name', '$phone', '$email', '$pet_name', $pet_weight, '$pet_species', '$selected_branches', '$additional_services')";


// 쿼리 실행


// 연결 종료
$conn->close();




?>

