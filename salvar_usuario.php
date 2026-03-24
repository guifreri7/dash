<?php

// Pegando dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$acesso = $_POST['acesso'];
$status = $_POST['status'];

// Simulação de salvamento (sem banco ainda)
echo "<h2>Usuário cadastrado com sucesso!</h2>";

echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Acesso: " . $acesso . "<br>";
echo "Status: " . $status . "<br>";

echo "<br><a href='index.php'>Voltar ao Dashboard</a>";

?>