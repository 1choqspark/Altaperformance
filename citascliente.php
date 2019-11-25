<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<title>Alta Performance</title>

  <body>
    <div class="container-fluid">
      <header class="header">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand"><img src="imgs/coqslogo.jpg" style="width: 60px;"></a>
            
            <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#uno">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="uno">
              <ul class="navbar-nav">
                                <li class="nav-item"><a href="Indexsencilla.html" class="nav-link" style=" font-size: 20px;"><b>Coq`s Tuning Performance</b></a></li>
                <li class="nav-item"><a href="serviciosypromociones.php" class="nav-link"  id="navbardrop" style="font-size: 15px;"><b>Servicios y Promociones</b></a></li>
                <li class="nav-item"><a href="tipsydatoscuriosos.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Tips y datos curiosos</b></a></li>
                <li class="nav-item"><a href="acercade.html" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Acerca de nosotros</b></a></li>
                <li class="nav-item"><a href="index.php" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>Login</b></a></li>
                <li class="nav-item"style="background-color: grey;"><a href="index.php" class="nav-link" id="navbardrop"  style="font-size: 15px;"><b>citas</b></a></li>

              </ul>
            </div>
          </nav>
      </header>

    </div>
    <!--**********Termina el conteneor del header***********-->
    <!--**********inicia el titulo***********-->
    <div class="container-fluid col-11">
      <div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 35px; background-color: rgba(255,0,0,.75);font-size: 25px; color: black;"><b>...Genera citas...</b></div>
      <!--**********termina el titulo***********-->

               

  <nav id="Margen">
    <div id="Margen_izq">
      <form  action="insertar_cita.php" method="post"  >
        <h3>Marca Vehiculo:</h3>
             <select name="marca" id="Marca Vehiculo" onChange="mostrarPoblaciones();">
                <option value="x" >ELIJA UNA MARCA</option>
                <option value="Audi">Audi</option>
                  <option value="BMW">BMW</option>
                  <option value="Chevrolet">Chevrolet</option>
                <option value="Nisan">Nisan</option>
                  <option value="Mazda">Mazda</option>
                  <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Volkswagen">Volkswagen</option>
         </select>
     </br>
         <h3>Modelo:</h3>
            <input name="modelo" type="text" placeholder="ejemplo: jetta, tzuru">
        <br>
        <h3>Año:</h3>
          <input name="año" type="text" placeholder="ingresa el año del vehiculo">
                <br>
        <h3>Servicio:</h3>
        <select class="item" id="Servicio" name="servicio">
                <option value="Alineacion" name="servicio">Alineacion</option>
              <option value="Balanceo" name="servicio">Balanceo</option>
                <option value="Afinacionmenor" name="servicio">Afinacion menor</option>
                <option value="aceite" name="servicio">Cambio de aceite y filtro</option>
                <option value="balatas" name="servicio">Cambio de balatas</option>
                <option value="Afinacionmayor" name="servicio">Afinacion mayor</option>
                </select>
                <br>
                <select class="item" id="Fechadecitas" name="fecha">
                <label for="fecha">fecha</label>
                        <input type="date" class="form-control" id="fecha"  placeholder="ingresa fecha" name="fecha">
                </select>
                <h3>Hora de la cita</h3>
             <select name="hora" id="Marca Vehiculo" onChange="mostrarPoblaciones();">
                <option value="11:00" >11:00am</option>
                <option value="12:00">12:00pm</option>
                  <option value="01:00">01:00</option>
                  <option value="02:00">02:00</option>
                <option value="03:00">03:00</option>
                  <option value="04:00">04:00</option>
                  <option value="05:00">05:00</option>
                <option value="06:00">06:00</option>
         </select>

        <p>
        <input id="button" type="submit" name="Insertar" Value="Insertar">
        
      </form>
    </div>
  </nav>
                
    <!--**********inicia el footer***********-->
<div class="container-fluid fixed-bottom">  
       <div class="progress progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;height: 25px; background-color: rgba(255,128,0,0.7);font-size: 25px; color: black;"><b>...Antonio Pérez Vázquez...</b></div>
</div>
<!--**********termina el footer***********-->
 </body>
<!--**********Termina el contenido***********-->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js.js"></script>
      <script src="js/bootstrap.min.js.map"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</html>