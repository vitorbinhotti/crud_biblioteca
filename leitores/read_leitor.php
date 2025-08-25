<?php
include '../banco-de-dados/db.php';
$result = $conn->query("SELECT * FROM leitores");

while ($row = $result->fetch_assoc()) {
    echo $row['id_leitores']." - ".$row['nome']." - ".$row['email']." - ".$row['telefone']."<br>";
}
?>