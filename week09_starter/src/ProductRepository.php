<?php

namespace CSIS3280;

class ProductRepository
{
    private ?\PDO $connection = NULL;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    public function insert(string $description, float $price): int
    {
        
    }

    public function findAll(): array
    {
        if (NULL == $this->connection) return [];

        $sql = 'SELECT * FROM product';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $products = $stmt->fetchAll();

        return $products;
    }

    public function find(int $id): ?Product
    {
        if (NULL == $this->connection) return NULL;

        $sql = 'SELECT * FROM product WHERE id = :id';
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_CLASS, Product::class);
        $product = $stmt->fetch();

        if ($product == false) {
            return NULL;
        }

        return $product;
    }

    public function update(int $id, string $description, float $price): bool
    {
        
    }

    public function delete(int $id): bool
    {
        
    }
    
    public function deleteAll(): int
    {
        
    }        

    

}