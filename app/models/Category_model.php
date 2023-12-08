<?php

class Category_model
{
    private $table = 'category';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCategory()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getAllCountCategory()
    {
        $query = "SELECT c.id_category, c.category_name, COUNT(p.id_products) as total_products 
                    FROM $this->table c
                    LEFT JOIN products p ON c.id_category = p.id_category 
                    GROUP BY c.id_category, c.category_name";

        $this->db->query($query);
        $countByCategory = $this->db->resultSet();
        // Buat map untuk menyimpan jumlah produk setiap kategori
        $countMap = [];
        foreach ($countByCategory as $row) {
            $countMap[$row['category_name']] = $row['total_products'];
        }
        return $countMap;
    }
}
