<?php
session_start();

// Redireciona se já estiver logado
if (isset($_SESSION['logado'])) {
    header('Location: index.php');
    exit;
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['user'] ?? '');
    $pass = trim($_POST['pass'] ?? '');

    // Credenciais de acesso (idealmente viriam de banco de dados)
    if ($user === 'Guilherme' && $pass === '051007') {
        $_SESSION['logado']  = true;
        $_SESSION['usuario'] = $user;
        header('Location: index.php');
        exit;
    } else {
        $erro = 'Usuário ou senha inválidos. Verifique seus dados e tente novamente.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Sistema de Gestão</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-wrapper">

    <div class="login-brand">
        <div class="brand-icon">🏢</div>
        <h1>Sistema de Gestão</h1>
        <p>Acesse sua conta para continuar</p>
    </div>

    <div class="login-container">
        <h2>Bem-vindo!</h2>
        <p class="login-subtitle">Insira suas credenciais para acessar o painel</p>

        <?php if ($erro): ?>
            <div class="erro">⚠ <?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="input-group">
                <label for="user">Usuário</label>
                <input
                    type="text"
                    id="user"
                    name="user"
                    placeholder="Digite seu usuário"
                    value="<?= htmlspecialchars($_POST['user'] ?? '') ?>"
                    required
                    autocomplete="username"
                >
            </div>

            <div class="input-group">
                <label for="pass">Senha</label>
                <input
                    type="password"
                    id="pass"
                    name="pass"
                    placeholder="Digite sua senha"
                    required
                    autocomplete="current-password"
                >
            </div>

            <button type="submit">🔐 Entrar no Sistema</button>

        </form>

        <p class="login-footer">© <?= date('Y') ?> Sistema de Gestão. Todos os direitos reservados.</p>
    </div>

</div>

</body>
</html>
