<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $livro = $_POST['fk_livros'];
    $leitor = $_POST['fk_leitores'];
    $data_emp = $_POST['data_emprestimo'];
    $data_dev = $_POST['data_devolucao'];

    $sql = "INSERT INTO emprestimos (fk_livros, fk_leitores, data_emprestimo, data_devolucao) 
            VALUES ('$livro', '$leitor', '$data_emp', '$data_dev')";
    $conn->query($sql);
}
?>

<form method="POST">
    ID Livro: <input type="number" name="fk_livros"><br>
    ID Leitor: <input type="number" name="fk_leitores"><br>
    Data Empréstimo: <input type="date" name="data_emprestimo"><br>
    Data Devolução: <input type="date" name="data_devolucao"><br>
    <button type="submit">Cadastrar</button>
</form>