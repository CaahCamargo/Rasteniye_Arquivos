<?php

function cadastrarCultura($nome, $tipo, $descricao, $caracteristicas, $umidade, $armazenamento) {
    include 'conexao.php'; // Inclui o arquivo de conexão

    try {
        $stmt = $conn->prepare("INSERT INTO cultura (tipCult, deCult, umidCult, carCult, armazenamento, nome) VALUES (:tipo, :descricao, :umidade, :caracteristicas, :armazenamento, :nome)");
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':umidade', $umidade);
        $stmt->bindParam(':caracteristicas', $caracteristicas);
        $stmt->bindParam(':armazenamento', $armazenamento);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    
        echo "Cultura cadastrada com sucesso!";
        header('Location: ../index.php');
        exit();

    } catch (PDOException $e) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao cadastrar a cultura!');
        window.location.href='../cadastraCultura.php'
        </script>";
    } 
}
?>
