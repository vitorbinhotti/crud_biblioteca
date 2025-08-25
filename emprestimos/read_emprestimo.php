<?php
include '../banco-de-dados/db.php';
$result = $conn->query("SELECT * FROM emprestimos");

while ($row = $result->fetch_assoc()) {
    echo $row['id_emprestimos']." - Livro: ".$row['fk_livros']." - Leitor: ".$row['fk_leitores']." - ".$row['data_emprestimo']." até ".$row['data_devolucao']."<br>";
}
?>