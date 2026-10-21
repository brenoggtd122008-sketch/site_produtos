<link rel="stylesheet" href="../estilo/login.css">
<link rel="icon" href="../imagens/logo.png">

<title>BestBuyShop - Entrar</title>

<form action="./processar.php" method="post">
    <input type="hidden" name="login" value="entrar">

    <span id="titulo">
        <h3>Entrar</h3>
        <img src="../imagens/logo.png" width="50px">
    </span>

    <span>
        <label for="email">Email</label> <br>
        <input type="email" placeholder="Email..." name="email" required> <br><br>
    </span>

    <span>
        <label for="senha">Senha</label> <br>
        <input type="password" placeholder="Senha..." name="senha" required> <br><br>
    </span>

    <button type="submit">Entrar</button>

    <p>Não possui uma conta? <a href="./criar.php">Criar</a></p>
    <a id="voltar" href="../paginas/index.php">Voltar</a>
</form>
