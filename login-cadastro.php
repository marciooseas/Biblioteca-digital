<?php
if(isset($_POST['submit']))
{
   //   print_r('Nome:' .$_POST['nome']);
   //   print_r('<br>');
   //   print_r('Email:' .$_POST['email']);
   //   print_r('<br>');
   //   print_r('Senha:' .$_POST['senha']);
   //   print_r('<br>');
   //   print_r('Telefone:' .$_POST['telefone']);
   //   print_r('<br>');
   //   print_r('Genero:' .$_POST['genero']);
   //   print_r('<br>');
   //   print_r('Data de Nascimento:' .$_POST['data_de_nascimento']);
   //   print_r('<br>');

   include_once('config.php');
   $nome=$_POST ['nome'];
   $email=$_POST ['email'];
   $senha=$_POST ['senha'];
   $genero=$_POST ['genero'];
   $telefone=$_POST ['telefone'];
   $data_de_nascimento=$_POST ['data_de_nascimento'];
   
   $result = mysqli_query ($conexao, "INSERT INTO usuario (nome, email, senha, genero, telefone, data_de_nascimento) 
   VALUES('$nome','$email','$senha','$genero','$telefone','$data_de_nascimento')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-cadastro.css">
    <title>Painel de Login</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="login.php" method ="POST">
			<h1>Crie sua conta</h1>
            <input type="text"     name="nome"    placeholder="Nome"  required>

			<input type="email"    name="email"   placeholder="Email" required>

			<input type="password" name="senha"   placeholder="Senha" required>
            <select name="genero" required>

                <option value="">Selcione seu genero</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
			<input type="tel"    name="telefone" placeholder="Telefone" required>
			<input type="date"   name="data_de_nascimento" required>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form action="config-login.php" method="POST">
			<h1>Login</h1>
			<br> <br> 
			<input type="email"    name="email"  placeholder="Email" required>
			<input type="password" name="senha"  placeholder="Senha" required>
			<a href="esquece-senha.php">Esqueceu a sua Senha?</a>
            
            <input type="submit" name="submit" id="submit" value="Entrar">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Seja Bem-Vindo!</h1>
				<p>Crie a sua conta e desfrute dos nossos TCCs </p>
				<button class="ghost" id="signIn">Entrar</button>
			</div>

			<div class="overlay-panel overlay-right">
				<h1>Seja Bem-Vindo De Volta!</h1>
				<p>Entre na sua conta e desfrute dos TCCs do Instituto Politécnico Anuarite II</p>
				<button class="ghost" id="signUp">Criar conta</button>
			</div>
		</div>
	</div>
    <script src="assets/js/lado.js"></script>
</div>
</body>
</html>
