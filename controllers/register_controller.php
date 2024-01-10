<?php

if(isset($_POST['name'])){
    $newUser = new User($_POST['name'], $_POST['email'], $_POST['password']);
    $result = $newUser->register();
    if($result){
        echo $result;
        die();
    }
}

?>