<?php
namespace App\Controllers;
use Core\Controller;

class CompraController extends Controller {
    public function carrinho() { echo 'ver carrinho'; }
    public function addCarrinho() { echo 'adicionar carrinho'; }
    public function finalizar() { echo 'finalizar compra'; }
    public function historico() { echo 'historico de compras'; }
    public function pdf() { echo 'gerar pdf'; }
}