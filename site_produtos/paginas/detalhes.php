<?php
require "./navbar.php";

if (!isset($_GET["id"])) {
    echo "<script>
            alert('[ERRO] - Os dados do produto não foram encontrados.');
            window.location.href = './index.php';
        </script>";
    exit;
}

$produto = $_SESSION["produtos"][$_GET["id"]];
?>

<title>BestBuyShop - Produto</title>

<div style="display: flex; gap: 50px; max-width: 1000px;">
    <img src="<?= $produto["imagem"]; ?>" width="400">

    <div>
        <h1><?= $produto["nome"]; ?></h1> <hr>
        <h2><?= $produto["descricao"]; ?></h2> <hr>
        <h2>R$ <?= number_format($produto["valor"], 2, ",", "."); ?></h2> <hr>
        <h2><?= $produto["desconto"] == 0 ?? null ? "Sem desconto" : $produto["desconto"] . "% de Desconto"; ?></h2>
    </div>
</div>
