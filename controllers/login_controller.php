<?php
    if(isset($_POST['login'])){
        $newUser = new User($_POST["email"], $_POST["password"]);
        $newUser->login();
    } 
?>