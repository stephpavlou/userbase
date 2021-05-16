<?php

include '../db.con.php';

session_start();
if(isset($_SESSION['username'])) {
    /* NOT CURRENTLY IN USE, IGNORE
    $pdo=open_con();
    $sql='UPDATE users SET last_activity=? WHERE username=?';
    $stmt=$pdo->prepare($sql);
    $stmt->execute([time(),$_SESSION['username']]);
    */

    echo "Successfully logged in as ".$_SESSION['username'];
} else {
    header("Location: ../login/login.php");
}