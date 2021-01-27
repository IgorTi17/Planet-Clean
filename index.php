<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Planet Clean</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/dropdown/css/estilo2.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>

<section class="menu cid-s48OLK6784" once="menu" id="menu1-h">  
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container">
      <div class="navbar-brand">
        <span class="navbar-logo">
          <a href="index.php">
            <img src="assets/images/logo.png" alt="Planet Clean" style="height: 3.8rem;">
          </a>
        </span>
        <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.php">PLANET CLEAN</a></span>
      </div>
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
          <li class="nav-item relato">
            <a class="nav-link link text-black display-4" href="relato.html">
              <span class="mobi-mbri mobi-mbri-alert mbr-iconfont mbr-iconfont-btn"> Relatar Poluição</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="quemSomos.html">Quem Somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="contato.html">Contato</a>
          </li>
        </ul>   
      </div>
    </div>
  </nav>
</section>


<br><br>
<?php
  include('assets/php/conexao.php');

  $result_relato = "SELECT * FROM relato"; 
  $resultado_relato = mysqli_query($conexao, $result_relato);

  echo "<table>";
  echo "<tr>";
  echo "<th>ENDEREÇO</th>";
  echo "<th>INFORMAÇÃO SOBRE</th>";
  echo "<th></th>";
  echo "</tr>";

  while ($row_relato = mysqli_fetch_assoc($resultado_relato)) {  
  echo "<tr>";
  echo "<td>".$row_relato['endereco']."</td>";
  echo "<td>".$row_relato['informacao']."</td>";
  echo "<td></td>";
  echo "</tr>";
  }echo "</table><br>";
?>
<br><br>



<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">
  <div class="container">
    <div class="media-container-row align-center mbr-white">
      <div class="row row-links">
        <ul class="foot-menu">
          <li class="foot-menu-item mbr-fonts-style display-7"><a href="relato.html" class="text-white">Relatar Poluição</a></li>

          <li class="foot-menu-item mbr-fonts-style display-7"><a href="quemSomos.html" class="text-white">Quem Somos</a></li>

          <li class="foot-menu-item mbr-fonts-style display-7"><a href="contato.html" class="text-white">Contato</a></li></ul>
        </div>
            
        <div class="row social-row">
          <div class="social-list align-right pb-2">
            <div class="soc-item">
              <a href="https://twitter.com/" target="_blank">
                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div>

            <div class="soc-item">
              <a href="https://www.facebook.com/" target="_blank">
                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div>

            <div class="soc-item">
              <a href="https://www.youtube.com/" target="_blank">
                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
              </a>
            </div>

            <div class="soc-item">
              <a href="https://instagram.com/" target="_blank">
                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
              </a>
            </div>
          </div>
        </div>
            
        <div class="row row-copirayt">
          <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
            © Copyright 2020 Planet Clean. Todos os direitos reservados.
          </p>
        </div>
      </div>
  </div>

<script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="assets/theme/js/script.js"></script><script src="//code.jivosite.com/widget/mJZNwqn7wf" async></script>

</body>
</html>