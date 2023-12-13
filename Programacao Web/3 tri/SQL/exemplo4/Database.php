<?php

require_once("config.php");

final class Database {

    private $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . BASE, USER, PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function select($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

        foreach($binds as $attr => $value) {
            $stmt->bindValue($attr, $value);
        }

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function execute($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

        foreach($binds as $attr => $value) {
            $stmt->bindValue($attr, $value);
        }

        $stmt->execute();
    }
    public function getLastInsertId() {
        return $this->connection->getLastInsertId();
    }

    public function __destruct() {
        $this->connection = null;
    }
}