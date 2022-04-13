<?php

namespace TestApp;

use Pimple\Psr11\Container;

class MailSender
{
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public static function factory(Container $container)
    {
        return new MailSender($container[ProductRepository::class]);
    }

    public function sentNewProductAddedEmail(Product $product)
    {
        // df;yjt
    }
}