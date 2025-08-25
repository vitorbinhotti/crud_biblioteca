<?php
include '../banco-de-dados/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $livro = $_POST['fk_livros'];
    $leitor = $_POST['fk_leitores'];
    $data_emp = $_POST['data_emprestimo'];
    $data_dev = $_POST['data_devolucao'];

    $sql = "UPDATE emprestimos SET fk_livros='$livro', fk_leitores='$leitor', data_emprestimo='$data_emp', data_devolucao='$data_dev' WHERE id_emprestimos=$id";
    $conn->query($sql);
}
?>

<form method="POST">
    ID: <input type="number" name="id"><br>
    Livro: <input type="number" name="fk_livros"><br>
    Leitor: <input type="number" name="fk_leitores"><br>
    Data Empréstimo: <input type="date" name="data_emprestimo"><br>
    Data Devolução: <input type="date" name="data_devolucao"><br>
    <button type="submit">Atualizar</button>
</form>