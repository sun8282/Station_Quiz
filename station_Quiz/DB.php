<?php

class DB
{
    static $db = null;
    static function get()
    {
        if(!self::$db) {
            self::$db = new PDO("mysql:host=localhost; dbname=subway_Quiz; charset=utf8mb4", "root", "", [19 => 5, 3 => 2]);
        }
        return self::$db;
    }
}

function execute($sql, $data=[])
{
    $q = DB::get()->prepare($sql);
    return $q->execute($data);
}

function fetch($sql, $data=[])
{
    $q = DB::get()->prepare($sql);
    $q->execute($data);
    return $q->fetch();
}

function fetchAll($sql, $data=[])
{
    $q = DB::get()->prepare($sql);
    $q->execute($data);
    return $q->fetchAll();
}
