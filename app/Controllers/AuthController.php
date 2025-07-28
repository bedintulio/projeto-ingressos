<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;

class AuthController extends Controller {
    public function loginForm() { $this->view('auth/login'); }
    public function registerForm() { $this->view('auth/register'); }
    public function login() { echo 'login'; }
    public function register() { echo 'register'; }
    public function logout() { Session::destroy(); header('Location: /login'); }
}