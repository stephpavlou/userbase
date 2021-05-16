<?php 

include '../db.con.php';

//make sure user got here by clicking 'register'
if(empty($_POST['submit'])) {
    header('Location: register.php');
    exit();
}

//check no part of form is empty
if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
    session_start();
    $_SESSION['register_error']='Please complete the entire form.';
    header('Location: register.php');
    exit();
}

$username=$_POST['username'];
$password=$_POST['password'];
$conf_password=$_POST['confirm_password'];

$pdo=open_con();

//check username does not already exist
$sql='SELECT * FROM users WHERE username=?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$username]);

if(!empty($stmt->fetch())) {
    session_start();
    $_SESSION['register_error']='Username already exists.';
    header('Location: register.php');
    exit();
} 

//check passwords match
if($password!=$conf_password) {
    session_start();
    $_SESSION['register_error']='Passwords do not match.';
    header('Location: register.php');
    exit();
}

//register user
$sql='INSERT INTO users (username,password) VALUES (?,?)';
$stmt=$pdo->prepare($sql);
$stmt->execute([$username,$password]);
header('Location: login.php');

close_con($pdo);

