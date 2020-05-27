<?php


namespace App\Model;


class Model
{
    protected $connect;
    public function __construct(Database $db)
    {
        $this->connect = $db->connect();
    }
}