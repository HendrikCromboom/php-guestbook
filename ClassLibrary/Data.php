<?php
 Class Data{
     private array $posts;

     public function __construct()
     {

         $this->posts = unserialize(file_get_contents('data/posts.json'));

     }
     public function addPost($post){
         file_put_contents('data/posts.json', serialize(array_push($this->posts, $post)));

     }

     public function getPosts()
     {
         return $this->posts;
     }
 }