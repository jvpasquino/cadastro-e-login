<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Erro na conexão");
}

$email = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    header("Location: principal.html");
    exit();
}else{
    echo "Login invalido!";
}

$conn->close();
?>