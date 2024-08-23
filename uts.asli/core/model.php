<?php

class Model {
    protected $db;

    public function __construct() {
        // Simple database connection (PDO)
        $this->db = new PDO('mysql:host=localhost;dbname=my_mvc_website', 'root', '');
    }
}
