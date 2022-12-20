<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta usuários</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Estilos-->
 </head>
 <body>


<?php
    session_start();
    include_once('conect.cfg');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']); //Destroi email e senha caso não
        unset($_SESSION['senha']); //existam no banco de dados.
        header('Location: login.php');
}
$logado = $_SESSION['email'];
//O comando abaixo busca os registros do banco de dados e 
//lista na tela.
$sql = "SELECT usuario.id_aluno,usuario.nome,usuario.telefone,usuario.email,usuario.cpf,usuario.perfil,usuario.cursos,enderecos.cep,enderecos.rua,enderecos.numero,enderecos.bairro,enderecos.cidade,enderecos.uf FROM usuario INNER JOIN enderecos ON usuario.id_aluno = enderecos.id_aluno"; //Exibe dados de duas tabelas pelas chaves primárias
$result = $con->query($sql);

//print_r($result); imprime o resultado na tela como array

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tela de consulta</title>

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

.table-bg{
    background: rgba(0,0,0,0.8);
    border-radius: 15px 15px 0 0;
}
.menu_topo{
    position: absolute;
    font-family: Lato;
    left: 90%;
    top: 20px;
    color: white;
    font-size: 16px;
    position: fixed;
}
a:link {
    text-decoration: none;
    color: white;
}
#marca {
    position: fixed;
    background-color: rgba(37, 20, 185, 1);
    padding: 15px;
    box-shadow: 2px 2px #f1ecec;
    color: white;
    width: 100%;
    font-family: Lato;
    font-size: 15;
    margin: 0%;
    top: 0%
    
}
</style>
</head>
<body>
<h2 style="font-size:24px;" id="marca"><b>Curso - Soprando um Som!<b></h2>
            <nav class="menu_topo">
               <a style="color:white;" href="/Roger/gaita/index.php"><b>INÍCIO &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
               
            </nav>

<!--Sessões armazena os dados individuais dos usuários.-->    

<br><br>
<div class="m-5">
<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Curso</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">CPF</th>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Número</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">UF</th>
      <th scope="col">Perfil</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>". $user_data['id_aluno']."</td>";
            echo "<td>". $user_data['nome']."</td>";
            echo "<td>". $user_data['cursos']."</td>";
            echo "<td>". $user_data['telefone']."</td>";
            echo "<td>". $user_data['email']."</td>";
            echo "<td>". $user_data['cpf']."</td>";
            echo "<td>". $user_data['cep']."</td>";
            echo "<td>". $user_data['rua']."</td>";
            echo "<td>". $user_data['numero']."</td>";
            echo "<td>". $user_data['bairro']."</td>";
            echo "<td>". $user_data['cidade']."</td>";
            echo "<td>". $user_data['uf']."</td>";
            echo "<td>". $user_data['perfil']."</td>";
            echo "<td>
                <a class='btn btn-sm btn-primary' href='edit.php?id_aluno=$user_data[id_aluno]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a>
                    <a class='btn btn-sm btn-danger' href='delete.php?id_aluno=$user_data[id_aluno]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                  </svg>  
                </a>
                

            </td>";
            echo "</tr>";
            
        } //Retorna uma matriz associativa
    ?>
  </tbody>   
</table>
</div>

</body>
</html>
