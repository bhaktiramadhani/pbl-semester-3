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

    public function getTestimoniById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_testimoni = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahTestimoni($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES ('', :name, :image, :description)");
        $this->db->bind('name', $data['name']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('description', $data['description']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusTestimoni($id)
    {
        $testimoni = $this->getTestimoniById($id);
        $this->db->query("DELETE FROM $this->table WHERE id_testimoni = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            Upload::deleteImage('testimoni', $testimoni['image']);
        }
        return $this->db->rowCount();
    }

    public function editTestimoni($data)
    {
        $this->db->query("UPDATE $this->table SET name = :name, image = :image, description = :description WHERE id_testimoni = :id_testimoni");
        $this->db->bind('name', $data['name']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('id_testimoni', $data['id_testimoni']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
