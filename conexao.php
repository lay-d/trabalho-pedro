<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = "";          // senha do bancoS
$banco   = "lays_1d ";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "dwiwcjyni";  // exemplo: "meucloud123"
$api_key    = "356574788742319";     // exemplo: "123456789012345"
$api_secret = "F_CYNootw1vWgDtX5X73CKr4xlQ";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>

