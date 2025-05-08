<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Devolução - TCCs </title>
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
      <h1>Devolução</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Página</li>
          <li class="breadcrumb-item active">Devolução - TCCs</li>
        </ol>
      </nav>
    </div><!-- Fim Page Title -->

    <?php include('mensagem.php'); ?>
    <form action="acoes.php" method= "POST">
      <h2>Devolução de TCCs</h2>
    
      <div class="caixa">
        <label for="emprestimo">TCC - Emprestado</label>
        <select name="id_emprestimo" required>
        <?php
          include_once('config.php');
          $sql = "SELECT * FROM emprestimo";
          $result = $conexao->query($sql);
          while($emprestimo = mysqli_fetch_assoc($result)): ?>
           <option value="<?= $emprestimo['id_emprestimo'] ?>"><?= $emprestimo['id_emprestimo'] ?></option>
          <?php endwhile; ?>
        </select>
      </div>
  
      <div class="caixa">
        <label for="date">Data Devolução </label> 
        <input type="date" name="data_de_devolucao" required>
      </div>

      <div class="caixa">
        <label for="date">Data Limite </label> 
        <input type="date" name="data_limite" required>
      </div>


      <div class="caixa">
        <label for="estado">Estado</label>
        <select name="estado" required>
           <option value="">Selecione um status</option>
           <option value="Emprestado">Emprestado</option>
           <option value="Devolvido">Devolvido</option>
        </select>
      </div>
      <br>
     <div class="caixa">
          <button type="submit" name="create_devolucao" class="btn btn-primary">Devolver</button>
      </div>
    </form>    
  </main><!-- Fim #main -->

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