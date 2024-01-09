<?php

if(isset($_POST['submit'])){
    $newUser = new User($_POST['name'], $_POST['email'], $_POST['password']);
    $newUser->register();
}

?>