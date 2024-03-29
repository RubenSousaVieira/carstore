<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>PHPJabbers.com | Free Car Dealer Website Template</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">RIBERA CAR<em> Website</em></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="cars.html" class="active">Carros</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sobre</a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.html">About Us</a>
                  <a class="dropdown-item" href="blog.html">Blog</a>
                  <a class="dropdown-item" href="team.html">Team</a>
                  <a class="dropdown-item" href="testimonials.html">Depoimentos</a>
                  <a class="dropdown-item" href="terms.html">Termos</a>
                </div>
              </li>
              <li><a href="contact.html">Contacto</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Call to Action Start ***** -->
  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2><small><del>$12 999</del></small> <em>$11 779</em></h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Call to Action End ***** -->

  <!-- ***** Fleet Starts ***** -->
  <section class="section" id="trainers">
    <div class="container">
      <br>
      <br>

      <?php
      $servername = "http://192.168.1.1:8888/psb212291";
      $username = "seu_nome_de_usuário";
      $password = "sua_senha";
      $dbname = "psb212291_standautopap";

      // Criar conexão
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Verificar conexão
      if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
      }

      // Query SQL para selecionar todos os dados da tabela carros
      $sql = "SELECT * FROM carros";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Saída de dados de cada linha
        while ($row = $result->fetch_assoc()) {
          echo "<div class='row'>";
          echo "<div class='col-sm-6'>";
          echo "<label>Marca</label>";
          echo "<p>" . $row["marca"] . "</p>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<label>Modelo</label>";
          echo "<p>" . $row["modelo"] . "</p>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<label>Primeiro registo</label>";
          echo "<p>" . $row["primeiro_registo"] . "</p>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<label>Quilometragem</label>";
          echo "<p>" . $row["quilometragem"] . "</p>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<label>Combustível</label>";
          echo "<p>" . $row["combustivel"] . "</p>";
          echo "</div>";
          echo "<div class='col-sm-6'>";
          echo "<label>Preço</label>";
          echo "<p>" . $row["preco"] . "</p>";
          echo "</div>";
          echo "</div>";
        }
      } else {
        echo "0 resultados";
      }
      $conn->close();
      ?>

    </div>
  </section>
  <!-- ***** Fleet Ends ***** -->

  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/mixitup.js"></script>
  <script src="assets/js/accordions.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
