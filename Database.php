<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    protected ?PDO $connection = null;

    public function __construct()
    {
        $config = require __DIR__ . '/config.php';

        try {
            $dsn = sprintf(
                'mysql:host=%s;dbname=%s;charset=%s',
                $config['host'],
                $config['dbname'],
                $config['charset']
            );

            $this->connection = new PDO($dsn, $config['username'], $config['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Chyba pripojenia k databaze: ' . $e->getMessage());
        }
    }

    protected function getConnection(): PDO
    {
        return $this->connection;
    }
}
