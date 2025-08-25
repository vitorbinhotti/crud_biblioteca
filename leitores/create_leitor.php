<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO leitores (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    $conn->query($sql);
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Telefone: <input type="text" name="telefone"><br>
    <button type="submit">Cadastrar</button>
</form>