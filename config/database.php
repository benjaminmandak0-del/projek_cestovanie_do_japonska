<?php

declare(strict_types=1);

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'weboldal';

function create_db_connection(): mysqli
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn->connect_errno) {
        throw new mysqli_sql_exception($conn->connect_error, $conn->connect_errno);
    }

    return $conn;
}
