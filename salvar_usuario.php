<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nome   = htmlspecialchars(trim($_POST['nome']   ?? ''));
$email  = htmlspecialchars(trim($_POST['email']  ?? ''));
$acesso = htmlspecialchars(trim($_POST['acesso'] ?? ''));
$status = htmlspecialchars(trim($_POST['status'] ?? ''));

$erros = [];

if (!$nome)   $erros[] = 'Nome é obrigatório.';
if (!$email || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
               $erros[] = 'E-mail inválido.';
if (!$acesso) $erros[] = 'Nível de acesso é obrigatório.';
if (!$status) $erros[] = 'Status é obrigatório.';

// Simulação: em produção, aqui seria INSERT no banco de dados
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado — Sistema de Gestão</title>
    <link rel="stylesheet" href="padrao.css">
    <style>
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 30px; }
        .result-box { max-width: 500px; width: 100%; background: linear-gradient(145deg, #112419, #0b1811); border: 1px solid #1c3a2a; border-radius: 18px; padding: 36px; box-shadow: 8px 8px 24px rgba(0,0,0,0.5); }
        .result-box h2 { font-size: 22px; margin-bottom: 20px; }
        .data-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(28,58,42,0.5); font-size: 14px; }
        .data-row:last-of-type { border-bottom: none; }
        .data-label { color: #a7f3d0; font-weight: 600; }
        .data-value { color: #e5f3ea; }
        .actions { margin-top: 24px; display: flex; gap: 10px; }
    </style>
</head>
<body>

<div class="result-box">

    <?php if (!empty($erros)): ?>

        <h2 style="color:#fca5a5;">⚠ Erro no Cadastro</h2>
        <div class="alert alert-danger" style="margin-bottom:16px;">
            <?php foreach ($erros as $e): ?>
                <div>• <?= $e ?></div>
            <?php endforeach; ?>
        </div>

    <?php else: ?>

        <h2 style="color:#6ee7b7;">✅ Usuário Cadastrado!</h2>
        <p style="color:#9ccfb5;margin-bottom:20px;font-size:14px;">Os dados foram salvos com sucesso.</p>

        <div class="data-row">
            <span class="data-label">Nome</span>
            <span class="data-value"><?= $nome ?></span>
        </div>
        <div class="data-row">
            <span class="data-label">E-mail</span>
            <span class="data-value"><?= $email ?></span>
        </div>
        <div class="data-row">
            <span class="data-label">Nível de Acesso</span>
            <span class="data-value"><?= ucfirst($acesso) ?></span>
        </div>
        <div class="data-row">
            <span class="data-label">Status</span>
            <span class="data-value">
                <span class="badge <?= $status ?>"><?= ucfirst($status) ?></span>
            </span>
        </div>

    <?php endif; ?>

    <div class="actions">
        <a href="index.php" class="btn">🏠 Voltar ao Dashboard</a>
        <a href="index.php?page=cadastro" class="btn-secondary">➕ Novo Cadastro</a>
    </div>

</div>

</body>
</html>
