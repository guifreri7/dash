<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link rel="stylesheet" href="padrao.css">
<link rel="stylesheet" href="usuario1.css">

</head>

<body>

<div class="dashboard-container">

    <!-- MENU -->
    <div class="sidebar">
        <h2>Painel</h2>

        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="cadastro.php">Cadastrar Usuário</a></li>
            <li>Produtos</li>
            <li><a href="index.php?page=usuario">Usuário</a></li>
            <li>Relatórios</li>
            <li>Configurações</li>
            <li><a href="categoria.php">Categorias</a></li>
            <li><a href="postagem.php">Postagens</a></li>
            </li>
        </ul>
    </div>

    <!-- CONTEÚDO -->
    <div class="main">

        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        if ($page == 'usuario') {
            include 'usuario.php';
        } else {
        ?>

        <h1>Dashboard</h1>

        <div class="cards">
            <div class="card">
                <h3>Usuários</h3>
                <p>172</p>
            </div>

            <div class="card">
                <h3>Vendas</h3>
                <p>684</p>
            </div>

            <div class="card">
                <h3>Pedidos</h3>
                <p>-243</p>
            </div>
        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>