<?php


namespace App\Model;


class Model
{
    protected $connect;
    public function __construct(Database $db)
    {
        $this->connect = $db->connect();
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }
}