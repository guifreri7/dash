<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

$usuario = htmlspecialchars($_SESSION['usuario'] ?? 'Usuário');
$page    = $_GET['page'] ?? 'home';
$allowed = ['usuario', 'postagem', 'cadastro', 'categoria'];
if (!in_array($page, $allowed)) {
    $page = 'home';
}

$titles = [
    'home'      => 'Dashboard',
    'usuario'   => 'Gestão de Usuários',
    'postagem'  => 'Postagens',
    'cadastro'  => 'Cadastrar Usuário',
    'categoria' => 'Categorias',
];

$currentTitle = $titles[$page] ?? 'Dashboard';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $currentTitle ?> — Sistema de Gestão</title>
    <link rel="stylesheet" href="padrao.css">
    <link rel="stylesheet" href="usuario1.css">
    <link rel="stylesheet" href="postagens.css">
</head>
<body>

<div class="dashboard-container">

    <!-- ======= SIDEBAR ======= -->
    <div class="sidebar">
        <div class="brand">
            <div class="brand-icon">🏢</div>
            <h2>Gestão</h2>
        </div>

        <ul>
            <li>
                <a href="index.php" class="<?= $page === 'home' ? 'active' : '' ?>">
                    <span class="nav-icon">🏠</span> Início
                </a>
            </li>
            <li>
                <a href="index.php?page=usuario" class="<?= $page === 'usuario' ? 'active' : '' ?>">
                    <span class="nav-icon">👥</span> Usuários
                </a>
            </li>
            <li>
                <a href="index.php?page=cadastro" class="<?= $page === 'cadastro' ? 'active' : '' ?>">
                    <span class="nav-icon">➕</span> Cadastrar Usuário
                </a>
            </li>
            <li>
                <a href="index.php?page=categoria" class="<?= $page === 'categoria' ? 'active' : '' ?>">
                    <span class="nav-icon">🗂</span> Categorias
                </a>
            </li>
            <li>
                <a href="index.php?page=postagem" class="<?= $page === 'postagem' ? 'active' : '' ?>">
                    <span class="nav-icon">📝</span> Postagens
                </a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <a href="logout.php">
                <span class="nav-icon">🚪</span> Sair
            </a>
        </div>
    </div>

    <!-- ======= CONTEÚDO PRINCIPAL ======= -->
    <div class="main">

        <?php if ($page === 'home'): ?>

            <div class="page-header">
                <div>
                    <h1>Dashboard</h1>
                    <p class="page-subtitle">Bem-vindo, <?= $usuario ?>! Aqui está o resumo do sistema.</p>
                </div>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-icon">👤</div>
                    <h3>Usuários</h3>
                    <p>172</p>
                    <div class="card-trend">↑ 8% este mês</div>
                </div>
                <div class="card">
                    <div class="card-icon">💰</div>
                    <h3>Vendas</h3>
                    <p>684</p>
                    <div class="card-trend">↑ 12% este mês</div>
                </div>
                <div class="card">
                    <div class="card-icon">📦</div>
                    <h3>Pedidos</h3>
                    <p>243</p>
                    <div class="card-trend">↓ 3% este mês</div>
                </div>
                <div class="card">
                    <div class="card-icon">📝</div>
                    <h3>Postagens</h3>
                    <p>38</p>
                    <div class="card-trend">↑ 5% este mês</div>
                </div>
            </div>

        <?php elseif ($page === 'usuario'): ?>
            <?php include 'usuario.php'; ?>

        <?php elseif ($page === 'postagem'): ?>
            <?php include 'postagem.php'; ?>

        <?php elseif ($page === 'cadastro'): ?>
            <?php include 'cadastro.php'; ?>

        <?php elseif ($page === 'categoria'): ?>
            <?php include 'categoria.php'; ?>

        <?php endif; ?>

    </div><!-- /main -->

</div><!-- /dashboard-container -->

</body>
</html>
