<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano_publicacao'];
    $autor = $_POST['fk_autor'];

    $sql = "INSERT INTO livros (titulo, genero, ano_publicacao, fk_autor) 
            VALUES ('$titulo', '$genero', '$ano', '$autor')";
    $conn->query($sql);
}
?>

<form method="POST">
    Título: <input type="text" name="titulo"><br>
    Gênero: <input type="text" name="genero"><br>
    Ano Publicação: <input type="number" name="ano_publicacao"><br>
    ID Autor: <input type="number" name="fk_autor"><br>
    <button type="submit">Cadastrar</button>
</form>