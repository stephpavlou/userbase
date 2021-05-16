<?php

include '../db.con.php';

//make sure user got here by clicking 'register'
if(empty($_POST['submit'])) {
    header('Location: login.php');
    exit();
}

//check no part of form is empty
if(empty($_POST['username']) || empty($_POST['password'])) {
    session_start();
    $_SESSION['login_error']='Please complete the entire form.';
    header('Location: login.php');
    exit();
}

$username=$_POST['username'];
$password=$_POST['password'];

$pdo=open_con();

//check user exists
$sql='SELECT * FROM users WHERE username=?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$username]);

if(empty($stmt->fetch())) {
    session_start();
    $_SESSION['login_error']='User does not exist.';
    header('Location: login.php');
    exit();
}

//check password matches
$sql='SELECT * FROM users WHERE username=?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$username]);
$db_pass=$stmt->fetchColumn(1);

if($password!=$db_pass) {
    session_start();
    $_SESSION['login_error']='Password is incorrect.';
    header('Location: login.php');
    exit();
}

session_start();
$_SESSION['username']=$username;
header("Location: ../home/home.php");

close_con($pdo);
