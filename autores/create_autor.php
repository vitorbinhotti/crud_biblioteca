<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano = $_POST['ano_nascimento'];

    $sql = "INSERT INTO autores (nome, nacionalidade, ano_nascimento) 
            VALUES ('$nome', '$nacionalidade', '$ano')";
    $conn->query($sql);
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Nacionalidade: <input type="text" name="nacionalidade"><br>
    Ano de nascimento: <input type="number" name="ano_nascimento"><br>
    <button type="submit">Cadastrar</button>
</form>