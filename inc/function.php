<?php

    require("connect.php");
    function getLoginInfo($email, $mdp) {
        $sql = "SELECT * FROM membre WHERE email = '%s' AND mdp = '%s'";
        $sql = sprintf($sql , $email, $mdp);
        $result = mysqli_query(dbconnect(), $sql);
        return mysqli_fetch_assoc($result);
    }

?>