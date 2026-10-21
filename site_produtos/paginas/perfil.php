<?php require "./navbar.php"; ?>

<title>BestBuyShop - Perfil</title>

<div class="perfil">
    <h1 id="img_nome"><img src="../imagens/perfil.png">Olá, <?= $_SESSION["status"]["logado"]; ?></h1><hr>

    <span id="informacoes">
        <h3>Email - <?= $_SESSION["status"]["usuario"]["email"] ?? "Sem registro"; ?></h3>
        <hr>
        <h3>Senha - <?= $_SESSION["status"]["usuario"]["senha"] ?? "Sem registro"; ?></h3>
        <hr>
    </span>

    <h3><a href="../logins/processar.php?login=sair">Sair</a></h3>
</div>

<style>
    .perfil {
        margin-left: 600px;
        text-align: center;

        user-select: none;

        padding: 20px;
        background-color: #dbdada;

        border: 1px solid gray;
        border-radius: 10px;
    }

    .perfil hr {
        border-color: gray;
    }

    .perfil a {
        color: blue;
        text-decoration: none;
    }

    #img_nome {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    #img_nome img {
        width: 150px;
        margin-bottom: 10px;
    }

    #informacoes {
        text-align: left;
    }
</style>