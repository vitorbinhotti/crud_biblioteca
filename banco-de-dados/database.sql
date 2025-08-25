create database biblioteca_db;
use biblioteca_db;

create table autores (
	id_autores int auto_increment primary key,
	nome varchar(100) not null,
	nacionalidade varchar(85) not null,
	ano_nascimento year not null
)

create table livros (
	id_livro int AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(100) not null,
    genero varchar(85) not null,
    ano_publicacao year not null,
    fk_autor int not null,
    FOREIGN KEY (fk_autor) REFERENCES autores (id_autores)
)

create table leitores (
	id_leitores int not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    email varchar(85) not null,
    telefone varchar(85) not null
)

create table emprestimos (
	id_emprestimos int not null AUTO_INCREMENT PRIMARY KEY,
    data_emprestimo date not null,
    data_devolucao date not null,
    fk_livros int not null,
    fk_leitores int not null,
    FOREIGN KEY (fk_livros) REFERENCES livros (id_livro),
    FOREIGN KEY (fk_leitores) REFERENCES leitores (id_leitores)
)
