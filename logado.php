<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprando um Som</title>
    <!--<link rel="stylesheet" href="/Roger/gaita/css/styles3.css"/>-->
    <script src="js/scripts.js"></script>
<!-- Google fontes -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
body {
    min-height: 90vh;
    font-family: Lato;
    padding: 0; 
    margin: 0;
    background-image: url("/Roger/gaita/img/mulher.jpg");
    background-size: cover;
    background-position: center;
    margin-bottom: 4rem;
}    

</style>

</head>
<body>

<?php
// Executa a conexao com o mysql e selecionar a base
include_once ('conect.cfg');

session_start(); //faz o arquivo iniciar a sessao com o browser   
// pega dados via POST
// Recebe o valo do email
$email = $_POST["email"];
// Recebe o valo do email
$senha = $_POST["senha"];
// Converte a senha em um hash criptografado de MD5
$senha = md5($senha);

//montar a instrução para ir ao banco
//e selecionar o usuario que tenha este email
$sql = "select * from usuario where email = '$email' AND senha = '$senha' ";

//executar conexao e roda a query sql
$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) == 1) {

    // Variavel $row recebe o conteudo do array gerado pelo banco
    $row = mysqli_fetch_array($resultado);
    //enviar dados recebidos do banco de dados para a sessão iniciada
    $_SESSION["id_aluno"] = $row["id_aluno"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time();

    //econtrou
    //vou redirecionar o usuario para a pasta do sistema
    if($_SESSION["perfil"] == "2") {
        
        $logado = $row["email"];
        
        // Cria o formulario cadastrar e Alterar Senha
      $e = $row["email"];
      //$logado = $_SESSION['email'];
      include "campo_cep.php";
    }
    
    
    
        // Verifica a seção de acordo com o perfíl
    elseif($_SESSION["perfil"] == "0") {
        // Variavel $e recebe a linha contendo o email do usuario carregado pelo banco
        $e = $row["email"];
        $logado = $row["email"];
    include "perfil0.php";
      
} else {
    // Cria um alerta informando que o usuário ou senha é inválido
    echo "<script>alert ('Email ou Senha Invalidos!'); location.href='/Roger/gaita/login.php';</script>";
}
}
?>
</body>
</html>