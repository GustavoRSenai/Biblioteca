<?php

function exibirLivros($livros){


echo "<ul>";

foreach($livros as $livro){

    echo "<li>{$livro['titulo']} - {$livro[ 'Autor']}, {$livro[ 'AnoPublicacao']} </li>";
}

echo "</ul>";






}
?>