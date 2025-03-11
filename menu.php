  <!-- ======= Parte Lateral Esquerda ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Painel</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <!-- Inicio Todos os Livros -->
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
      </li><!-- Fim Todos os Livros Link -->

        <!--Inicio de Cadastros-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Cadastrar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="Cadastre-tcc.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Trabalho de Conclusão de Curso</span>
            </a>
          </li>
          <li>
            <a href="Cadastre-autor.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Autor</span>
            </a>
          </li>
          
        </ul>
      </li><!-- Fim Cadastros Nav -->

      <!--Consultar Livros Inicio-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Consultas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="Consultar-tccs.php">
              <i class="bi bi-circle"></i> <!--Icon de Ciruclo - ao lado do nome-->
              <span>Consultar Tccs</span>
            </a>
          </li>
          <li>
            <a href="Consultar-autor.php">
              <i class="bi bi-circle"></i>
              <span>Consultar Autor</span> <!--Icon de Ciruclo - ao lado do nome-->
            </a>
          </li>
        </ul>
      </li> <!--Consultar Livros Fim-->

      <li class="nav-item"> <!--Inicio Emprestimo -->
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Empréstimo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Emprestimo-tccs.php">
              <i class="bi bi-circle"></i> <!--Circulo ao lado do nome -->
              <span>Emprestar - TCCs</span>
            </a>
          </li>
          <li>
            <a href="Tccs-emprestado.php">
              <i class="bi bi-circle"></i><!--Circulo ao lado do nome -->
              <span>TCCs - Emprestado</span>
            </a>
          </li>
        </ul>
      </li><!-- Fim Emprestimo -->

      <li class="nav-heading">Páginas</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="Perfil.php">
          <i class="bi bi-person"></i><!--Icon ao lado do nome -->
          <span>Perfil</span>
        </a>
      </li><!-- Fim Perfil Página  -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i> <!--Icon de Sair-->
          <span>Sair</span>
        </a>
      </li><!-- Fim Sair Página  -->
    </ul>

  </aside><!-- Fim Parte Lateral Esquerda-->