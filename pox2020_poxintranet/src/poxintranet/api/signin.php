<?php

require_once __DIR__ . '/lib.php';

session_start();

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if($username == NULL || $password == NULL)
{
    die("<script>alert('Please enter a blank space.'); history.go(-1); </script>");
}

$result = signin($username, $password);

if(!$result)
{
    die("<script>alert('Login Failed'); history.go(-1); </script>");
}

// session create

$_SESSION['id'] = $result['username'];

$_SESSION['level'] = $result['level'];

echo "<script>alert('Welcome'); location.href='/welcome'; </script>";

?>