<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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
    background-image: url("/Roger/gaita/img/mulher_escuro.jpg");
    background-size: cover;
    background-position: center;
    margin-bottom: 4rem;
} 
.sobre{
    position: absolute;
    color: white;
    font-family: lato;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    text-align: center;
} 
#marca {
    background-color: rgba(37, 20, 185, 0.8);
    padding: 1rem;
    box-shadow: 2px 2px #f1ecec;
    width: 100%;
    margin: 0%;
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

a {
   text-decoration: none; 
}
</style>
</head>
<body>
    <header>
    <h2 style="color:white;" id="marca">Curso - Soprando um Som!</h2>
    
    <div class="menu_topo">
       <a style="color:white;" href="index.php"><b>INÍCIO &nbsp &nbsp<b></a>
       <a style="color:white;" href="curso_diatonica.php"><b>CURSOS &nbsp &nbsp<b></a>
       <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
       <a style="color:white;" href="/Roger/gaita/sobre.php"><b>SOBRE &nbsp &nbsp<b></a>
    </div>
    </header>
<P class="sobre">
    Site produzido pelo aluno <b>Rogério Assis de Souza</b><br> durante o Curso de PHP no Senac Unidade Niterói<br>- 
    Rua Almirante Teffé, 680. Centro, Niterói - Rio de Janeiro.<br>
    Professor: Lucas Rodrigues Monteiro.<br>Início: 03/10/2022 - Término: 20/12/2022.
</p>

</body>
</html>    