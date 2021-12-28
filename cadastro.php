<?php

if(isset($_POST['submit'])) {

  /*  
    print_r($_POST['nome']);
    print_r($_POST['sobrenome']);
    print_r($_POST['cpf']);
    print_r($_POST['dt_nasc']);
    print_r($_POST['senha']); 
    */

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $dt_nasc = $_POST['dt_nasc'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,sobrenome,cpf,data_nasc,senha)
    VALUES ('$nome','$sobrenome','$cpf','$dt_nasc','$senha')");    
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>XBank</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
    <div class="main-cadastro">

        <div class="left-cadastro">
            <h1>Abra a sua conta <br> E entre para o time XBank</h1>
            <img src="LOGO XBANK.png" class="left-login-image" alt="logo">
            <img src="rede.png" class="left-cadastro-image" alt="Celular animação">
        </div>

        <div class="right-cadastro">

            <div class="card-cadastro">
                <h1>CADASTRO</h1>
                <div class="textfield-cad">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" maxlength="25" placeholder="Nome">
                </div>
                <div class="textfield-cad">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" maxlength="40" placeholder="Sobrenome">
                </div>
                <div class="textfield-cad">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" maxlength="11" placeholder="CPF">
                </div>
                <div class="textfield-date">
                    <label for="data-nasc">Data de Nascimento</label>
                    <input type="date" name="dt_nasc">
                </div>
                <div class="textfield-cad">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <input class="btn-cadastro" type="submit" name="submit">
                <!-- <button class="btn-cadastro">Abrir conta</button> -->
                <div class="conta">
                    <a href="index.html">
                        <label for="conta">VOLTAR</label>
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>