<?php
namespace Strategy;

abstract class BaseSave implements IFileSave
{
    protected $filepath;

    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;
    }
}