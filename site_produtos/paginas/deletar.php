<?php
require "../dados/init.php";

if (!isset($_GET["id"])) {
    echo "<script> alert('[ERRO] - Dados do produto não encontrados'); window.location.href = './admin.php'; </script>";
    exit;
}

unset($_SESSION["produtos"][$_GET["id"]]);
header("Location: ./admin.php")
?>