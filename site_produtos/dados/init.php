<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["site_info"]) && !isset($_SESSION["usuarios"]) && !isset($_SESSION["produtos"]) && !isset($_SESSION["status"])) {

    // Informações da Empresa
    $_SESSION["site_info"] = [
        "empresa" => "BestBuyShup",
        "slogan" => "Compras a qualquer momento do dia",
        "contatos" => ["email" => "bestbuyshop.support@email.com", "telefone" => "1198647432"]
    ];

    // Armazenamento dos Usuários
    $_SESSION["usuarios"] = [
        ["nome" => "Admin", "email" => "admin@email.com", "senha" => "admin1234"]
    ];

    // Armazenamento dos Produtos
    $_SESSION["produtos"] = [
        [
            "imagem" => "../imagens/produto_exemplo.jpg",
            "nome" => "Salgadinho", // Só pode ter 15 caractéres
            "descricao" => "Lanche para qualquer momento.", // Máximo de 50 caractéres
            "valor" => 13.60, // Valor máximo é R$ 10.000,00
            "desconto" => 7 // Desconto máximo é 100%
        ]
    ];

    // Status de Login
    $_SESSION["status"] = [
        "logado" => "Visitante",
        "usuario" => null
    ];
}

//session_destroy();
?>