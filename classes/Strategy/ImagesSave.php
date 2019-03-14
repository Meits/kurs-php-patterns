<?php
namespace Strategy;


class ImagesSave extends BaseSave
{
    public function save()
    {
        if(file_exists('tmp/'.$this->filepath)) 
        {
            copy('tmp/'.$this->filepath, 'images/'.$this->filepath);
        }
    }
}