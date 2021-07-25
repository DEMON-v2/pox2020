<?php

require_once __DIR__ . '/lib.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$auth_token = hash('sha256', rand());
$level = 'guest';
$time = date('Y-m-d H-i-s');

if($username == NULL || $password == NULL)
{
    die("<script>alert('Please enter a blank space.'); history.go(-1); </script>");
}

if(findusername($username))
{
    die("<script>alert('User already joined.'); history.go(-1); </script>");
}

if(!signup($username, $password, $auth_token, $level, $time))
{
    die("<script>alert('An error has occurred.'); history.go(-1); </script>");
}

echo "<script>alert('registration success'); location.href='/index'; </script>";