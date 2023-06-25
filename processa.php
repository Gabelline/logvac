<?php

session_start(); //Iniciar a sessao

//Limpar o buffer de saida
ob_start();

//Incluir a conexao com BD
include_once "conexao.php";

//Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

//Verificar se o usuario clicou no botao
if (!empty($dados['CadUsuario'])) {
    $query_usuario = "INSERT INTO usuarios 
                (nome, email, idade, sexo, escolaridade, regiao, estado, cidade) VALUES
                (:nome, :email, :idade, :sexo, :escolaridade, :regiao, :estado, :cidade )";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':idade', $dados['idade'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':sexo', $dados['sexo'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':escolaridade', $dados['escolaridade'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':regiao', $dados['regiao'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
    $cad_usuario->execute();
    //var_dump($conn->lastInsertId());
    //Recuperar o ultimo id inserido
    $id_usuario = $conn->lastInsertId();

    $query_regivac = "INSERT INTO registrovac 
                (nomevac, local_de_apli, lote, dose, reforco, usuario_id) VALUES 
                (:nomevac, :local_de_apli, :lote, :dose, :reforco, :usuario_id)";
    $cad_regivac = $conn->prepare($query_regivac);
    $cad_regivac->bindParam(':nomevac', $dados['nomevac'], PDO::PARAM_STR);
    $cad_regivac->bindParam(':local_de_apli', $dados['local_de_apli'], PDO::PARAM_STR);
    $cad_regivac->bindParam(':lote', $dados['lote'], PDO::PARAM_STR);
    $cad_regivac->bindParam(':dose', $dados['dose'], PDO::PARAM_STR);
    $cad_regivac->bindParam(':reforco', $dados['reforco'], PDO::PARAM_STR);
    $cad_regivac->bindParam(':usuario_id', $id_usuario, PDO::PARAM_INT);
    $cad_regivac->execute();


    //Criar a variavel global para salvar a mensagem de sucesso
    $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
} else {
    //Criar a variavel global para salvar a mensagem de erro
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";

    //Redirecionar o usuario
    header("Location: index.php");
}
