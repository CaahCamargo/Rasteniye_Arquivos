<?php
include 'cultura.php'; // Inclui o arquivo de autenticação

if(isset($_POST['btnCadastraCultura'])) {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $caracteristicas = $_POST['caracteristicas'];
    $umidade = $_POST['umidade'];
    $armazenamento = $_POST['armazenamento'];
    
    cadastrarCultura($nome, $tipo, $descricao, $caracteristicas, $umidade, $armazenamento);
}
?>