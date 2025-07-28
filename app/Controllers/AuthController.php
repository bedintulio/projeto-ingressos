<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session;

class AuthController extends Controller {
    public function loginForm() { $this->view('auth/login'); }
    public function registerForm() { $this->view('auth/register'); }
    public function login() { echo 'login completo'; }
    public function register() { echo 'registro completo'; }
    public function logout() { Session::destroy(); header('Location: /login'); }
}