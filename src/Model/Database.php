<?php

namespace App\Model;

use PDO;
use PDOException;

class Database
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $config = parse_ini_file('config/database.ini', true);
        $username = $config['database_default_username'];
        $password = $config['database_default_password'];
        $host = $config['database_default_host'];
        $this->dsn = "mysql:host=$host;dbname=shop";
        $this->username = $username;
        $this->password = $password;
    }

    function connect()
    {
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $PDOException) {
            return $PDOException->getMessage();
        }
    }

}