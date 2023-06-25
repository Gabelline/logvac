<?php
session_start(); //Iniciar a sessao

include_once "conexao.php";
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>LogVac</title>
</head>

<body style='color: darkblue;'>
    <button type="button">
        <a href="index.php">Listar | Atualizar</a><br>
    </button>
    <button type="button">
        <a href="cadastrar.php">Cadastro</a><br>
    </button>
    <?php
    echo "Hoje é dia: " . date("d/m/Y") . "<br>";
    ?>
    <h1>Lista de Pessoas Vacinadas</h1>
    <hr>



    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $query_usuarios = "SELECT usr.id, usr.nome, usr.email,  usr.idade,   usr.sexo,  usr.escolaridade,
                    usr.regiao, usr.estado, usr.cidade,
                    regvac.nomevac, regvac.local_de_apli,
                    regvac.lote, regvac.dose, regvac.reforco

                    FROM usuarios usr
                    LEFT JOIN registrovac AS regvac ON regvac.usuario_id=usr.id
                    ORDER BY usr.id DESC";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_usuario);
        echo " <h3> Nome do Paciente: $nome  </h3>";
        echo "<p style='color: #2424FF;'>Código do Paciente: $id <br>";        
        echo "E-mail: $email <br>";
        echo "Região: $regiao <br>";
        echo "Estado: $estado <br>";
        echo "Vacina Aplicada: $nomevac <br>";
        echo "Local da Aplicação: $local_de_apli <br>";
        echo "Código do Lote: $lote <br>";
        echo "Numéro de Dose: $dose <br>";
        echo "Reforço: $reforco <br>";

        echo "<hr>";
    }
    ?>


</body>

</html>