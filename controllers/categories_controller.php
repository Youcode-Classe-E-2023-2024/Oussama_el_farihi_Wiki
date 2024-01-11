<?php

if(isset($_POST['add_catego'])){
    $newCatego = new Categories($_POST['name'], $_POST['description']);
    $newCatego->createCategory($_POST['name'], $_POST['description']);
}

?>