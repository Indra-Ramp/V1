<?php

    if(isset($_SESSION['user'])) {
        header("Location:home.php");
        exit();
    }

?>
    <div class="container vh-100">
        <div class="row">
            <?php
                if(isset($_GET['error'])){
                    echo "Error";
                }
            ?>
        <form action="traitement_login.php" method="post" class="col-6 m-auto">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control mb-4">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-4">
            <button type="submit" class="btn btn-success mb-2">Login</button>
            <br>
            <a href="modal.php?p=create" class="">Don't you have an account? Sign up...</a>
        </form>
        </div>
    </div>