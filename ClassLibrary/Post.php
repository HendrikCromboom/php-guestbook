<?php

Class Post{

    private string $title;
    private string $date;
    private string $content;
    private string $author;
    private Data $data;

    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->data = new Data();
        $this->date = new \Cassandra\Date(0);

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getData(){
        return $this->data;
    }




}