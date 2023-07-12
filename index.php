<?php
require_once "modelo/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
    <link rel="stylesheet" href="vista/css/styles.css" />
    <link rel="stylesheet" href="vista/css/main.css" />
    <script src="vista/js/main.js"></script>


</head>
<style>
    [type=radio] {
  display: none;
}
#slider {
  height: 25.5vw;
  width: 20vh;
  position: relative;
  perspective: 1000px;
  transform-style: preserve-3d;
}
#slider label {
  margin: auto;
  width: 100%;
  height: 10%;
  border-radius: 4px;
  position: absolute;
  left: 0;
  right: 0;
  cursor: pointer;
  transition: transform 0.4s ease;
}
#s1:checked ~ #slide1, #s2:checked ~ #slide2,
#s3:checked ~ #slide3, #s4:checked ~ #slide4,
#s5:checked ~ #slide5 {
  box-shadow: 0 13px 25px 0 rgba(0,0,0,.3), 0 11px 7px 0 rgba(0,0,0,.19);
  transform: translate3d(0,0,0);
}
#s1:checked ~ #slide2, #s2:checked ~ #slide3,
#s3:checked ~ #slide4, #s4:checked ~ #slide5,
#s5:checked ~ #slide1 {
  box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(0,0,0,.2);
  transform: translate3d(15%,0,-100px);
}
#s1:checked ~ #slide3, #s2:checked ~ #slide4,
#s3:checked ~ #slide5, #s4:checked ~ #slide1,
#s5:checked ~ #slide2 {
  box-shadow: 0 1px 4px 0 rgba(0,0,0,.37);
  transform: translate3d(30%,0,-200px);
}
#s1:checked ~ #slide4, #s2:checked ~ #slide5,
#s3:checked ~ #slide1, #s4:checked ~ #slide2,
#s5:checked ~ #slide3 {
  box-shadow: 0 1px 4px 0 rgba(0,0,0,.37);
  transform: translate3d(-30%,0,-200px);
}
#s1:checked ~ #slide5, #s2:checked ~ #slide1,
#s3:checked ~ #slide2, #s4:checked ~ #slide3,
#s5:checked ~ #slide4 {
  box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(0,0,0,.2);
  transform: translate3d(-15%,0,-100px);
}

footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    footer a {
      color: #fff;
      text-decoration: none;
    }
</style>
<body style="background-color:white; color: #000;">

<title>Teleperformance</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="bar">
    <p class="parrafo-1">€ 144.000 -0.69% | 07.10.2023 at 17:38</p>
    </div> 
      
  <header>
    <nav>
      <div class="logo">
        <img src="img/tp-main-logo-svg.svg" alt="Teleperformance">
      </div>
    
      <ul>
        <li><a href="Teleperformance.html">WHY TP?</a></li>
        <li><a href="Teleperformance.html">SERVICES</a></li>
        <li><a href="Teleperformance.html">INDUSTRIES</a></li>
        <li><a href="Teleperformance.html">INSIGHTS</a></li>
        <li><a href="Teleperformance.html">CAREERS</a></li>
        <li><a href="Teleperformance.html">CSR</a></li>
        <li><a href="Teleperformance.html">INVENTORS</a></li>
      </ul>
    </nav>
  </header>

  <div class="bann">
    <img src="img/banner.webp" alt="Banner">
  </div>
  <br><br>
  <nav class="nav2">
    <ul class="ul2">
      <li><a href="Teleperformance.html" style="color: blueviolet;">Acerca de &nbsp;&nbsp;</a></li>
      <li><a href="Teleperformance.html">Carreras&nbsp;&nbsp;</a></li>
      <li><a href="Teleperformance.html">Interpreters at Home&nbsp;&nbsp;</a></li>
      <li><a href="Teleperformance.html">Proceso TP&nbsp;&nbsp;</a></li>
      <li><a href="Teleperformance.html">Códigos y politicas&nbsp;&nbsp;</a></li>
    </ul>
  </nav>

<br>
<section id="main">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Portfolio -->
                    <section>
                        <div class="row">
                            <div class="col-7 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <p>Quienes Somos</p>
                                    <p>Teleperformance es la #ExperienceTech con soluciones de Analytics, Ciberseguridad,
                                        Gaming, Virtual Reality y otros que conecta a las marcas más grandes del planeta
                                    <p>Es el equipo de Expertos en Interacciones más grande del mercado: multicultural,
                                        altamente calificado y profundamente conocedor, con una amplia gama de soluciones 
                                        omnicanal integradas y tecnología. TP en Colombia tiene más de 40 mil empleados
                                        en más de 300 ciudades y municipios, además de sedes presenciales en Bogotá, Medellín y Barranquilla.
                                        La compañía es pionera en la modalidad Work from Home en todo el país.
                                        Está certificada por Great Place to Work® y tiene el sello Friendly Biz.</p>
                                    </p>
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <section id="slider">
                                        <input type="radio" name="sliderImg" id="s1">
                                        <input type="radio" name="sliderImg" id="s2">
                                        <input type="radio" name="sliderImg" id="s3" checked>
                        
                                        <label for="s1" id="slide1">
                                        <img src="./img/new__colombia_people_1.jpg" height="100%" width="100%">
                                        </label>
                                        <label for="s2" id="slide2">
                                        <img src="./img/new__colombia_people_2.jpg" height="100%" width="100%">
                                        </label>
                                        <label for="s3" id="slide3">
                                        <img src="./img/photo_site_3.png" height="100%" width="100%">
                                        </label>
                                    </section>
                                </section>
                                <br> 
                            </div>
                        </div>
                    </section>
                
            <div class="col-12">
    </section>
  
     <!-- Main -->
     <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Portfolio -->
                    <section>
                        <header class="major">
                            <h2>Nuestras Soluciones se basan en</h2>
                        </header>
                        <div class="row">
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <a href="#" class="image featured"><img src="./img/i-conos-web_analytics.png" alt="" /></a>
                                    <center><p>Analytics</p></center>   
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <a href="#" class="image featured"><img src="./img/i-conos-web_cybersecurity.png" alt="" /></a>
                                    <center><p>Cybersecurity</p></center>  
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <a href="#" class="image featured"><img src="./img/i-conos-web_cloud-campus.png" alt="" /></a>
                                    <center><p>Cloud Campus</p></center>   
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                    <a href="#" class="image featured"><img src="./img/i-conos-web_gaming.png" alt="" /></a> 
                                    <center><p>Gaming</p></center>                       
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                <img src="./img/i-conos-web_ana-lisis-de-big-data.png" width="100%" height="200px" id="img">
                                    <center><p>Análisis de Big Data</p></center>       
                                    
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                <img src="./img/i-conos-web_actitud-impulsadora-por-el-roi.png" width="100%" height="200px" id="img">
                                    <center><p>Actitud impulsada por el ROI</p></center> 
                                    
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                <img src="./img/i-conos-web_tecnologi-a-de-alta-gama.png" width="100%" height="200px" id="img">
                                    <center><p>Tecnología de alta gama</p></center> 
                                </section>
                                <br> 
                            </div>
                            <div class="col-3 col-6-medium col-12-small">
                                <section class="box" id="caja1">
                                <img src="./img/i-conos-web_prediccio-n-de-comportamiento-del-cliente.png" width="100%" height="200px" id="img"> 
                                    <center><p class="ltp">Predicción de comportamiento del cliente</p></center>                           
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-12">
    </section>
<center>
    <h2 style="text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;"  ><b>Iniciemos</b></h2>

    <form class="formulario" action="">
     <div class="contenedor">
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="First Name"  id="txtNombre" required>
         </div>
         <br>
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Last Name" id="txtApellido">
         </div>
         <br>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="Email" placeholder="Email" id="txtCorreo" required>
         </div>
<br>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="float" placeholder="Phone Number" id="txtNumero">
         </div>
<br>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="Email" placeholder="Company" id="txtCompany">
         </div>
<br>
         <center><button id="btnRegistrar"  type="button" class="btn btn-primary">AGREGAR</button> </center>  

    </form>
    </center>

            <div class="modal-footer">
                
            </div>
    </div>
    </div>
</b>

<footer>
    <p>© 2023 Teleperformance</p>
    <p>Visítanos en <a href="https://www.teleperformance.com/en-us/locations/colombia-site/colombia/">Teleperformance</a></p>
  </footer>
</body>

</html>
