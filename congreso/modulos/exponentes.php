<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exponentes - Vida y libertad</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

    <style>
body::after, body::before{
  content: '';
  position: absolute;
  height: 300%;
  width: 100%;
  background-image: conic-gradient(from var(--angle), #1145ff, #8b9aff, #1c1d4f, #3457af, #1145ff);
  top: 50%;
  left: 50%;
  translate: -50% -50%;
  z-index: -1;
  padding: 3px;
  border-radius: 5px;
  animation: 4s spin linear infinite;
  margin: 0;
  padding: 0;
  background-color: #1c1d4f;
}

        .ex{
            border:2px solid #FFF;
            background-color: #1c1d4f;
            position: absolute;
            left: 50%;
            top: 95%;
            transform: translate(-50%,-50%);
            box-shadow: 0px 0px 5px 5px #fff;
        }

        section>p{
            padding: 20px;
        }

        .te{
            font-size: 35px;
            font-weight: bold;
        }

        .exhibitor img{
            width:80%;
            height:500px;
            background-repeat: no-repeat;
            background-size: cover;
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
                       <a href="horario.php" > 
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
                       <a href="exponentes.php" class="active">
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
  <div class="ex">
  <section>
        <span class="te">Exponentes</span>
    </section>
    <main>
        <section class="exhibitor">
            <h2 style="font-weight:500;">Samuel Emanuel</h2>
            <br>
            <img src="ruta/a/la/foto.jpg" alt="Foto del Expositor">
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
            <br>
            <hr>
            <br>
            <h2 style="font-weight:500;">José Medina</h2>
            <br>
            <img src="../img/IMG_5133.jpg" alt="Foto del Expositor">
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
            <br>
            <hr>
            <br>
            <h2 style="font-weight:500;">Jorge Isea</h2>
            <br>
            <img src="#" alt="Foto del Expositor">
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
            <br>
            <hr>
            <br>
            <h2 style="font-weight:500;">Neudys Valera</h2>
            <br>
            <img src="#" alt="Foto del Expositor">
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
        </section>
        <!-- Puedes agregar más secciones para otros expositores aquí -->
    </main>
  </div>
  <footer>
    <p>&copy; 2025 Vida y libertad</p>
  </footer>
</body>
</html>