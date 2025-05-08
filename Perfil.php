
<!DOCTYPE html>
<html lang="pt-br">

<head>
  
  <title>Perfil </title>
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
      <h1>Perfil Do Usuario
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item">Usuario</li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
      </nav>
    </div><!-- Fim Page Titulo -->
     
    <form action="" method="post" enctype="multipart/form-data">
     <div class="containere light-style flex-grow-1 container-p-y">
        
        <div class="card-overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">
                                <img src="assets/img/pngtree-profile.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Atualizar nova foto
                                        <input type="file" name="imagem" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Excluir</button>
                                    <div class="text-light small mt-1">Permitido JPG, GIF or PNG. Max tam of 800K</div>
                                </div>
                            </div>
                            
                            <hr class="border-light m-0">
                            <div class="card-body">
  
                                <div class="caixa">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" value=" <?=$usuarios['nome'];?>">
                                </div>
                                <div class="caixa">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="<?=$usuario['email'];?>">
                                </div>
                                <div class="caixa">
                                    <label class="form-label">Gênero</label>
                                    <select class="custom-select" value="<?=$usuario['genero'];?>">
                                        <option >Masculino</option>
                                        <option >Feminino</option>
                                    </select>
                                </div>
                                <div class="caixa">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" class="form-control" value="<?=$usuario['telefone'];?>">
                                </div>
                                 <div class="caixa">
                                    <label for="date">Data de nascimento  </label> 
                                    <input type="date" name="data_de_nascimnento" value=" <?=date('d/m/Y', strtotime($usuario['data_de_nascimento']));?>" required>
                                </div>

                                <div class="text-right mt-3">
                                    <button type="button" class="btn btn-primary">Editar</button>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </form>

    </div>
  </div>

      
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    </script>

    
</main>
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