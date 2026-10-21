<?php
require "./init.php";

if (!isset($_GET["id"])) {
    echo "<script>
        alert('[ERRO] - Os id do produto não foi carregado ou encontrado...'); window.location.href = '../paginas/editar.php';
    </script>";
    exit;
}

$produto = &$_SESSION["produtos"][$_GET["id"]];

if ($_GET["imagem"] != "" || $_GET["imagem"] != null) {
    $produto["imagem"] = $_GET["imagem"];
}

if ($_GET["nome"] != "" || $_GET["nome"] != null) {
    $produto["nome"] = $_GET["nome"];
}

if ($_GET["descricao"] != "" || $_GET["descricao"] != null) {
    $produto["descricao"] = $_GET["descricao"];
}

if ($_GET["valor"] != "" || $_GET["valor"] != null) {
    $produto["valor"] = $_GET["valor"];
}

if ($_GET["desconto"] != "" || $_GET["desconto"] != null) {
    $produto["desconto"] = $_GET["desconto"];
}

header("Location: ../paginas/index.php");
?>