<?php
session_start(); //Iniciar a sessao
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>LogVac</title>
</head>

<body>
    <button type="button">
        <a href="index.php">Listar</a><br>
    </button>


    <h1 style="color: darkblue;">Cadastro para Vacinação</h1>

    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <form method="POST" action="processa.php">
        <h3>Dados Pessoais</h3>

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do usuário"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="E-mail do usuário"><br><br>
        <label>Idade: </label>
        <input type="text" name="idade" id="idade" placeholder="Idade do Paciente"><br><br>
        <label>Gênero: </label>
        <input type="text" name="sexo" id="sexo" placeholder="Digite (F ou M )"><br><br>
        <label>Escolaridade: </label>
        <input type="text" name="escolaridade" id="escolaridade" placeholder="..."><br><br>
        <label>Região do País: </label>
        <input type="text" name="regiao" id="regiao" placeholder="(Sul, Norte...)"><br><br>
        <label>Estado: </label>
        <input type="text" name="estado" id="estado" placeholder="Estado em que nasceu"><br><br>
        <label>Cidade: </label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade em que nasceu"><br><br>



        <h3>Dados da vacina</h3>

        <label>Nome da Vacina: </label>
        <input type="text" name="nomevac" id="nomevac" placeholder="Nome da Vacina"><br><br>

        <label>Local de Aplicação: </label>
        <input type="text" name="local_de_apli" id="local_de_apli" placeholder="Digite (Postinho ou Hospital)"><br><br>

        <label>Numéro do Lote: </label>
        <input type="text" name="lote" id="lote" placeholder="4 Digitos"><br><br>

        <label>Numéro de dose: </label>
        <input type="text" name="dose" id="dose" placeholder="Quantidade"><br><br>

        <label>Reforço: </label>
        <input type="text" name="reforco" id="reforco" placeholder="Digite (S ou N)"><br><br>


        <input type="submit" value="Cadastrar" name="CadUsuario">
    </form>

</body>

</html>