<?php

namespace database;

use mysqli;

class CreateDb
{
    protected mysqli $db;

    public function __construct()
    {
        $this->db = new mysqli(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), '');
    }

    public static function create()
    {
        $createDb = new CreateDb();
        $dbName = env('DB_DATABASE');
        $createDb->createDb($dbName);
    }

    protected function createDb($dbName)
    {
        $this->db->query("CREATE DATABASE IF NOT EXISTS $dbName");
    }
}
