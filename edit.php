<!-- Google fontes -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<?php
/*Verifica se o parâmetro id_user não está vazio*/
if (!empty($_GET['id_aluno'])){
    
    include_once('conect.cfg'); //Conexão com o banco
    
    $id_aluno = $_GET['id_aluno'];
    
    $sqlSelect = "SELECT usuario.id_aluno,usuario.nome,usuario.telefone,usuario.email,usuario.cpf,usuario.perfil,usuario.cursos,enderecos.id_endereco,enderecos.cep,enderecos.rua,enderecos.numero,enderecos.bairro,enderecos.cidade FROM usuario INNER JOIN enderecos ON usuario.id_aluno = $id_aluno AND enderecos.id_aluno=$id_aluno";
    
    $result = $con->query($sqlSelect);
    if($result->num_rows > 0){
        
        while($user_data = mysqli_fetch_assoc($result)){
          $id_endereco = $user_data['id_endereco'];
          $nome = $user_data['nome'];
          $telefone = $user_data['telefone'];
          $email = $user_data['email'];
          $cpf = $user_data['cpf'];
          $cep = $user_data['cep'];
          $rua = $user_data['rua'];
          $numero = $user_data['numero'];
          $bairro = $user_data['bairro'];
          $cidade = $user_data['cidade'];
          $perfil = $user_data['perfil'];
          $cursos = $user_data['cursos'];
          
        }
        //print_r($nome);
    }
    else
        header('Location: cadastro.php');
    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--<link rel="stylesheet" type="text/css" href="/php_mysql/css/styles.css"/>-->
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
    .box {
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 20px;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 15px;
    color: white;
    z-index: 1;
    text-align: center;
    width: 45%;
}
    
#update {
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 50%;
    border-radius: 10px;
    color: white;
    font-size: 16px;
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
 
legend {
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
}
label{
    width: 85px;
    display: inline-block;
}
.menu_topo{
    position: absolute;
    font-family: Lato;
    left: 83%;
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
    background-color: rgba(37, 20, 185, 0.8);
    padding: 15px;
    box-shadow: 2px 2px #f1ecec;
    color: white;
    width: 100%;
    font-family: Lato;
    margin: 0%;
    top: 0%;
    position: fixed;
}
</style>
</head>
<body>
 
    <div class="box">
        <form action="saveEdit.php" method="POST" autocomplete="off">
            <fieldset> <!--Põe linha ao redor do título-->
                <legend><b>Edição de usuários</b></legend>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome:</label>   
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                </div>
                <br>     
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail:</label>
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="cpf" class="labelInput">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="cep" class="labelInput">CEP:</label>
                    <input type="text" name="cep" id="cep" class="inputUser" value="<?php echo $cep?>" required>
                    <label for="rua" class="labelInput">Rua:</label>
                    <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $rua?>" required>
                </div>  
                <br>
                <div class="inputBox">
                    <label for="numero" class="labelInput">Número:</label>
                    <input type="int" name="numero" id="numero" class="inputUser" value="<?php echo $numero?>" required>
                    <label for="bairro" class="labelInput">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $bairro?>" required>
                </div> 
                <br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
                    <label for="cpf" class="labelInput">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf?>" required>
                </div>
                <br>
                                   
                <span><b>Perfil:</b></span>
                <select name="perfil" id="perfil" class="browser-default custom-select">
		        <option value="0" selected="selected">Aluno</option> 
		        <option value="2">Secretaria</option>
                </select>
                <span><b>Cursos:<b></span>
                <select name="cursos" id="cursos" class = "browser-default custom-select">
                <option value = "Diatônica" selected = "selected">Diatônica</option>
                <option value = "Harmonica">Harmônica</option>
                </select>
                
                <br><br> 
                <!--hidden esconde o input para não aparecer na tela-->
                <input type="hidden" name="id_aluno" value="<?php echo $id_aluno?>">
                <input type="hidden" name="id_endereco" value="<?php echo $id_endereco?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>

    </div>
    
    <h2 id="marca">Curso - Soprando um Som!</h2>
            <nav class="menu_topo">
               <a style="color:white;" href="/Roger/gaita/index.php"><b>INÍCIO &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/consultar.php"><b>VOLTAR &nbsp &nbsp<b></a>
            </nav>
</body>
</html>
