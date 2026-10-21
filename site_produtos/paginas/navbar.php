<?php require "../dados/init.php"; ?>

<link rel="icon" href="../imagens/logo.png">

<nav class="navbar">
    <p><img src="../imagens/logo.png">BestBuyShop</p>
    <hr style="width: 100;">

    <span class="paginas">
        <a href="./index.php">Home</a>
        <a href="./admin.php">Administração</a>
    </span>
    <hr style="width: 100;">

    <?php
    $status = false;

    $link_entrar = "../logins/entrar.php";
    $link_perfil = "./perfil.php";

    if ($_SESSION["status"]["logado"] === "Visitante") {
        echo "<a id='perfil' href=$link_entrar><img src='../imagens/perfil.png'>Entrar</a>";
    } else {
        echo "<a id='perfil' href=$link_perfil><img src='../imagens/perfil.png'>Perfil</a>";
    }
    ?>
</nav>

<style>
    * {
        font-family: system-ui;
        font-style: italic;
    }

    body {
        margin: 0;

        width: 100%;
        height: 100vh;

        display: flex;
        align-items: center;
    }

    .navbar {
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 10px;

        width: 90px;
        padding: 20px;
        
        border: 1px solid grey;
        border-radius: 0 15px 15px 0;
        background-color: rgb(100, 100, 100, 0.15);

        margin-right: 50px;
    }

    .navbar p {
        color: blue;
        font-weight: bold;

        margin: 0;
        text-align: center;
    }

    .navbar p img {
        height: 80px;
    }

    .navbar a {
        display: inline-flex;

        margin: 5px;
        padding: 10px;

        color: black;
        text-decoration: none;

        transition: .5s ease;
    }

    .navbar a:hover {
        color: blue;
        transform: translateY(-6px);
    }

    .paginas {
        text-align: center;
    }

    #perfil {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    #perfil img {
        height: 30px;
    }
</style>