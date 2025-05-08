<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Editar - Autor </title>
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
      <h1>Editar Autor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item"> Editar </li>
          <li class="breadcrumb-item active">Autor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
      <?php include('mensagem.php'); ?>

      <div class="card-body">
              <?php
              if (isset($_GET['id'])) {
                $autor_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM autor WHERE id='$autor_id'";
                $query = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($query) > 0) {
                $autores = mysqli_fetch_array($query);
              ?>
              <form action="acoes.php" method= "POST">
              <input type="hidden" name="autor_id" value="<?=$autores['id']?>">

                <h2>Editar Autor</h2>
                <div class="caixa">
                    <label for="fullname">Nome</label>
                    <input type="text" name="nome" value="<?=$autores['nome']?>" required>
                </div>

                <div class="caixa">
                  <label>Email</label>
                  <input type="email" name="email" value="<?= $autores['email'] ?>" 
                  class="form-control" required>
                </div>

                    <div class="caixa">
                      <label>Senha</label>
                      <input type="password" name="senha" value="<?= $autores ['senha'] ?>" class="form-control">
                    </div>

                  <div class="caixa">
                    <label for="genero">Gênero</label>
                    <select name="genero" class="form-control" required>
                      <option value="">Escolha o seu gênero</option>
                      <option value="Masculino" <?= $autores['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                      <option value="Feminino" <?= $autores['genero'] == 'Feminino' ? 'selected' : '' ?>>Feminino</option>
                    </select>
                  </div>

                  <div class="caixa">
                    <label>Telefone</label>
                    <input type="text" name="telefone" value="<?= $autores['telefone'] ?>" 
                    class="form-control">
                  </div>

                  <div class="caixa">
                    <label>Data de Nascimento</label>
                    <input type="date" name="data_de_nascimento" value="<?= $autores['data_de_nascimento'] ?>"
                    class="form-control">
                  </div>
                <br>
                <div class="mb-3">
                  <button type="submit" name="update_autor" class="btn btn-primary">Alterar</button>
                </div>
                </form>
              <?php
              } else {
                echo "<h5> autor não encontrado </h5>";
              }
            }
            ?>
            </div>
    
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