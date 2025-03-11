
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Usuarios - Perfil </title>
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
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/site.jpg" alt="Profile" class="rounded-circle">
              <h2>fulano</h2>
              <h3>admin</h3>

            </div>
          </div>
        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Geral</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar o perfil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Alterar a Palavra-Passe</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
               
                  <h5 class="card-title"> Detalhes do Perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nome</div>
                    <div class="col-lg-9 col-md-8">Márcio</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">Marcio@example.com</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Senha</div>
                    <div class="col-lg-9 col-md-8">123</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gênero</div>
                    <div class="col-lg-9 col-md-8">Masculino</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"> Telefone</div>
                    <div class="col-lg-9 col-md-8">(244) 912-345-678</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label"> Data de Nascimento </div>
                    <div class="col-lg-9 col-md-8">2005-02-21</div>
                  </div>
                  
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Perfil de  Imagem</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/site.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Adicionar imagem"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remover a imagem"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Nome</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nome" type="text" class="form-control"  value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" value="">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Gênero</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="genero" type="text" class="form-control" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Telefone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Telefone" type="text" class="form-control"  value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Data de Nascimento</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="data_de_nascimento" type="date" class="form-control" value="">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                  </form><!-- FIM EDITAR PERFIL FORMULARIO -->
                </div>

                
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="senhaatual" class="col-md-4 col-lg-3 col-form-label">Senha Atual</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="senhaatual">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nova Senha </label>
                      <div class="col-md-8 col-lg-9">
                        <input name="novasenha" type="password" class="form-control" id="novasenha">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="digiteasenhanovamente" class="col-md-4 col-lg-3 col-form-label">Digite a senha novamente</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="digiteasenhanovamente" type="password" class="form-control" id="digiteasenhanovamente">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Alterar a senha</button>
                    </div>
                  </form><!-- Alterar a senha novamente -->
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
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