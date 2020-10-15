<?php
 Class Data{
     private array $posts=[];

     public function __construct()
     {
         $this->posts = json_decode(file_get_contents('/var/www/html/php-guestbook/data/posts.json'));

     }
     public function addPost($post){
         array_push($this->posts, $post);
         file_put_contents('/var/www/html/php-guestbook/data/posts.json', json_encode($this->posts));

     }

     public function getPosts()
     {
         return $this->posts;
     }
 }