<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/jpeg" href="Imagenes/Logo.png">


</head>

<body>

<header>
<div class="header-nav">
<div class="container Helados-nav-container">
<img src="Imagenes/Logo.png" class="image" style="width:10%" class="left">
<h2 class="text">Helados viajeros</h2>
<nav class="navigation">
<ul>
<li><a href="Index.php" target="_parent">Inicio</a></li>
<li><a href="Historia.php" target="_parent">Historia</a></li>
<li><a href="productos.php" target="_parent">Productos</a></li>
<li><a href="" target="_parent">Promociones</a></li>
<li><a href="Contacto.php">Contacto</a></li>
<li><a href="iniciar_sesion.php">Cuenta</a></li>
<br>
</ul>
</nav>
</div>
</div>
</header>

<br><p class="slogan">
    <span>Helados viajeros</span> un dulce viaje de sabor    


<main class="main">
      <div class="form-container">
        <form method="post">
        <h2>Registrarse</h2>
          <!-- Asunto -->
          <div class="form-group">
            <input
              type="text"
              name="nombre"
              id="nombre"
              class="input"
              placeholder="Ingrese su nombre"
              required
            />
          </div>
      <div class="form-group">
          <input
              type="email"
              name="email"
              id="email"
              class="input"
              placeholder="Ingrese su correo electrónico"
              required
            />
          </div>
          <!--Contraseña-->
          <div class="form-group">
          <input
              type="password"
              name="password"
              id="password"
              class="input"
              placeholder="Ingrese su contraseña"
              required
            />
          </div>
          <div class="form-group">
          <input
              type="date"
              name="born"
              id="born"
              class="input"
              placeholder="Ingrese su fecha de nacimiento"
              required
            />
          </div>
           <!-- Boton de registrarse -->
          <div class="form-group">
            <input type="submit" value="Registrarse" class="btn-enviar" />
          </div>
        </form>
      </div>
      </main>
    <h3>¡Ya tengo una cuenta! <a href="iniciar_sesion.php" class="inicio">Iniciar sesion<a></h3>

     <!-- PHP -->
    <div class="registro">
                
                <?php
                include("regis_code.php");
                ?></div>
</body>
</html>



 




