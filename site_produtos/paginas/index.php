<?php require "./navbar.php"; ?>

<link rel="stylesheet" href="../estilo/index.css">
<title>BestBuyShop - Home</title>

<div class="produtos">
    <?php foreach ($_SESSION["produtos"] as $id => $produto):
        $valor = $produto["valor"];
        $valor_formatado = number_format($valor, 2, ",", ".");

        $desconto = $produto["desconto"] != 0 ? $produto["desconto"] : null;
        $descontado = isset($desconto) ? number_format($valor * ((100 - $desconto) / 100), 2, ",", ".") : null;
    ?>
        <a class="produto" href="./detalhes.php?id=<?= $id; ?>">
            <img src="<?= $produto["imagem"]; ?>" height="80"> <hr>

            <p><?= $produto["nome"]; ?></p> <hr>

            <?= isset($desconto) ? "<p id='descontado'>R$<span>$valor_formatado</span></p>" : null; ?>
            <p>R$<?= isset($descontado) ? $descontado : $valor_formatado; ?></p> <hr>

            <p>-- Desconto --</p>
            <p id="desconto"><?= isset($desconto) ? "$desconto%" : "Sem desconto"; ?></p>
        </a>
    <?php endforeach; ?>

    <?= $_SESSION["status"]["logado"] === "Visitante" ? null : "<a class='adicionar' href='./formulario.php'>Adicionar produto</a>"; ?>
</div>