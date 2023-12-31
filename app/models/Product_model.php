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
                            JOIN category on products.id_category = category.id_category");
        return $this->db->resultSet();
    }

    public function getAllProductByLimitAndLike($limit, $field, $keyword)
    {
        $tampungan = [];
        if (is_array($keyword)) {
            foreach ($keyword as $array) {
                $tampungan[] = "$field LIKE '%$array%'";
            }
            $tampungan = implode(' OR ', $tampungan);
        } else {
            $tampungan = "$field LIKE '%$keyword%'";
        }
        if ($keyword == '') {
            $this->db->query("SELECT products.*, category.category_name
                            FROM $this->table
                            JOIN category on products.id_category = category.id_category
                            LIMIT $limit");
        } else {
            $this->db->query("SELECT products.*, category.category_name
                            FROM $this->table
                            JOIN category on products.id_category = category.id_category WHERE $tampungan 
                            LIMIT $limit");
        }
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query("SELECT products.*, category.category_name
                            FROM $this->table
                            JOIN category on products.id_category = category.id_category
                            WHERE products.id_products = :id_products");
        $this->db->bind('id_products', $id);
        return $this->db->single();
    }

    public function tambahProduct($data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-d H:i:s", time());
        $query = "INSERT INTO products
                    VALUES
                    ('', :name, :image, :description, :price, :id_category, :link_gojek, :link_grab, :created_at, :update_at)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('id_category', $data['category']);
        $this->db->bind('link_gojek', $data['link_gojek']);
        $this->db->bind('link_grab', $data['link_grab']);
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

    public function editProduct($data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date("Y-m-d H:i:s", time());
        $query = "UPDATE products SET
                    name = :name,
                    image = :image,
                    description = :description,
                    price = :price,
                    id_category = :id_category,
                    link_gojek = :link_gojek,
                    link_grab = :link_grab,
                    update_at = :update_at
                    WHERE id_products = :id_products";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('id_category', $data['category']);
        $this->db->bind('link_gojek', $data['link_gojek']);
        $this->db->bind('link_grab', $data['link_grab']);
        $this->db->bind('update_at', $time);
        $this->db->bind('id_products', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getProductByKeyword($keyword)
    {
        $this->db->query("SELECT products.*, category.category_name
                            FROM $this->table
                            JOIN category on products.id_category = category.id_category
                            WHERE products.name LIKE :keyword OR category.category_name LIKE :keyword");
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
