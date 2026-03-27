<?php
// Incluído pelo index.php — padrao.css e usuario1.css já estão carregados
?>

<div class="header-content" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px;">
    <div>
        <h2>👥 Gestão de Usuários</h2>
        <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
    </div>
    <a href="index.php?page=cadastro" class="btn">➕ Cadastrar Usuário</a>
</div>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Acesso</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Guilherme Freri</td>
                <td>guicfreri@gmail.com</td>
                <td class="acesso-admin">Administrador</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td>✏ Editar</td>
            </tr>
            <tr>
                <td>02</td>
                <td>Gustavo Puga</td>
                <td>puga@gmail.com</td>
                <td class="acesso-usuario">Usuário</td>
                <td><span class="badge inativo">Inativo</span></td>
                <td>✏ Editar</td>
            </tr>
            <tr>
                <td>03</td>
                <td>Kayky</td>
                <td>CG125@gmail.com</td>
                <td class="acesso-moderador">Moderador</td>
                <td><span class="badge inativo">Inativo</span></td>
                <td>✏ Editar</td>
            </tr>
            <tr>
                <td>04</td>
                <td>João Amaral</td>
                <td>amaralzinho@gmail.com</td>
                <td class="acesso-editor">Editor</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td>✏ Editar</td>
            </tr>
        </tbody>
    </table>
</div>
