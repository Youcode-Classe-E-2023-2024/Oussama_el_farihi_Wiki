<?php

$wikiClass = new Wiki(null, null, null, null, null);
$wikis = $wikiClass->getWikisByUserWithDetails($_SESSION['id']);
// echo "<pre>";
// print_r($wikis);
// echo "<pre>";
$categoriesClass = new Categories(null, null);
$categories = $categoriesClass->getAllCategories();

$tagsClass = new Tags(null);
$tags = $tagsClass->getAllTags();

if (isset($_POST['delete_wiki'])) {
    $wikiId = $_POST['wiki_id'];
    $wikiClass->softDeleteWiki($wikiId);
    header("Location: index.php?page=archive");
    exit();
}

if (isset($_POST['recover_wiki'])) {
    $wikiId = $_POST['wiki_id'];
    $wikiClass->RecoverWiki($wikiId);
    header("Location: index.php?page=archive");
    exit();
}

?>