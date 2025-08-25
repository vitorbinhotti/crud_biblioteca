<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE leitores SET nome='$nome', email='$email', telefone='$telefone' WHERE id_leitores=$id";
    $conn->query($sql);
}
?>

<form method="POST">
    ID: <input type="number" name="id"><br>
    Novo Nome: <input type="text" name="nome"><br>
    Novo Email: <input type="email" name="email"><br>
    Novo Telefone: <input type="text" name="telefone"><br>
    <button type="submit">Atualizar</button>
</form>