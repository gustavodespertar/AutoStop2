<?php

//conexão com o banco de dados

$servername = "127.0.0.1"; //servidor do mysql
$username = "root"; //nome usuario mysql, utilizamos o padrão
$password = ""; // não utilizamos senha
$dbname = "autostop"; //nome do banco de dados

//criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar a conexão
if ($conn->connect_error ) {
    die("Conexão falhou: ".$conn->connect_error);
}

//verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //recuperando os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

//inserção dos dados na tabela do banco de dados

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    //verifica se a execução no SQL foi bem sucedida
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso. Volte à pagina anterior e faça o seu login";
} else {
    echo "Erro ".$sql. "<br>" .$conn->error;
}
}

//fechar a conexão com o banco de dados
$conn->close();
?>