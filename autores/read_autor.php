<?php
include '../banco-de-dados/db.php';
$result = $conn->query("SELECT * FROM autores");

while ($row = $result->fetch_assoc()) {
    echo $row['id_autores']." - ".$row['nome']." - ".$row['nacionalidade']." - ".$row['ano_nascimento']."<br>";
}
?>