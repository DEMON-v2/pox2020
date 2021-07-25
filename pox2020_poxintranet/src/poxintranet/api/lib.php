<?php

require_once __DIR__ . "/dbinit.php";

function signin($username, $password)
{
    global $db;
    $query = "SELECT `username`, `password`, `level` FROM `users` WHERE `username` = ? AND `password` = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    $exec = mysqli_stmt_execute($stmt);
    
    if($exec === false)
    {
        die("<script>alert('error'); history.go(-1); </script>");
    }

    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_array($result);
}

function signup($username, $password, $auth_token, $level, $time)
{
    global $db;
    $query = "INSERT INTO `users` (`username`,`password`,`auth_token`,`level`,`time`) VALUE (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'sssss', $username, hash('sha256',$password), $auth_token, $level, $time);
    $exec = mysqli_stmt_execute($stmt);

    if($exec === false)
    {
        die("<script>alert('error'); history.go(-1); </script>");
    }

    return $exec;
}

function findusername($username)
{
    global $db;
    $query = "SELECT `username` FROM `users` WHERE `username` = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    $exec = mysqli_stmt_execute($stmt);

    if($exec === false)
    {
        die("<script>alert('error'); history.go(-1); </script>");
    }

    $result = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_array($result);
}

function post_write($title, $context, $author, $time)
{
    global $db;
    $query = "INSERT INTO `board` (`title`,`context`,`author`,`time`) VALUE (?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'ssss', $title, $context, $author, $time);
    $exec = mysqli_stmt_execute($stmt);

    if($exec === false)
    {
        die("<script>alert('error'); history.go(-1); </script>");
    }

    return $exec;
}

function post_view()
{
    global $db;
    $query = "SELECT * FROM `board` ORDER BY `idx` desc limit 10";
    $result = mysqli_query($db, $query);
    return $result;
}

function select_view($idx)
{
	global $db;
	$query = "SELECT * FROM `board` WHERE `idx` = '$idx'";
	$result = mysqli_query($db, $query);
	return $result;
}

function changeinfo($username, $new_password, $auth_token, $level)
{
    global $db;
    $query = "UPDATE `users` SET `password` = ?, `auth_token` = ?, `level` = ? WHERE `username` = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, 'ssss', hash('sha256', $new_password), $auth_token, $level, $username);
    $exec = mysqli_stmt_execute($stmt);

    if($exec === false)
    {
        die("<script>alert('error'); history.go(-1); </script>");
    }

    return $exec;
}
?>
