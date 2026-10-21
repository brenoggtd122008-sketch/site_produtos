<?php
require "../dados/init.php";

$logado = &$_SESSION["status"]["logado"];
$usuario = &$_SESSION["status"]["usuario"];

$login = $_POST["login"] ?? $_GET["login"] ?? null;
$nome = $_POST["nome"] ?? null;
$email = $_POST["email"] ?? null;
$senha = $_POST["senha"] ?? null;

if (!$login) {
    echo "<script> alert('[ERRO] - Falha no método de Login.'); window.location.href = './entrar.php'; </script>";
    exit;
}


if ($login === "entrar") {

    if (!$email || !$senha) {
        echo "<script> alert('[ERRO] - Email ou Senha não carregados.'); window.location.href = './entrar.php'; </script>";
        exit;
    }

    foreach ($_SESSION["usuarios"] as $info) {
        if ($info["email"] === $email || $info["senha"] === $senha) {
            $logado = $info["nome"];
            $usuario = $info;
            header("Location: ../paginas/index.php");
            exit;
        }
    }

    echo "<script> alert('O email ou senha estão incorretos, tente novamente...'); window.location.href = './entrar.php'; </script>";
    exit;
}

if ($login === "criar") {

    if (!$nome || !$email || !$senha) {
        echo "<script> alert('[ERRO] - Nome, Email ou Senha não carregados'); window.location.href = './criar.php'; </script>";
        exit;
    }

    foreach ($_SESSION["usuarios"] as $info) {
        if ($info["email"] === $email) {
            echo "<script> alert('Está conta já existe, tente novamente...'); window.location.href = './criar.php'; </script>";
            exit;
        }
    }

    $_SESSION["usuarios"][] = ["nome" => $nome,"email" => $email, "senha" => $senha];

    $logado = $nome;
    $usuario = ["nome" => $nome,"email" => $email, "senha" => $senha];

    header("Location: ../paginas/index.php");
}

if ($login === "sair") {
    $logado = "Visitante";
    $usuario = null;

    header("Location: ../paginas/index.php");
}
?>