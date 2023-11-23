<?php
// Conectar ao banco de dados SQLite
$db = new SQLite3('dados.db');

// Verificar se a tabela já existe, se não, criá-la
$query = 'CREATE TABLE IF NOT EXISTS respostas (id INTEGER PRIMARY KEY AUTOINCREMENT, nome TEXT, email TEXT, idade INTEGER)';
$db->exec($query);

// Obter os dados do formulário
$PrimeiraRes = $_POST['PrimeiraRes', 'SegundaRes'];

// Inserir os dados na tabela
$query = "INSERT INTO respostas (PrimeiraRes, SegundaRes) VALUES ('$PrimeiraRes', '$SegundaRes')";
$db->exec($query);

// Fechar a conexão com o banco de dados
$db->close();

// Redirecionar de volta para o formulário
header('Location: index.html');
?>