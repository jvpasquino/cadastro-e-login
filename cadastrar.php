<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_db";

//aqui é a parte que eu vou criar a conexão
$conn  = new mysqli($servername, $username, $password, $dbname);

//Verifar a conexão
if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
}

//recebe os dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//adiciona as informações no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql) === TRUE){
    //header te redireciona automaticamente para a pagina selecionada
    header("Location: principal.html");
    exit();
}else{
    echo "Erro: ". $conn->error;
}

$conn->close();
?>