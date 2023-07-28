<?php
    include("conexao.php");
    if(isset($_POST['bt_login'])) {
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];
        $mysqli->query("INSERT INTO tabela_login (login, senha)
         values ('$login', '$senha')")
        or die($mysqli->error);
    }


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cadas.css">

</head>

<body>


    <h1>REVISAO_CADASTRO</h1>

    <form action="" method="post">

        <label>Login </label>
        <input type="text" name="bt_login" /><br /><br />
        <label>Senha </label>
        <input type="text" name="bt_senha" /><br /><br />
        <input type="submit" value="Enviar">
        <input type="reset" value="Redefinir">
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>