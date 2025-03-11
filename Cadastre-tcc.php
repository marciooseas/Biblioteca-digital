<?php
if(isset($_POST['submit']))
{
  //  print_r('Tiutlo:' .$_POST['titulo']);
  //   print_r('<br>');
  //   print_r('Autor:' .$_POST['autor']);
  //  print_r('<br>');
  //  print_r('Categoria:' .$_POST['categoria']);
  //  print_r('<br>');
  //  print_r('ano_de_publicacao:' .$_POST['ano_de_publicacao']);
  //  print_r('<br>');
  //  print_r('Arquivo:' .$_POST['arquivo']);
  //  print_r('<br>'); 
     
   include_once('config.php');
   $titulo=$_POST ['titulo'];
   $autor=$_POST ['autor'];
   $categoria=$_POST ['categoria'];
   $ano_de_publicacao=$_POST ['ano_de_publicacao'];
   $arquivo=$_POST ['arquivo'];
   
   $result = mysqli_query ($conexao, "INSERT INTO tcc (titulo, autor, categoria ,ano_de_publicacao, arquivo) 
   VALUES('$titulo','$autor','$categoria','$ano_de_publicacao','$arquivo')");
}
?>   

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastar - Trabalho de Conclusão de Curso </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- CSS ligação -->
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body>

 <?php
 include "nav.php";
 include "menu.php";
 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Trabalho de Conclusão de Curso</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Cadastrar</li>
          <li class="breadcrumb-item active">Trabalho De Conclusão de Curso</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
               
    <form action="cadastre-tcc.php" method= "POST">
      <h2>Cadastrar TCC</h2>
      <div class="form-group fullname">
        <label for="fullname">Titulo</label>
        <input type="text" name="titulo" placeholder="Digite o titulo " required>
      </div>
      <div class="form-group email">
        <label for="text">Autor</label>
        <input type="text" name="autor" placeholder="Digite o nome do autor" required>
      </div>

      <div class="form-group gender">
        <label for="categoria">Categoria</label>
        <select name="categoria" required>
          <option value="Construção Cívil">Construção Cívil</option>
          <option value="Eletrônica">Eletrônica</option>
          <option value="Informática">Informática</option>
          <option value="Mecânica">Mecânica</option>
          <option value="Telecomunicações">Telecomunicações</option>
        </select>
      </div>

      <div class="form-group date">
        <label for="date">Data de Publicação </label> 
        <input type="date" name="ano_de_publicacao" required>
      </div>
      
      <div class="form-group password">
        <input type="file" name="arquivo" required>
      </div>

      <div class="form-group submit-btn">
        <input type="submit" value="Cadastrar">
      </div>
    </form>
    
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>