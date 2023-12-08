<?php

class BestSeller_model
{
    private $table = 'best_seller';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBestSeller()
    {
        $this->db->query("SELECT best_seller.urutan,best_seller.id_best_seller, category.category_name,
                            products.*
                            FROM $this->table
                            INNER JOIN products on best_seller.id_products = products.id_products
                            INNER JOIN category on products.id_category = category.id_category
                            ORDER BY best_seller.urutan ASC");
        return $this->db->resultSet();
    }

    public function tambahBestSeller($data)
    {
        $name = $data["name"];
        $urutan = $data["urutan"];

        // get products by name
        $this->db->query("SELECT * FROM products WHERE name = '$name'");
        $products = $this->db->single();
        $bestSeller = $this->getAllBestSeller();
        $id = $products['id_products'];

        foreach ($bestSeller as $best) {
            // apabila ada id yang sama gagalkan
            if ($id == $best['id_products']) {
                return 0;
            }
            if ($best['urutan'] == $urutan) {
                return 0;
            }
        }
        $query = "INSERT INTO best_seller
                    VALUES
                    ('', :id, :urutan)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('urutan', $data['urutan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
