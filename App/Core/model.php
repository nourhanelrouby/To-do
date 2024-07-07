<?php

namespace MVC\Core;
use Dcblogdev\PdoWrapper\Database as Database;
use MVC\Config\config;

class model extends config
{
    public function DBconnection()
    {
        $options = [
            'username' => self::USERNAME,
            'database' => self::DATABASE,
            'password' => self::PASSWORD,
            'server' => self::SERVER,
            'type' => self::TYPE,
            'charset' => self::CHARSET,
            'port' => self::PORT
        ];
        try {
            return new Database($options);
        } catch (PDOException $e) {
            echo 'Connection failed ' . $e->getMessage();
        }
    }
}