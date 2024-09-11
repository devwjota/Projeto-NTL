<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['Nome'];
    $sobrenome = $_POST['Sobrenome'];
    $idade = $_POST['Idade'];
    $celular = $_POST['Celular'];
    $principal = $_POST['Principal'];
    $whatsapp = $_POST['WhatsApp'];
    $email = $_POST['E-mail'];
    $corporativo = $_POST['Corporativo'];

    $sql = "INSERT INTO formulario (nome, sobrenome, idade, celular, principal, whatsapp, email, corporativo) VALUES ('$nome', '$sobrenome', $idade, '$celular', '$principal', '$whatsapp', '$email', '$corporativo')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>