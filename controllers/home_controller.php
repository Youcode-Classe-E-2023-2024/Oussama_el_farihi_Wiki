<?php

$wikiClass = new Wiki(null, null, null, null, null);
$wikis = $wikiClass->getAllWikisWithDetails();

$categoriesClass = new Categories(null, null);
$allCategories = $categoriesClass->getAllCategories();



if(isset($_GET["search_title"])) {
    $input_value = $_GET["input_value"];
    $searchedData = Wiki::searchForTitles($input_value);

    echo json_encode($searchedData);
    exit;
}

if(isset($_GET["search_tag"])) {
    $input_value = $_GET["input_value"];
    $searchedData = Wiki::searchForTags($input_value);

    echo json_encode($searchedData);
    exit;
}

// echo "pre";
// var_dump($_GET);
// echo "pre";

?>