<?php
namespace AbstractFactory;

class SqliteDatabaseFactory implements DatabaseFactory 
{
    private $filename;
    
    public function __construct(string $filename) {
        $this->filepath = $filepath;
        
    }
    
    public function connect() : DatabaseConnect 
    {
        return new SqliteDatabaseConnect($this->filepath);
    }

    public function query() : DatabaseQuery 
    {
        return new SqliteDatabaseQuery($this->connect());
    }
}