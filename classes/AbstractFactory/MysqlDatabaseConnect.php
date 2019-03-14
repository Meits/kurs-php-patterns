<?php
namespace AbstractFactory;


class MysqlDatabaseConnect implements DatabaseConnect
{
    private $mysqli;
    
    public function __construct($host, $user, $password,  $db) {
        $this->mysqli = new \mysqli($host, $user, $password,  $db);

        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                    . $this->mysqli->connect_error);
        }
    }
    
    public function connection() 
    {
        return $this->mysqli;
    }
}