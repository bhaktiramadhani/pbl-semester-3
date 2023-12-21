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

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE user_id = :user_id");
        $this->db->bind('user_id', $id);
        return $this->db->single();
    }

    public function getUserByEmail($email)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email = :email");
        $this->db->bind('email', $email);
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

    public function hapusAkun($id)
    {
        $user = $this->getUserById($id);
        $this->db->query("DELETE FROM $this->table WHERE user_id = :user_id");
        $this->db->bind('user_id', $id);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            Upload::deleteImage('users', $user['image']);
        }
        return $this->db->rowCount();
    }

    public function tambahAkun($data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-d H:i:s", time());
        $this->db->query("INSERT INTO $this->table VALUES ('', :image, :email, :username, :password, :is_active, '', '', :req_date)");
        $this->db->bind('image', $data['image']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('is_active', $data['is_active']);
        $this->db->bind('req_date', $time);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editAkun($data)
    {
        $this->db->query("UPDATE $this->table SET email = :email, image = :image, username = :username, password = :password, is_active = :is_active WHERE user_id = :user_id");
        $this->db->bind('email', $data['email']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('is_active', $data['is_active']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function resetPassword($data)
    {
        $this->db->query("UPDATE $this->table SET token = :token, token_exp = :token_exp WHERE email = :email");
        $this->db->bind('token', $data['token']);
        $this->db->bind('token_exp', $data['token_exp']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editPassword($data)
    {
        $this->db->query("UPDATE $this->table SET password = :password,token = '', token_exp = '' WHERE email = :email");
        $this->db->bind('password', $data['password']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
