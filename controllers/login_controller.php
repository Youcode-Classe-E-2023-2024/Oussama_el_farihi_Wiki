<?php
    if(isset($_POST['login'])){
        $newUser = new User($_POST["email"], null, $_POST["password"]);
        $newUser->login();
    } 
?>