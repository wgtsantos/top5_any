<!DOCTYPE html>
<html>
<head>
	<title> TOP 5 ANY </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>
<body>

	<div id="geral">
		
	 <header> <h1> CADASTRO GERAL </h1> </header>
	 <nav>
	 	<ul>
	 	  <li> <a href="index.html"> Home </a> </li>
	 	  <li> <a href="cadastro.php" class="atv"> Cadastro Geral </a> </li>
	 	  <li> <a href="cad_title.html"> Cadastro Títulos </a> </li>
	 	  <li> <a href="list_title.php"> Listar Títulos </a> </li>
	 	  <li> <a href="top5.php"> TOP5 </a> </li>
	 	  <li style="float: right;"> <a href="sobre.html"> Sobre </a> </li>
	 	</ul>	
	 </nav>
	 <aside class="cadtop">
 	<div id="cad">
	  <fieldset>
	    <legend> Faça o seu Cadastro </legend>
	      <form action="cadastrar.php" method="post" name="cadastro">
	      	<label> Nome: </label>
	      	<input type="text" name="nome" id="nome" placeholder="Nome Completo" required />
	      	<br/>
	      	<label> Sexo: </label>
	      	<select id="sexo" name="sexo">
	      	  <option value="" selected="selected">--selecione--</option>
	      	  <option value="M"> Masculino </option>
	      	  <option value="F"> Feminino </option>	
	      	</select>
	      	<br/>
	      	<label> E-mail: </label>
	      	<input type="email" name="mail" id="mail" placeholder="Digite seu E-mail" required />
	      	<br/>
	      	<label> Data de Nascimento: </label>
	      	<input type="date" name="data_nasc" id="data_nasc" placeholder="Data de Nascimento" required />
	      	<br/>
	      	<label> Telefone: </label>
	      	<input type="text" name="telefone" id="telefone" placeholder="(XX) XXXX-XXXX" maxlength="12" required />
	      	<br/>
	      	<label> Escolha os 5 Melhores: </label>
	      	<br/> <br/>
	      	<label> Top 1: </label>
	      	<select id="top1" name="top1" required>
	      		<option value="" selected="selected">--selecione--</option>
	      		<option value="Teste"> Teste </option>
	      	</select>
	      	<br/>
	      	<label> Top 2: </label>
	      	<select id="top1" name="top1" required>
	      		<option value="" selected="selected">--selecione--</option>
	      		<option value="Teste"> Teste </option>
	      	</select>
	      	<br/>
	      	<label> Top 3: </label>
	      	<select id="top1" name="top1" required>
	      		<option value="" selected="selected">--selecione--</option>
	      		<option value="Teste"> Teste </option>
	      	</select>
	      	<br/>
	      	<label> Top 4: </label>
	      	<select id="top1" name="top1" required>
	      		<option value="" selected="selected">--selecione--</option>
	      		<option value="Teste"> Teste </option>
	      	</select>
	      	<br/>
	      	<label> Top 5: </label>
	      	<select id="top1" name="top1" required>
	      		<option value="" selected="selected">--selecione--</option>
	      		<option value="Teste"> Teste </option>
	      	</select>
            <br/>
            <label> Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" />
            <br/>
            <label> Repita a Senha: </label>
            <input type="password" name="rpsenha" id="rpsenha" placeholder="Digite novamente sua Senha" />
            <br/>
            <button type="submit" id="enviar" name="enviar"> Enviar </button>
	      </form>	
	  </fieldset>	 		
 	</div>
	 </aside>
	 <footer></footer>

	</div>

</body>
</html>