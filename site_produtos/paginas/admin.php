<?php
require "./navbar.php";

if ($_SESSION["status"]["logado"] === "Visitante") {
    echo "<script>
        alert('Você não está logado em uma conta para usar a Administração, faça login e tente novamente...');
        window.location.href = './index.php';
    </script>";
    exit;
}

$cor = "white";
?>

<link rel="stylesheet" href="../estilo/admin.css">
<title>BestBuyShop - Administração</title>

<table border="1" cellpadding="15">
    <thead>
        <tr>
            <th colspan="4"><h2>REGISTROS DE PRODUTOS</h2></th>
        </tr>
    </thead>

    <tr>
        <th>ID</th>
        <th id="produtos">PRODUTOS</th>
        <th>EDITAR</th>
        <th>DELETAR</th>
    </tr>

    <?php foreach ($_SESSION["produtos"] as $id => $info): ?>
        <tr>
            <td style="background-color: <?= $cor; ?>;"><?= $id; ?></th>
            <td style="background-color: <?= $cor; ?>;"><?= $info["nome"]; ?></td>
            <td style="background-color: <?= $cor; ?>;"><a href="./editar.php?id=<?= $id; ?>">[...]</a></td>
            <td style="background-color: <?= $cor; ?>;"><a href="./deletar.php?id=<?= $id; ?>">Excluír</a></td>
        </tr>

        <?php if ($cor == "white") {$cor = "#b3b3b3b1";} else {$cor = "white";} ?>
    <?php endforeach; ?>
</table>