<?php
class DBConnection
{
    function connect_to_db()
    {
        // Database credentials
        $host = 'localhost';
        $dbname = 'mydatabase';
        $username = 'root';
        $password = '';

        // PDO database connection
        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            return false;
        }
    }
}
