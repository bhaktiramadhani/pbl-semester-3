<?php

class Login_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function getUserLogin($username, $password)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username AND password=:password");
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}
