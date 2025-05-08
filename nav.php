<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    
      $logado = $_SESSION['email'];
    
   
?>

<!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Biblioteca Digital</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- Logotipo Azul  -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="Pesquisar" placeholder="Encontre TCCs, autor(es)..." title="Pesquisar">
    <button type="submit" title="Pesquisar"><i class="bi bi-search"></i></button>
  </form>
</div><!-- Fim Barra de Pesquisa -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle" href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- Fim Barra de Pesquisa Icon-->

     
      <!--Perfil Lateral Direita Inicio-->
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/pngtree-profile.png" alt="Profile" class="rounded-circle">
      </a><!-- Fim Perfil de img icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
         <?php
         echo"<h6>$logado</h6>";
         ?>
          <span>Admin</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="Perfil.php">
            <i class="bi bi-person"></i>
            <span>Meu Perfil</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="Perfil.php">
            <i class="bi bi-gear"></i>
            <span>Definições de Conta</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="login.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sair</span>
          </a>
        </li>
      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->
  </ul>
</header><!-- FIM Header -->
