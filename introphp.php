<?php
    $nivelAcesso = 2;
    if($nivelAcesso){
        echo '<span class="badge ativo">Administrador</span>';
    } else {
        echo '<span class="badge inativo">Usuário Comum</span>';
    }
?>

<style>
.badge {
    display: inline-block;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 20px;
    color: #fff;
    font-family: Arial, sans-serif;
}

.badge.ativo {
    background-color: #28a745; /* verde */
}

.badge.inativo {
    background-color: #ff0000; /* cinza */
}
</style>

<?php
    echo "<select name='ano'>";
    for ($i = 2026; $i >= 1950; $i--) {
        echo "<option value='$i'>Ano $i</optio"
    }
<?php
    $pesquisa = $_GET['busca'];
    echo "Você pesquisou por: " . $pesquisa;
?>

<?php
    $usuario = $_POST['nome'];
    $senha = $_POST['senha'];

    echo "Usuário " . $usuario . " e senha " . "cadastrados com sucesso!";
?>    