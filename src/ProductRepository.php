<?php

namespace TestApp;

class ProductRepository
{
    /**
     * @var \TestApp\Product[]
     */
    private array $storage;

    private static $instance;

    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }

    public function add(Product $product)
    {
        $this->storage[$product->getId()] = $product;
    }

    public function get($id): Product
    {
        return $this->storage[$id];
    }
}