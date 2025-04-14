<?php

class Livro{


    private $livros = [
        ['titulo' => 'De Sangue e Cinzas', 'Autor' => 'Jennifer L. Armentrout', 'AnoPublicacao'=> '2020'],
        ['titulo' => '1984', 'Autor' => 'George Orwell', 'AnoPublicacao' => '1949'],
        ['titulo' => 'Cem Anos de Solidão', 'Autor' => 'Gabriel García Márquez', 'AnoPublicacao' => '1967'],
        ['titulo' => 'A Hora da Estrela', 'Autor' => 'Clarice Lispector', 'AnoPublicacao' => '1977'],
        ['titulo' => 'Dom Casmurro ', 'Autor' => 'Machado de Assis', 'AnoPublicacao' => '1899']
    ];


    public function listarLivros(){
        return $this->livros;
    }
}

?>