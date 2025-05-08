<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Consultar de Devoluções - TCCs </title>
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
      <h1>Consultas de Devoluções</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Página</li>
          <li class="breadcrumb-item active">Consultar Devolução - TCCs</li>
        </ol>
      </nav>
    </div><!-- Fim Page Title -->
   
    <?php include('mensagem.php'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4> Lista de Devoluções
                <a href="cadastre-devolucao.php" class="btn btn-primary float-end">Fazer Devolução </a>
              </h4>
            </div>
            
            <div class="card-body">
              <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>ID </th>
                    <th>Id Empréstimo</th>
                    <th>Data De Devolução</th>
                    <th>Data Limite</th>
                    <th>Estado</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = 'SELECT * FROM devolucao';
                  $devolucao = mysqli_query($conexao, $sql);
                  if (mysqli_num_rows($devolucao) > 0) {
                    foreach($devolucao as $devolucoes) {
                  ?>
                  <tr>
                    <td><?=$devolucoes['id_devolucao']?></td>
                    <td><?=$devolucoes['id_emprestimo']?></td>
                    <td><?=date('d/m/Y', strtotime($devolucoes['data_de_devolucao']))?></td>
                    <td><?=date('d/m/Y', strtotime($devolucoes['data_limite']))?></td>
                    <td><?=$devolucoes['estado']?></td>
                    <td>
                      <a href="devolucao-view.php?id=<?=$devolucoes['id_devolucao']?>" class="btn btn-secondary btn-sm"><span class="bi-eye-fill"></span>&nbsp;Visualizar</a>
                      <a href="devolucao-edit.php?id=<?=$devolucoes['id_devolucao']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>
                      <form action="acoes.php" method="POST" class="d-inline">
                        <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit" name="delete_devolucao" value="<?=$devolucoes['id']?>" class="btn btn-danger btn-sm">
                          <span class="bi-trash3-fill"></span>&nbsp;Excluir
                        </button>
                      </form>
                    </td>
                  </tr>
                  <?php
                  }
                 } else {
                   echo '<h5>Nenhuma Devolução feita</h5>';
                 }
                 ?>
                </tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
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