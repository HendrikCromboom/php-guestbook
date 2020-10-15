<?php


use Cassandra\Date;

Class Post{

    private string $title;
    private string $date;
    private string $content;
    private string $author;
    private Serializer $ser;

    public function __construct(string $title,string $author, string $content )
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = date("Y/m/d");
        $this->ser = new Serializer($this);

    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getContent(): string
    {
        return $this->content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDate()
    {
        return $this->date;
    }





}