<?php

class User extends Model {
    public function checkLogin($username, $password) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch();
    }
}
