<?php

class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function editProfile($data)
    {

        if (isset($data['password'])) {
            $passwordhash = password_hash($data['password'], PASSWORD_DEFAULT);
            $query = "UPDATE $this->table SET
            image = :image,
            username = :username,
            password = :password
            WHERE user_id = :user_id";
            $this->db->query($query);
            $this->db->bind('image', $data['image']);
            $this->db->bind('username', $data['username']);
            $this->db->bind('user_id', $data['user_id']);
            $this->db->bind('password', $passwordhash);
            $this->db->execute();
        } else {
            $query = "UPDATE $this->table SET
            image = :image,
            username = :username
            WHERE user_id = :user_id";
            $this->db->query($query);
            $this->db->bind('image', $data['image']);
            $this->db->bind('username', $data['username']);
            $this->db->bind('user_id', $data['user_id']);
            $this->db->execute();
        }


        return $this->db->rowCount();
    }
}
