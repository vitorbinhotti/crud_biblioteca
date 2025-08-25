<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano_publicacao'];
    $autor = $_POST['fk_autor'];

    $sql = "UPDATE livros SET titulo='$titulo', genero='$genero', ano_publicacao='$ano', fk_autor='$autor' WHERE id_livro=$id";
    $conn->query($sql);
}
?>

<form method="POST">
    ID: <input type="number" name="id"><br>
    Novo Título: <input type="text" name="titulo"><br>
    Novo Gênero: <input type="text" name="genero"><br>
    Novo Ano: <input type="number" name="ano_publicacao"><br>
    Novo Autor: <input type="number" name="fk_autor"><br>
    <button type="submit">Atualizar</button>
</form>