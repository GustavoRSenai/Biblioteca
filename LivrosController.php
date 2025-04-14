<?php

require_once 'Livros.php';
require_once 'LivrosView.php';

class LivroController{

    private $model;

    public function __construct()
    {
        
        $this->model= new Livro();

    }

    public function listar(){
        $livros = $this->model->listarLivros();

        exibirLivros($livros);

    }
}
    $controler = new LivroController();

    $controler->listar();


?>

