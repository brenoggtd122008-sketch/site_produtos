<link rel="stylesheet" href="../estilo/login.css">
<link rel="icon" href="../imagens/logo.png">

<title>BestBuyShop - Criar</title>

<form action="./processar.php" method="post">
    <input type="hidden" name="login" value="criar">    

    <span id="titulo">
        <h3>Criar</h3>
        <img src="../imagens/logo.png" width="50px">
    </span>

    <span>
        <label for="nome">Nome</label> <br>
        <input type="text" placeholder="Nome..." name="nome" maxlength="30" required> <br><br>
    </span>

    <span>
        <label for="email">Email</label> <br>
        <input type="email" placeholder="Email..." name="email" maxlength="50" required> <br><br>
    </span>

    <span>
        <label for="senha">Senha</label> <br>
        <input type="password" placeholder="Senha..." name="senha" maxlenght="50" required> <br><br>
    </span>

    <button type="submit">Criar</button>

    <p>Já possui uma conta? <a href="./entrar.php">Entrar</a></p>
    <a id="voltar" href="../paginas/index.php">Voltar</a>
</form>
