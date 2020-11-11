<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/jpeg" href="Imagenes/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />    


    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/icon/style.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Contacto</title>



  </head>
  <body>
    <header>
    <div class="header-nav">
      <div class="container Helados-nav-container"> 
      <img src="Imagenes/Logo.png" class="image" style="width:10%" class="left">
       <h2>Helados viajeros</h2>
       <nav class="navigation">
       <ul>
       <li><a href="Index.php" target="_parent">Inicio</a></li>
       <li><a href="Historia.php" target="_parent">Historia</a></li>
      <li><a href="productos.php" target="_parent">Productos</a></li>
      <li><a href="" target="_parent">Promociones</a></li>
      <li><a href="Contacto.php">Contacto</a></li>
      <li><a href="iniciar_sesion.php">Cuenta</a></li>

              
       </ul>
      </nav>
      </div>
    </header><br>
    <br><p class="slogan">
    <span>Helados viajeros</span> un dulce viaje de sabor

    <main class="main">
      <div class="form-container">
        <form action="enviodemail.php" id="formulario" role="form" method="post">
          <h2>Contáctanos</h2>
          <!-- Asunto -->
          <div class="form-group">
            <input
              type="text"
              name="nombre"
              id="nombre"
              class="input"
              placeholder="Ingrese su nombre completo"
              required
            />
          </div>
          <div class="form-group">
          <input
              type="email"
              name="email"
              id="email"
              class="input"
              placeholder="Ingrese su correo"
              required
            />
          </div>
          <!-- Mensaje -->
          <div class="form-group">
            <textarea
              name="Mensaje"
              id="Mensaje"
              class="input"
              placeholder=" Mensaje"
              required
            ></textarea>
          </div>
           <!-- Boton enviar y limpiar-->
          <div class="form-group">
            <input type="submit" value=" Enviar " class="btn-enviar" />
            <input type="reset" value="Limpiar" name="Limpiar" class="btn-limpiar">
          </div>
        </form>
      </div>



       <!-- Links de redes sociales -->
      <div class="redes-container">
        <h4 class="subtitle">Siguenos en nuestras redes sociales</h4>
        <div class="redes-sociales">
          <a href="https://www.facebook.com/Helados-viajeros-Un-dulce-viaje-de-sabores-101970618389849" class="redes-items" target="_blank">
            <span class="icon-facebook"></span> Facebook
          </a>
          <a href="https://www.instagram.com/helados_viajeros/?hl=es-la" class="redes-items" target="_blank">
            <span class="icon-instagram"></span> Instagram
          </a>
          <a href="" class="redes-items" target="_blank">
              <span class="icon-whatsapp"></span> Whatsapp
      <!-- En esta parte se agregara la ubicación de nuestro negocio -->

          </a>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>