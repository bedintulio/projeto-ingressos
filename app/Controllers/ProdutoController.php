<?php
namespace App\Controllers;
use Core\Controller;

class ProdutoController extends Controller {
    public function index() { echo 'lista produtos'; }
    public function createForm() { echo 'form criar produto'; }
    public function store() { echo 'salvar produto'; }
    public function editForm() { echo 'form editar produto'; }
    public function update() { echo 'atualizar produto'; }
    public function delete() { echo 'deletar produto'; }
}