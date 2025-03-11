<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Página Inicial</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Fontawesome Link de Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="Biblioteca.php">Biblioteca Digital</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="50px" height="95px"> 
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg> <!--Tres Traços-->
        </label>
        
        <!--UL PARTE Lateral Esquerda De cima -->
        <ul class="links">  
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#contact">Contactos</a></li>
          <li><a href="login.php">Entrar</a></li>
        </ul>
      </nav>
    </header>

    <section class="container" id="inicio"> 
      <div class="content">
        <div class="text">
          <h1>Biblioteca Digital AJM</h1>
          <p> Seja Bem-Vindo a nossa Biblioteca Digital</p>
        </div>
        <a href="#services">Nossos Serviços</a>
      </div>
    </section>

    <section class="services" id="services">
      <h2>Nossos Serviços</h2>
      <p> Dê uma olhada aos nossos serviços.  </p>
      <ul class="cards">
        <li class="card">
          <img src="assets/img/cadastro.jpg" alt="img">
          <h3>Cadastro de TCCs</h3>
          <p>Nossa plataforma de cadastro de tccs oferece uma experiência simplificada para você catalogar todos os tccs de sua biblioteca.</p>
        </li>
        <li class="card">
          <img src="assets/img/emprestimo.jpg" alt="img">
          <h3>Empréstimo de TCCs</h3>
          <p>Nosso sistema oferece uma gestão avançada para empréstimos de tccs, permitindo que a biblioteca mantenha um controle preciso sobre os recursos.</p>
        </li>
        <li class="card">
          <img src="assets/img/devolucao.jpg" alt="img">
          <h3>Devolução de TCCs</h3>
          <p>Nossa solução de biblioteca escolar não se resume apenas a empréstimos, mas também simplifica o processo de devolução.</p>
        </li>
      </ul>
    </section>

    <section class="about" id="about">
      <h2>Sobre Nós</h2>
      <p>Descubra nossa história na prestação de serviços</p>
      <div class="row company-info">
        <h3>Nossa História </h3>
        <p>A nossa Biblioteca Digital de Trabalhos de Conclusão de Curso (TCC) foi criada com o objetivo de oferecer aos estudantes, professores e pesquisadores um espaço acessível e organizado para a consulta e compartilhamento de TCCs de diversas áreas do conhecimento. </p>
      </div>
      <div class="row mission-vision">
        <h3>Nosso Objetivo</h3>
        <p>- Permitir que os estudantes, professores e pesquisadoes, acesssem os tccs de forma rápida e eficiente. <br>
            - Garantir a conservação a longo prazo dos trabalhos acadêmicos, criando um arquivo histórico que possa ser consultado e utilizado como base para novas pesquisas e projetos <br>
           - Oferecer uma plataforma integrada para que professores e avaliadores possam consultar e analisar os TCCs de maneira mais prática e organizada.
        </p>
        <h3>Nossa Missão</h3>
        <p> Oferecer uma plataforma digital que permita a conservação dos TCCs produzidos no Instituto, promovendo a disseminação da pesquisa acadêmica e técnica. </p>
      </div>
    </section>

    <section class="contact" id="contact">
      <h2>Contacta-nos</h2>
      <p>Entre em contato conosco para qualquer dúvida ou feedback</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> Luanda, C.Kilamba, Colégio Anuarite</p>
            <p><i class="fas fa-envelope"></i> bibliotecadigital13@gmail.com</p>
            <p><i class="fas fa-phone"></i> (+244) 948-537-081 /939-963-854 / 948-140-468</p>
            <p><i class="fas fa-clock"></i> De segunda-domingo : 24/24h</p>
          </div>          
        </div>
        <div class="col form">

          <form>
            <input type="text" placeholder="Nome" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Messagem" required></textarea>
            <button id="submit" type="submit">Enviar mensagem</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div>
        <span>Biblioteca Digital</span>
        <span class="link">
            <a href="#">Inicio</a>
            <a href="#contact">Contactos</a>
        </span>
      </div>
    </footer>
  </body>
</html>