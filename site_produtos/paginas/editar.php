<?php
require "./navbar.php";

if (!isset($_GET["id"])) {
    echo "<script>
            alert('[ERRO] - Os dados do produto não foram encontrados.');
            window.location.href = './index.php';
        </script>";
    exit;
}
?>

<title>BestBuyShop - Editar Produtos</title>
<link rel="stylesheet" href="../estilo/formulario.css">

<form action="../dados/edicao.php" method="get">
    <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">

    <h2>Edição de Produto</h2> <br><br>

    <input type="text" name="imagem" placeholder="Link da Imagem"> <br><br>

    <input type="text" name="nome" placeholder="Nome do Produto" maxlength="20"> <br><br>

    <input type="text" name="descricao" placeholder="Descrição do Produto" maxlength="50"> <br><br>

    <input type="number" step="any" name="valor" placeholder="Valor do Produto" min="0" max="10000"> <br><br>

    <input type="number" name="desconto" placeholder="Desconto do Produto" min="0" max="100" > <br><br>

    <button type="submit">Postar Produto</button>
</form>
