<?php
namespace Decorator;


class BasicPage implements IPage
{

    public $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    
    public function getTitle() 
    {
       return  $this->title;
    }

    public function render() 
    {
        return " Basic Page ";
    }
}