<?php

$categoriesClass = new Categories(null, null);
$categories = $categoriesClass->getAllCategories();

$tagsClass = new Tags(null);
$tags = $tagsClass->getAllTags();

    // echo "<pre>";
    // print_r($_FILES);
    // echo "<pre>";

if(isset($_POST['wiki'])){
    $auteurId = $_SESSION['id'];

    // echo "<pre>";
    // print_r($_FILES);
    // echo "<pre>";

    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($img_tmp, "./assets/img/$img_name");

$wikiTitle = $_POST['title'];
$wikiContent = $_POST['content'];
$categorieId = $_POST['category'];

$wiki = new Wiki($wikiTitle, $wikiContent, $auteurId, $categorieId, $img_name);
$wikiCreated = $wiki->createWiki();

if ($wikiCreated) {
    $wikiId = $wiki->getLastInsertId();

    if (!empty($_POST['tags'])) {
        foreach ($_POST['tags'] as $tagId) {
            $wiki->addTagToWiki($wikiId, $tagId);
        }
    }
}

}



?>