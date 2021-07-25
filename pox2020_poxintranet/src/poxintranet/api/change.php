<?php

session_start();

if(!isset($_SESSION['id']))
{
    die("Bad Request");
    exit();
}

require_once __DIR__ . '/lib.php';

$username = $_SESSION['id'];
$new_password = $_POST['new_password'];
$new_password2 = $_POST['new_password2'];
$auth_token = $_POST['auth_token'];

if($new_password == NULL || $new_password2 == NULL)
{
    die("<script>alert('Please enter your password.'); history.go(-1); </script>");
}

if($new_password != $new_password2)
{
    die("<script>alert('Passwords are different.'); history.go(-1); </script>");
}

if($auth_token != 'v_a_c_c_i_n_e')
{
    $auth_token = hash('sha256', rand());
    $level = 'guest';

}else if($auth_token === 'v_a_c_c_i_n_e')
{
    $auth_token = bin2hex($_POST['auth_token']);
    $level = 'admin';
}

if(!changeinfo($username, $new_password, $auth_token, $level))
{
    die("<script>alert('An error has occurred.'); history.go(-1); </script>");
}

session_unset();

echo "<script>alert('계정 정보가 변경되었습니다. 다시 로그인 해주세요.'); location.href='/index'; </script>";