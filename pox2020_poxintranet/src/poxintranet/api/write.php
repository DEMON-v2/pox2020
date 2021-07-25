<?php

session_start();

if(!isset($_SESSION['id']))
{
    die("Bad Request");
    exit();
}

require_once __DIR__ . '/lib.php';

$title = $_POST['title'];
$context = $_POST['context'];
$author = $_SESSION['id'];
$time = date('Y-m-d H-i-s');

if($title == NULL || $context == NULL)
{
    die("<script>alert('Please enter a blank space.'); history.go(-1); </script>");
}

if(!post_write($title, $context, $author, $time))
{
    die("<script>alert('An error has occurred.'); history.go(-1); </script>");
}

echo "<script>alert('Write Success'); location.href='/board'; </script>";

?>