<div class="form-container">
    <h2>Cadastro de Usuário</h2>
    <p>Preencha os dados para adicionar um novo usuário</p>

    <form action="salvar_usuario.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite o e-mail" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite a senha" required>
        </div>

        <div class="form-group">
            <label for="acesso">Nível de Acesso</label>
            <select id="acesso" name="acesso" required>
                <option value="">Selecione</option>
                <option value="administrador">Administrador</option>
                <option value="moderador">Moderador</option>
                <option value="usuario">Usuário</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="">Selecione</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn salvar">Salvar</button>
            <button type="reset" class="btn cancelar">Cancelar</button>
        </div>
    </form>
</div>