<?php

class Product_model
{
    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query("SELECT products.*, category.category_name
                            FROM $this->table
                            INNER JOIN category on products.id_category = category.id_category
                            ");
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_products = :id_products");
        $this->db->bind('id_products', $id);
        return $this->db->single();
    }

    public function tambahProduct($data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-d H:i:s", time());
        $query = "INSERT INTO products
                    VALUES
                    ('', :name, :image, :description, :price, :id_category, :created_at, :update_at)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('id_category', $data['category']);
        $this->db->bind('created_at', $time);
        $this->db->bind('update_at', $time);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusProduct($id)
    {
        $products = $this->getProductById($id);
        $query = "DELETE FROM products WHERE id_products = :id_products";
        $this->db->query($query);
        $this->db->bind('id_products', $id);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            Upload::deleteImage('produk', $products['image']);
        }
        return $this->db->rowCount();
    }
}
