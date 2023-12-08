<?php

class Testimoni_model
{
    private $table = 'testimoni';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTestimoni()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
}
