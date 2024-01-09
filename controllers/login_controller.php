<?php
    if(isset($_POST['login'])){
        User::login($_POST["email"], $_POST["password"]);
    } 
?> 