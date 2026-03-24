<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="cadastrocss1.css">
</head>

<body>

<div class="form-container">
    <h2>Cadastro de Usuário</h2>
    <p>Preencha os dados para adicionar um novo usuário</p>

    <form action="salvar_usuario.php" method="POST">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" required>
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" required>
        </div>

        <div class="form-group">
            <label>Nível de Acesso</label>
            <select name="acesso" required>
                <option value="">Selecione</option>
                <option value="administrador">Administrador</option>
                <option value="moderador">Moderador</option>
                <option value="usuario">Usuário</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" required>
                <option value="">Selecione</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>

    </form>

    <br>
    <a href="index.php">
        <button>⬅ Voltar ao Dashboard</button>
    </a>

</div>

</body>
</html>