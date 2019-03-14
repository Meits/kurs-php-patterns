<?php 
namespace IteratorPattern;


class Post 
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, string $author) {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle() 
    {
        return $this->title;
    }
    public function getAuthor() 
    {
        return $this->author;
    }
    public function getText() 
    {
        return $this->text;
    }
}