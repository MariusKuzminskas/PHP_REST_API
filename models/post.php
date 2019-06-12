<?php 
  class Post {
    // DB Stuff
    private $conn;
    private $table = 'posts';
    
    // Post Properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $id;
    public $author;
    public $created_at;

    // Constructor with DB 
    public function __constructor($db) {
      $this->conn = $db;
    }

    // Get posts
    public function read() {
      $query
    }
  }