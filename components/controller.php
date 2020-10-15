<?php

$posts = new PostLoader();

if(isset($_GET["submit"])){
    $post = new Post($_GET["title"], $_GET["name"],$_GET["message"]);
    $post->getData()->addPost($post);
}