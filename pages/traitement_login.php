<?php

    session_start();
    include("../inc/function.php");
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $info = getLoginInfo($email, $mdp);
    if($info == NULL) {
        header("Location:modal.php?p=index");
    }

?>