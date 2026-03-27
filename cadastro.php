<?php
// Este arquivo é incluído pelo index.php dentro do .main
// Portanto padrao.css já está carregado.

$sucesso = '';
$erro    = '';

// Processa o formulário via AJAX/POST se enviado diretamente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_form_cadastro'])) {
    $nome   = trim($_POST['nome']   ?? '');
    $email  = trim($_POST['email']  ?? '');
    $acesso = trim($_POST['acesso'] ?? '');
    $status = trim($_POST['status'] ?? '');

    if ($nome && $email && $acesso && $status) {
        // Aqui viria a lógica de banco de dados
        $sucesso = "Usuário <strong>" . htmlspecialchars($nome) . "</strong> cadastrado com sucesso!";
    } else {
        $erro = "Preencha todos os campos obrigatórios.";
    }
}
?>

<div class="page-header">
    <div>
        <h1>Cadastrar Usuário</h1>
        <p class="page-subtitle">Preencha os dados para adicionar um novo usuário ao sistema</p>
    </div>
</div>

<?php if ($sucesso): ?>
    <div class="alert alert-success">✅ <?= $sucesso ?></div>
<?php endif; ?>

<?php if ($erro): ?>
    <div class="alert alert-danger">⚠ <?= htmlspecialchars($erro) ?></div>
<?php endif; ?>

<div class="form-container">

    <form action="index.php?page=cadastro" method="POST">
        <input type="hidden" name="_form_cadastro" value="1">

        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: João da Silva" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Ex: joao@empresa.com" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Mínimo 8 caracteres" required>
        </div>

        <div class="form-group">
            <label for="acesso">Nível de Acesso</label>
            <select id="acesso" name="acesso" required>
                <option value="">Selecione o nível</option>
                <option value="administrador">Administrador</option>
                <option value="moderador">Moderador</option>
                <option value="editor">Editor</option>
                <option value="usuario">Usuário</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="">Selecione o status</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">💾 Salvar Usuário</button>
            <button type="reset" class="btn-secondary">🗑 Limpar</button>
        </div>

    </form>

    <a href="index.php" class="btn-back">⬅ Voltar ao Dashboard</a>

</div>
