<?php

class LoginController extends Controller {
    public function index() {
        $this->view('login');
    }

    public function login() {
        $user = $this->model('User');
        if ($user->checkLogin($_POST['username'], $_POST['password'])) {
            header('Location: /home');
        } else {
            echo "Invalid login credentials";
        }
    }
}
