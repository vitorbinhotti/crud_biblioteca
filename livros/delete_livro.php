<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $conn->query("DELETE FROM livros WHERE id_livro=$id");
}
?>

<form method="POST">
    ID para excluir: <input type="number" name="id"><br>
    <button type="submit">Excluir</button>
</form>