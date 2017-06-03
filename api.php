<?php
include 'Class.php';

$user_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$user_tel = filter_var($_POST['tel'],FILTER_SANITIZE_NUMBER_INT);
$user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$user_pet = filter_var($_POST['pet'], FILTER_SANITIZE_STRING);
$user_reason = filter_var($_POST['why_adopt'], FILTER_SANITIZE_STRING);

$newLead = new Lead($user_name, $user_tel, $user_email, $user_pet, $user_reason);
        
