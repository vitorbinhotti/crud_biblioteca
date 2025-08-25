<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano = $_POST['ano_nascimento'];

    $sql = "UPDATE autores SET nome='$nome', nacionalidade='$nacionalidade', ano_nascimento='$ano' WHERE id_autores=$id";
    $conn->query($sql);
}
?>

<form method="POST">
    ID: <input type="number" name="id"><br>
    Nome: <input type="text" name="nome"><br>
    Nacionalidade: <input type="text" name="nacionalidade"><br>
    Ano de nascimento: <input type="number" name="ano_nascimento"><br>
    <button type="submit">Atualizar</button>
</form>