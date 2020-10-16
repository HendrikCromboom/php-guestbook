<?php

Class PostLoader{

    private Data $data;
    private array $posts;
    private int $maxPosts;
    private array $latestPosts = [];

    public function __construct()
    {
        $this->data = new Data();
        $this->posts = $this->data->getPosts();
        $this->maxPosts = count($this->posts);
        $this->isolateLatestPosts();

    }
    public function isolateLatestPosts(){
        for($i = $this->maxPosts-1; $i > 0; $i--){
            array_push($this->latestPosts, $this->posts[$i]);
        }
    }
    public function getLatestPosts(){
        return $this->latestPosts;
    }



}