<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
<!-- Google fontes -->

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<!-- Estilos -->
<!--<link rel="stylesheet" href="/Roger/gaita/css/styles2.css"/>-->
<style>
*{
    font-family: Lato;
    margin: 0;
    box-sizing: border-box;
}

body {
    min-height: 90vh;
    font-family: Lato;
    padding: 0; 
    margin: 0;
    background-image: url("/Roger/gaita/img/mulherFiltro2.jpg");
    background-size: cover;
    background-position: center;
    margin-bottom: 4rem;
    color: white;
}
div {
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 15px;
    color: white;
    text-align: center;
}
input {
    padding: 10px;
    border: none;
    outline: none;
    font-size: 15px;
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
a:link {
    text-decoration: none;
    color: white;
}
button {
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
}

button:hover {
    background-color: deepskyblue;
    cursor: pointer;
}
#marca {
    background-color: rgba(37, 20, 185, 0.8);
    padding: 15px;
    box-shadow: 2px 2px #f1ecec;
    color: white;
    width: 100%;
    font-family: Lato;
    top: 0%;
    position: fixed;
}
</style>



</head>
<body>

        
            <h2 id="marca">Curso - Soprando um Som!</h2>
            <nav class="menu_topo">
               <a style="color:white;" href="/Roger/gaita/index.php"><b>INÍCIO &nbsp &nbsp<b></a>
               <a style="color:white;" href="curso_diatonica.php"><b>CURSOS &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/sobre.php"><b>SOBRE &nbsp &nbsp<b></a>
            </nav>
<div>
<form action="logado.php" method="post">

       <h1>Login</h1>
       <br>
       <input type="text" placeholder="E-mail" name="email" id="email" required>
       <br><br>
       <input type="password" placeholder="Senha" name="senha" id="senha" required>
       <br><br>
       <button type="submit">Entrar</button>
</div>
</form>
</body>
</html>