<?php

$wikiClass = new Wiki(null, null, null, null, null);
$wikis = $wikiClass->getAllWikisWithDetails();

if(isset($_GET["search_title"])) {
    $input_value = $_GET["search"];
    $searchedData = Wiki::searchForTitles($input_value);
    echo json_encode($searchedData);
    exit;
}

if(isset($_GET["search_tag"])) {
    $input_value = $_GET["search"];
    $searchedData = Wiki::searchForTags($input_value);
    echo json_encode($searchedData);
    exit;
}

if(isset($_GET["search_category"])) {
    $input_value = $_GET["search"];
    $searchedData = Wiki::searchForCategories($input_value);
    echo json_encode($searchedData);
    exit;
}

$categoriesClass = new Categories(null, null);
$allCategories = $categoriesClass->getAllCategories();

// echo "pre";
// var_dump($_GET);
// echo "pre";

?>