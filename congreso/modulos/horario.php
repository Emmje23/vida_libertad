<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horarios - Vida y libertad</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

  <style>
  .crono>img{
  width: 28%;
  height: 600px;
  display:block;
  margin:auto;
  margin-top: 80px;
  box-shadow: 0px 0px 30px 10px #00c2cb;
  }

  .crono img {
 text-shadow: 0px 0px 10px #00c2cb, 0px 0px 20px #fff;
}
  </style>
 
</head>
<body>
  <header>
 
    <div class="sidebar">
        <div class="side-header">
            <h3>Menu</h3>
        </div>
    
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" ><img src="../img/logomodulo.jpg" alt="G+"></div>
            </div>
    <div class="side-menu">
    <ul>
                <li>
                       <a href="../index.php">
                            <span class="las la-home"></span>
                            <small>Inicio</small>
                        </a>
                    </li>
                    <li>
                       <a href="horario.php" class="active"> 
                       <span class="las la-calendar"></span>
                            <small>Horarios</small>
                        </a>
                    </li>
                 <!--  <li>
                    <a href="iterinarios.php" >
                    <span class="las la-money-bill"></span>
                            <small>Itinerario</small>
                        </a>
                    </li> -->
                    <li>
                       <a href="exponentes.php">
                            <span class="las la-user-friends"></span>
                            <small>Exponentes</small>
                        </a>
                    </li>
                    <li>
                       <a href="temas.php">
                            <span class="las la-book"></span>
                            <small>Temas a abordar</small>
                        </a>
                    </li>
                </ul>
                <section>
                <a class="contact" href="https://www.instagram.com/generacionplus/"><h6>Contactanos: @generacionplus</h6></a>
                </section>
            </div>
  </header>
  <!-- <main>
  <div class="banner">
      <div class="banner-content">
      <h1>Congreso vida y libertad</h1>
        <img class="banner-img" src="../img/banner2.jpeg" alt="vida y libertad banner">
      </div> 
</div>
  </main>-->
  <div class="crono">
    <img src="../img/horario.jpeg" alt="">
  </div>
  <footer>
    <p>&copy; 2025 Vida y libertad</p>
  </footer>
</body>
</html>