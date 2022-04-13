<?php

namespace TestApp;

use Pimple\Container;

class ProductRepository
{
    /**
     * @var \TestApp\FileDatabase
     */
    private FileDatabase $storage;

    public static function factory(Container $container)
    {
        return new ProductRepository($container[FileDatabase::class]);
    }

    public function __construct(FileDatabase $storage)
    {
        $this->storage = $storage;
    }

    public function add(Product $product)
    {
        $this->storage->insert($product->getId(), $product);
    }

}