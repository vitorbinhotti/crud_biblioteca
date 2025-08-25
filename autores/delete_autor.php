<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $conn->query("DELETE FROM autores WHERE id_autores=$id");
}
?>

<form method="POST">
    ID para excluir: <input type="number" name="id"><br>
    <button type="submit">Excluir</button>
</form>