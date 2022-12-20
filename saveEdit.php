<?php
include_once('conect.cfg');

if(isset($_POST['update'])){
    $id_aluno = $_POST['id_aluno'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $perfil = $_POST['perfil'];
    $cursos = $_POST['cursos'];
    $id_endereco = $_POST['id_endereco'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

//$sqlUpdate = "UPDATE usuario INNER JOIN enderecos ON usuario.$id_aluno = enderecos.$id_endereco SET nome='$nome',telefone='$telefone',email='$email',cpf='$cpf',perfil='$perfil',cursos='$cursos' + cep='$cep',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade'";
    

$sqlUpdate = "UPDATE usuario SET nome='$nome',telefone='$telefone',email='$email',cpf='$cpf',perfil='$perfil',cursos='$cursos'
WHERE id_aluno='$id_aluno'";

$sqlUpdateB = "UPDATE enderecos SET cep='$cep',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade'
WHERE id_endereco='$id_endereco'";

// a Conexão abaixo não é orientada a objeto.
mysqli_query($con, $sqlUpdate);
mysqli_query($con, $sqlUpdateB);

//a Conexão abaixo é orientada a objeto. 
//$result = $con->query($sqlUpdate);
//$result_b = $con->query($sqlUpdate_b);


}

header('Location: consultar.php');
?>