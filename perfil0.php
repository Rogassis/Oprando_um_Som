
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta dados</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/Roger/gaita/css/styles3.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="js/scripts.js"></script>
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
div {
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 48%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;
    color: white;
    text-align: center;
    width: 95%;
    padding: 25px;s
}


a {
   text-decoration: none; 
}

#marca {
    background-color: rgba(37, 20, 185, 0.8);
    padding: 15px;
    box-shadow: 2px 2px #f1ecec;
    color: white;
    width: 100%;
    font-family: Lato;
    top: 0%;
    font-size: 23px;
    position: fixed;
}
.menu_topo{
    position: absolute;
    font-family: Lato;
    left: 80%;
    top: 20px;
    color: white;
    font-size: 16px;
    position: fixed;
}
section {
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 14px;
    padding: 13px;
    border-radius: 15px;
    color: white;
    text-align: center;
    width: 45%;
}
input {
    padding: 8px;
    border: none;
    outline: none;
    font-size: 16px;
}

#update {
    background-color: dodgerblue;
    border: none;
    padding: 10px;
    border-radius: 10px;
    color: white;
    font-size: 14px;
    width: 15%;
}

#update:hover {
    background-color: deepskyblue;
    cursor: pointer;
}

fieldset {
    border: 2px solid dodgerblue;
    padding: 15px;
    border-radius: 8px;
}
.saudacao{
    position: absolute;
    font-size: 20px;
    color: blue;
    top: -140%;
    left: 77%
}
.informe{
    position: absolute;
    font-size: 15px;
    color: dodgerblue;
    top: 75%;
    left: 28%
}

.colsultar{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

</style>    
</head>
<body>

<section>
<fieldset>
<legend style="font-size:20px;"><b>Altera a senha<b></legend>
 
    <form action="alt_senha.php" method="post">
    
    <b>Email:<b>
       <input type="text" name="email" id="email" value = <?php echo $e?>>
       <b>Senha:<b>
       <input type="password" name="senha" id="senha">
       <input type="hidden" name="id_aluno" value="<?php echo $id_aluno?>"> &nbsp;<input type="submit" name="update" id="update">
   </form>
</section>
</fieldset> 



<h2 style="color:white;" id="marca"><b>Curso - Soprando um Som!<b></h2>
    
<nav class="menu_topo">
           <a style="color:white;" href="/Roger/gaita/index.php"><b>INÍCIO &nbsp &nbsp<b></a>
           <a style="color:white;" href="/Roger/gaita/curso_diatonica.php"><b>CURSOS &nbsp &nbsp<b></a>
           <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
          <a style="color:white;" href="/Roger/gaita/bobre.php"><b>SOBRE &nbsp &nbsp<b></a>
</nav>

    <?php
    // Executa a conexao com o mysql e selecionar a base
   
   
    include_once('conect.cfg');

    //pega o nome que será recebido via GET
    //if (isset($_GET["email"])) {
        //if ($_GET["email"] != "") {
            //$email = $_POST["email"];
            
            
            // instrucao sql para selecionar somente aquele registro que inicie com a string digitada e completa o restante encontrado através do coringa %      
            
            //$sql = "SELECT usuario.id_aluno,usuario.nome,usuario.telefone,usuario.email,usuario.cpf,usuario.perfil,usuario.cursos,enderecos.cep,enderecos.rua,enderecos.numero,enderecos.bairro,enderecos.cidade,enderecos.uf FROM usuario INNER JOIN enderecos ON usuario.id_aluno = enderecos.id_aluno";
            
            //$sql = "SELECT id_aluno FROM usuario WHERE email LIKE '%$email%'";
            //$sqlB = "SELECT id_endereco FROM enderecos WHERE id_aluno LIKE '%$id_aluno%'";

            //Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.
            //$resultado = $con->query($sql);
            
            $sql = "SELECT * FROM enderecos WHERE id_aluno=".$_SESSION["id_aluno"];
            $resultado = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($resultado) > 0) {

                foreach($resultado as $row_sql):                   
                endforeach;


    ?>
<br><br><br>            
<div>
<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">Matrícula</th>
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
      </tr>
  </thead>
                    
                        <tr>
                            <td><?php echo $row["id_aluno"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["cursos"]; ?></td>
                            <td><?php echo $row["telefone"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td><?php echo  $row_sql['cep']; ?></td>
                            <td><?php echo  $row_sql['rua']; ?></td>
                            <td><?php echo  $row_sql['numero']; ?></td> 
                            <td><?php echo  $row_sql['bairro']; ?></td>
                            <td><?php echo  $row_sql['cidade']; ?></td>
                            <td><?php echo  $row_sql['uf']; ?></td>
                            <td><?php echo $row["perfil"]; ?></td>
</div>
                        </td>
                    </tr>
                </table>
                    <?php
}

                    ?>
                

<p class="saudacao"> 
<?php
echo "Bem vindo(a) ".$logado
?>
</p>   

<p class="informe"> 
<?php
echo "Caso exista algum erro nos seus dados nos informe no e-mail: secretaria@soprandoumsom.com"
?>
</p>   
</body>

</html>
