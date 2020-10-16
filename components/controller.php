<?php

$posts = new PostLoader();

if(isset($_POST["submit"])){
    $post = new Post($_POST["title"], $_POST["name"],$_POST["message"]);
}