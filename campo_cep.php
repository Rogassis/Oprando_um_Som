

<style>
   
   
   *{
    font-family: Lato;
    margin: 0;
   }
   
   section {
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
    position: fixed;
}
#navbar {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
    box-shadow: 2px 2px #f1ecec;
    display: flex;
    gap: 2rem;
    text-transform: uppercase;
    padding: 0.8rem;
    max-width: 27%;
    top: 3%;
    border-radius: 8px;
    left: 66%;
}    

#navbar a {
    color: white;
    font-weight: bold;
    
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
input {
    padding: 8px;
    border: none;
    outline: none;
    font-size: 16px;
}

button {
    background-color: dodgerblue;
    border: none;
    padding: 10px;
    border-radius: 10px;
    color: white;
    font-size: 14px;
    width: 50%;
}

button:hover {
    background-color: deepskyblue;
    cursor: pointer;
}


a:link {
    text-decoration: none;
    cursor: pointer;
  }
  .menu_topo{
    position: absolute;
    font-family: Lato;
    left: 75%;
    top: 20px;
    color: white;
    font-size: 16px;
    position: fixed;
}

#marca {
    background-color: rgba(37, 20, 185, 0.8);
    padding: 1rem;
    box-shadow: 2px 2px #f1ecec;
    color: white;
    width: 100%;
    font-family: Lato;
    position: fixed;
}

.saudacao{
    position: relative;
    font-size: 20px;
    color: white;
    top: 10px;
    left: 40%;
    position: fixed;
    
}
</style>

<section>

       <form action="cad_usuario.php" method="post">
<fieldset>
                <legend><b>Cadastro de usuários</b></legend>               
                <input type="text" name="nome" placeholder="Nome" id="nome" required>
                <input type="text" name="telefone" placeholder="Telefone" id="telefone" required> 
                <input type="text" name="email" placeholder="Email" id="email" required>
                <br><br>
                <input type="text" name="cpf" placeholder="CPF" id="cpf" required>
                <input type="text" name="senha" placeholder="Senha" id="senha"  required>
                <form method="get" action=".">
                <input name="cep" placeholder="CEP" type="text" id="cep" value="" required
          onblur="pesquisacep(this.value);"/>
          <br><br>
          <input name="rua" placeholder="Rua" type="text" id="rua" required>
          <input name="numero" placeholder="Número" type="text" id="numero" required>
          <input name="bairro" placeholder="Bairro" type="text" id="bairro" required>
          <br><br>
          <input name="cidade" placeholder="Cidade" type="text" id="cidade" required>
          <input name="uf" placeholder="UF" type="text" id="uf" required>
          <input name="ibge" placeholder="IBGE" type="text" id="ibge">
          <br><br>
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
          <button type="submit" class="button1"><b>Cadastrar</button>  
        
          
   <br>
   </form>
   </section>
   </fieldset> 
   
   <h2 id="marca">Curso - Soprando um Som!</h2>
            <nav class="menu_topo">
               <a style="color:white;" href="/Roger/gaita/index.php"><b>INÍCIO &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/login.php"><b>LOGIN &nbsp &nbsp<b></a>
               <a style="color:white;" href="/Roger/gaita/consultar.php"><b>CONSULTAR USUÁRIOS &nbsp &nbsp<b></a>
               </nav> 

</p>
<p class="saudacao"> 
<?php
echo "Bem vindo(a) - ".$logado
?>
</p>
