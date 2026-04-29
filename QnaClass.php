<?php

namespace App;

class QnA
{
    public function getAll(): array
    {
        $path = __DIR__ . '/data/data.json';

        if (!file_exists($path)) {
            return [];
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (!is_array($data)) {
            return [];
        }

        return $data;
    }
}
