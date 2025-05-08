<?php
session_start();
require 'config.php';

 //USUARIO C-R-U-D
if (isset($_POST['create_utente'])) {
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
	$genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
	$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
	$data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));

	$sql = "INSERT INTO usuario (nome,email,senha,genero,telefone,data_de_nascimento)
	VALUES ('$nome','$email','$senha','$genero','$telefone','$data_de_nascimento')";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Utente cadastrado com sucesso';
		header('Location: cadastre-utente.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Utente não foi cadastrado';
		header('Location: cadastre-utente.php');
		exit;
	}
}

if (isset($_POST['update_utente'])) {
	$usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
	$genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
	$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
	$data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
	$nivel = mysqli_real_escape_string($conexao, trim($_POST['nivel']));

	$sql = "UPDATE usuario SET  nome = '$nome', email = '$email', senha = '$senha',
	 genero = '$genero', telefone = '$telefone',data_de_nascimento = '$data_de_nascimento',
	 nivel = '$nivel'";
	
	$sql .= " WHERE id = '$usuario_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Utente atualizado com sucesso';
		header('Location: consultar-utente.php');
		exit;
	} 
	else {
		$_SESSION['mensagem'] = 'Utente não foi atualizado';
		header('Location: consultar-utente.php');
		exit;
	}
}

if (isset($_POST['delete_utente'])) {
	$usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_utente']);
	$sql = "DELETE FROM usuario WHERE id = '$usuario_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['message'] = 'Utente deletado com sucesso';
		header('Location: consultar-utente.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Utente não foi deletado';
		header('Location: consultar-utente.php');
		exit;
	}
}


// C R U D - TCC
if (isset($_POST['create_tcc'])) {
	$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
	$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
	$curso = mysqli_real_escape_string($conexao, trim($_POST['curso']));
	$data_de_publicacao = mysqli_real_escape_string($conexao, trim($_POST['data_de_publicacao']));
	$arquivo = mysqli_real_escape_string($conexao, trim($_POST['arquivo']));
	
	$sql = "INSERT INTO tcc (titulo, id, curso, data_de_publicacao, arquivo)
	VALUES ( '$titulo', '$id', '$curso', '$data_de_publicacao', '$arquivo')";
	
	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso cadastrado com sucesso';
		header('Location: cadastre-tcc.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso não foi cadastrado';
		header('Location: cadastre-tcc.php');
		exit;
	}
}
 //UPDATE TCC E DELETE
if (isset($_POST['update_tcc'])) {
	$tccs_id = mysqli_real_escape_string($conexao, $_POST['tccs_id']);
	$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
	$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
	$curso = mysqli_real_escape_string($conexao, trim($_POST['curso']));
	$data_de_publicacao = mysqli_real_escape_string($conexao, trim($_POST['data_de_publicacao']));
	$arquivo = mysqli_real_escape_string($conexao, trim($_POST['arquivo']));

	$sql = "UPDATE tcc SET  titulo = '$titulo', id = '$id', curso = '$curso', 
	data_de_publicacao = '$data_de_publicacao', arquivo = '$arquivo'";
	
	$sql .= " WHERE id = '$tccs_id'";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso atualizado com sucesso';
		header('Location: Consultar-tccs.php');
		exit;
	} 
	else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso não foi atualizado';
		header('Location: Consultar-tccs.php');
		exit;
	}
}

if (isset($_POST['delete_tcc'])) {
	$tccs_id = mysqli_real_escape_string($conexao, $_POST['delete_tcc']);
	$sql = "DELETE FROM tcc WHERE id = '$tccs_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso deletado com sucesso';
		header('Location: Consultar-tccs.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso não foi deletado';
		header('Location: Consultar-tccs.php');
		exit;
	}
}



 //Cadastrar Autor
if (isset($_POST['create_autor'])) {
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
	$genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
	$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
	$data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));

	$sql = "INSERT INTO autor (nome,email,senha,genero,telefone,data_de_nascimento) 
	VALUES ('$nome', '$email','$senha','$genero','$telefone','$data_de_nascimento')";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Autor cadastrado com sucesso';
		header('Location: autor.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Autor não foi cadastrado';
		header('Location: autor.php');
		exit;
	}
}

if (isset($_POST['update_autor'])) {
	$autor_id = mysqli_real_escape_string($conexao, $_POST['autor_id']);
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
	$genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
	$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
	$data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));

	$sql = "UPDATE autor SET  nome = '$nome', email = '$email', 
	senha = '$senha', genero = '$genero', telefone = '$telefone',
	data_de_nascimento = '$data_de_nascimento' ";
	
	$sql .= " WHERE id = '$autor_id'";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Autor atualizado com sucesso';
		header('Location: consultar-autor.php');
		exit;
	} 
	else {
		$_SESSION['mensagem'] = 'Autor não foi atualizado';
		header('Location: consultar-autor.php');
		exit;
	}
}

if (isset($_POST['delete_autor'])) {
	$autor_id = mysqli_real_escape_string($conexao, $_POST['delete_autor']);
	$sql = "DELETE FROM autor WHERE id = '$autor_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['message'] = 'Autor deletado com sucesso';
		header('Location: consultar-autor.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Autor não foi deletado';
		header('Location: consultar-autor.php');
		exit;
	}
}

// C R U D - EMPRÉSTIMO
if (isset($_POST['create_emprestimo'])) {
	$id_tcc = mysqli_real_escape_string($conexao, trim($_POST['id_tcc']));
	$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
	$data_de_emprestimo = mysqli_real_escape_string($conexao, trim($_POST['data_de_emprestimo']));
	$data_prevista = mysqli_real_escape_string($conexao, trim($_POST['data_prevista']));
	
	$sql = "INSERT INTO emprestimo (id_tcc,id,data_de_emprestimo,data_prevista)
	VALUES ( '$id_tcc','$id','$data_de_emprestimo','$data_prevista')";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso emprestado com sucesso';
		header('Location: cadastre-emprestimo.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso não foi emprestado';
		header('Location: cadastre-emprestimo.php');
		exit;
	}
}


if (isset($_POST['update_emprestimo'])) {
	$emprestimo_id = mysqli_real_escape_string($conexao, $_POST['emprestimo_id']);
	$id_tcc = mysqli_real_escape_string($conexao, trim($_POST['id_tcc']));
	$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
	$data_de_emprestimo = mysqli_real_escape_string($conexao, trim($_POST['data_de_emprestimo']));
	$data_prevista = mysqli_real_escape_string($conexao, trim($_POST['data_prevista']));
	
	$sql = "UPDATE emprestimo SET id_tcc ='$id_tcc',id = '$id',
	 data_de_emprestimo = '$data_de_emprestimo', data_prevista = '$data_prevista'";
	
	$sql .= " WHERE id = '$emprestimo_id'";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso emprestado foi editado com sucesso';
		header('Location: consultar-emprestimo.php');
		exit;
	} 
	else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso emprestado não foi editado';
		header('Location: consultar-emprestimo.php');
		exit;
	}
}
if (isset($_POST['delete_emprestimo'])) {
	$emprestimo_id = mysqli_real_escape_string($conexao, $_POST['delete_emprestimo']);
	$sql = "DELETE FROM emprestimo WHERE id = '$emprestimo_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso emprestado deletado com sucesso';
		header('Location: consultar-Tccs-emprestado.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso emprestado não foi deletado';
 		header('Location: consultar-Tccs-emprestado.php');
		exit;
	}
}


// C R U D - DEVOLUÇÃO 
if (isset($_POST['create_devolucao'])) {
	$id_emprestimo = mysqli_real_escape_string($conexao, trim($_POST['id_emprestimo']));
	$data_de_devolucao = mysqli_real_escape_string($conexao, trim($_POST['data_de_devolucao']));
	$data_limite = mysqli_real_escape_string($conexao, trim($_POST['data_limite']));
	$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
	
	$sql = "INSERT INTO devolucao (id_emprestimo,data_de_devolucao,data_limite,estado)
	VALUES ( '$id_emprestimo', '$data_de_devolucao', '$data_limite', '$estado')";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Curso devolvido com sucesso';
		header('Location: cadastre-devolucao.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso não foi devolvido ';
		header('Location: cadastre-devolucao.php');
		exit;
	}
}

if (isset($_POST['update_devolucao'])) {
	$id_emprestimo = mysqli_real_escape_string($conexao, trim($_POST['id_emprestimo']));
	$data_de_devolucao = mysqli_real_escape_string($conexao, trim($_POST['data_de_devolucao']));
	$data_limite = mysqli_real_escape_string($conexao, trim($_POST['data_limite']));
	$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));

	$sql = "UPDATE devolucao SET id_emprestimo = '$id_emprestimo', data_de_devolucao = '$data_de_devolucao', 
	data_limite = '$data_limite', estado = '$estado'";
	
	$sql .= " WHERE id = '$devolucao_id'";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso devolvnomeo foi editado  com sucesso';
		header('Location: consultar-devolucao.php');
		exit;
	} 
	else {
		$_SESSION['mensagem'] = 'Trabalho de Conclusão de Curso devolvnomeo não foi atualizado';
		header('Location: consultar-devolucao.php');
		exit;
	}
}

if (isset($_POST['delete_devolucao'])) {
	$devolucao_id = mysqli_real_escape_string($conexao, $_POST['delete_devolucao']);
	$sql = "DELETE FROM devolucao WHERE id = '$devolucao_id'";

	mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso devolvnomeo deletado com sucesso';
		header('Location: consultar-devolucao.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Trabalho de Conclusão de Curso devolvnomeo não foi deletado';
 		header('Location: consultar-devolucao.php');
		exit;
	}
}
?>