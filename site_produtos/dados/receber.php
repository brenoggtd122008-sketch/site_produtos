<?php
require "./init.php";

if (!isset($_POST["imagem"]) || !isset($_POST["nome"]) || !isset($_POST["descricao"]) || !isset($_POST["valor"]) || !isset($_POST["desconto"])) {
    echo "<script> alert('Os dados do produto não foram carregados ou encontrados, tente novamente...'); window.location.href = '../paginas/formulario.php'; </script>";
    exit;
}

$_SESSION["produtos"][] = [
    "imagem" => $_POST["imagem"],
    "nome" => $_POST["nome"],
    "descricao" => $_POST["descricao"],
    "valor" => $_POST["valor"],
    "desconto" => $_POST["desconto"]
];

header("Location: ../paginas/index.php");
?>