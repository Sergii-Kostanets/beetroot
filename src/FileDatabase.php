<?php

namespace TestApp;

use Pimple\Container;

class FileDatabase
{
    private $file;

    public function __construct(string $filename)
    {
        if(!file_exists($filename)){
            touch($filename);
        }
        $this->file = fopen($filename, 'rw+');
    }

    public static function factory(Container $container)
    {
        return new FileDatabase($container['database_file']);
    }

    public function insert(int $id, $data)
    {
        fwrite($this->file, $id . ', ' . serialize($data));
    }

    // public function load()
}