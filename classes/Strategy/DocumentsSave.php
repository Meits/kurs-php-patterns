<?php
namespace Strategy;


class DocumentsSave extends BaseSave
{
    public function save()
    {
        if(file_exists('tmp/'.$this->filepath)) 
        {
            copy('tmp/'.$this->filepath, 'documents/'.$this->filepath);
        }
    }
}