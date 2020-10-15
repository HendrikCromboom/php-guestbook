<?php

Class Serializer{
    private Post $post;
    private Data $data;

    public function __construct(Post $post)
    {

        $this->post = $post;
        $this->data = new Data();
        $title = $this->post->getTitle();
        $name = $this->post->getAuthor();
        $message = $this->post->getContent();
        $date = $this->post->getDate();
        $this->data->addPost($this->toArray($title, $name, $message, $date));
    }
    private function toArray($title, $name, $message, $date){
        return $serializedPost = [$title, $name, $message, $date];
    }

}
