<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visualizar - Trabalho de Conclusão de Curso </title>
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
          <li class="breadcrumb-item">Editar</li>
          <li class="breadcrumb-item active">Trabalho De Conclusão de Curso</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php include('mensagem.php'); ?>

      <div class="card-body">
                <?php
                    if (isset($_GET['id_tcc'])) {
                        $tccs_id = mysqli_real_escape_string($conexao, $_GET['id_tcc']);
                        $sql = "SELECT * FROM tcc WHERE id='$tccs_id'";
                        $query = mysqli_query($conexao, $sql);
                        if (mysqli_num_rows($query) > 0) {
                        $tccs = mysqli_fetch_array($query);
                    ?>
                <div class="mb-3">  
                  <label>Titulo</label>
                  <p class="caixa">
                    <?=$tccs['titulo'];?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>ID Autor</label>
                  <p class="caixa">
                    <?=$tccs['id'];?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Curso</label>
                  <p class="caixa">
                    <?=$tccs['curso'];?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Data De Publicação</label>
                  <p class="caixa">
                    <?=date('d/m/Y', strtotime($tccs['data_de_publicacao']));?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Arquivo</label>
                  <p class="caixa">
                    <?=$tccs['arquivo'];?>
                  </p>
                </div>
                <?php
                } else {
                  echo "<h5>Usuário não encontrado</h5>";
                }
              }
              ?>
            </div>

</main> <!-- Fim #main -->

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