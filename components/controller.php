<?php

$posts = new PostLoader();

if(isset($_POST["submit"])){
    $filter = new Filter();
    if($filter->checkList($_POST["title"], $_POST["name"], $_POST["message"]))
    {
        $post = new Post($_POST["title"], $_POST["name"], $_POST["message"]);
    }else{echo "Please refrain from using special characters...";}
}