<?php

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_parameters.php'; // Нужно переименовать фаил db_parameters_up.php
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}