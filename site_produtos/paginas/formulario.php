<?php
require "./navbar.php";
?>

<title>BestBuyShop - Formulário</title>
<link rel="stylesheet" href="../estilo/formulario.css">

<form action="../dados/receber.php" method="post">
    <h2>Adicionamento de Produto</h2> <br><br>

    <input type="text" name="imagem" placeholder="Link da Imagem" required> <br><br>

    <input type="text" name="nome" placeholder="Nome do Produto" maxlength="20" required> <br><br>

    <input type="text" name="descricao" placeholder="Descrição do Produto" maxlength="50" required> <br><br>

    <input type="number" step="any" name="valor" placeholder="Valor do Produto" min="0" max="10000" required> <br><br>

    <input type="number" name="desconto" placeholder="Desconto do Produto" min="0" max="100" required> <br><br>

    <button type="submit">Postar Produto</button>
</form>