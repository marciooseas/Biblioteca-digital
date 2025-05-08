  <!-- ======= Parte Lateral Esquerda ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Painel</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <!-- Inicio Todos os TCCs -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i>
          <span>Todos os livros</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Construcao-Civil-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Construção Cívil</span>
            </a>
          </li>
          <li>
            <a href="Eletronica-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Eletrônica</span>
            </a>
          </li>
          <li>
            <a href="Informatica-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Informática</span>
            </a>
          </li>
          <li>
            <a href="Mecanica-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Mecânica</span> 
            </a>
          </li>
          <li>
            <a href="Telecomunicacoes-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Telecomunicações</span>
            </a>
          </li>
        </ul>
      </li><!-- Fim Todos os TCC Link -->

      <?php if(isset($_SESSION["nivel"])):
              if($_SESSION["nivel"] != "Utente"): ?>
        <!--Inicio de Cadastrar-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Cadastrar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="cadastre-tcc.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Trabalho de Conclusão de Curso</span>
            </a>
          </li>
          <li>
            <a href="cadastre-utente.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Utente</span>
            </a>
          </li>
          <li>
            <a href="autor.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Autor</span>
            </a>
          </li>
        </ul>
      </li><!-- Fim de Cadastrar  -->
      <?php endif; endif; ?>


      <!-- Consultas de TCC / Usuários / TCC - Emprestado / Devoluções / Autor Inicio -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Consultas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="consultar-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Consultar Tccs</span>
            </a>
          </li>

          <?php if(isset($_SESSION["nivel"])):
              if($_SESSION["nivel"] != "Utente"): ?>
          <li>
            <a href="consultar-utente.php">
              <i class="bi bi-circle"></i>
              <span>Consultar Utente</span> <!--Icon de Ciruclo - ao lado do nome-->
            </a> 
            <?php endif; endif; ?>

            <a href="consultar-autor.php">
              <i class="bi bi-circle"></i>
              <span>Consultar Autores </span> <!--Icon de Ciruclo - ao lado do nome-->
            </a> 
            <a href="consultar-emprestimo.php">
              <i class="bi bi-circle"></i>
              <span>Consultar Tccs - Emprestado </span> <!--Icon de Ciruclo - ao lado do nome-->
            </a>
            <a href="consultar-devolucao.php">
              <i class="bi bi-circle"></i>
              <span>Consultar Devoluções </span> <!--Icon de Ciruclo - ao lado do nome-->
            </a>
          </li>
        </ul>
      </li>  <!-- Consultas de TCC / Usuários / TCC - Emprestado / Devoluções  Fim -->


       <!-- Emprestimo de TCC / Devoluções Inicio -->
      <li class="nav-item"> 
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Empréstimo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="cadastre-emprestimo.php">
              <i class="bi bi-circle"></i> <!--Circulo ao lado do nome -->
              <span>Emprestar - TCCs</span>
            </a>
          </li>
          <li>
            <a href="cadastre-devolucao.php">
              <i class="bi bi-circle"></i><!--Circulo ao lado do nome -->
              <span>Devolver - TCCs</span>
            </a>
          </li>
        </ul>
      </li><!-- Emprestimo de TCC / Devoluções Fim -->

      
        <!--Perfil / Sair Inicio-->
        <li class="nav-heading">Páginas</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="Perfil.php">
            <i class="bi bi-person"></i><!--Icon ao lado do nome -->
            <span>Perfil</span>
          </a>
        </li>
      
      <li class="nav-item">
          <a class="nav-link collapsed" href="login.php">
            <i class="bi bi-box-arrow-in-right"></i> <!--Icon de Sair-->
            <span>Sair</span>
          </a>
      </li>
    </ul> <!--Perfil / Sair Fim-->

  </aside><!-- Fim Parte Lateral Esquerda-->