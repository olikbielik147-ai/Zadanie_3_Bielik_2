<?php

namespace App;

use PDOException;

class QnA extends Database
{
    public function getAll(): array
    {
        try {
            $statement = $this->getConnection()->query('SELECT question, answer FROM qna');
            $data = $statement->fetchAll();
        } catch (PDOException $e) {
            return [];
        }
        if (!is_array($data)) {
            return [];
        }

        return $data;
    }
}
