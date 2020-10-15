<?php

Class PostLoader{

    private Data $posts;
    private int $maxPosts;
    private array $latestPosts = [];

    public function __construct()
    {
        $this->posts = new Data();
        $this->maxPosts = count($this->posts->getPosts());
        $this->isolateLatestPosts();
    }
    public function isolateLatestPosts(){
        for($i = $this->maxPosts-1; $i > $this->maxPosts-21; $i--){
            array_push($this->latestPosts, $this->posts[$i]);
        }
    }
    public function printLatestPosts(){
        foreach ($this->latestPosts AS $post){
           // showPost($post);
echo "derp";
        }
    }

}