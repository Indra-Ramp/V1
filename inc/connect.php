<?php

    function dbconnect(){
        $db = mysqli_connect("localhost", "ETU004045", "jD41qKBv", "db_s2_ETU004045");
        if(!$db){
            return "Misy zavatra tsy mety ato ohhhhhhhh (connect.php)";
        }
        return $db;
    }


?>