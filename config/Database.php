<?php
  class Database {
    // DB params
    private $host = 'localhost';
    private $db_name = "u789430148_test"
    private $username = "u789430148_test"
    private $password = "Zw9EZiH6br08"
    private $conn;

    // DB connect
    public function connect() {
      $this->conn = null;

      try {
        $this->conn = new PDO('mysql:host=' . $his->host . ';dbname=' . $this->db_name, $this->username, $this->password);
      } catch(PDOExeption $e) {
        echo "connection Error: " . $e->getMessage();
      }
    }
  }