<?php
include '../banco-de-dados/db.php';
$result = $conn->query("SELECT * FROM livros");

while ($row = $result->fetch_assoc()) {
    echo $row['id_livro']." - ".$row['titulo']." - ".$row['genero']." - ".$row['ano_publicacao']." - Autor: ".$row['fk_autor']."<br>";
}
?>