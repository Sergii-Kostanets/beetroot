<?php

require '../vendor/autoload.php';

use Pimple\Container;
use TestApp\Controllers\ProductController;
use TestApp\FileDatabase;
use TestApp\MailSender;
use TestApp\ProductRepository;

$container = new Container();

$container['database_file'] = '/tmp/database.txt';

$container[FileDatabase::class] = [FactoryDatabase::class, 'factory'];
$container[ProductRepository::class] = [ProductRepository::class, 'factory'];
$container[MailSender::class] = [MailSender::class, 'factory'];
$container[ProductController::class] = [ProductController::class, 'factory'];