<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<br><h2>Helados viajeros</h2>
<h5>Bienvenido</h5>

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
/></div>
<!-- Boton de ingresar -->
<div class="form-group">
<input type="submit" value="Iniciar sesión" class="btn-enviar" />
</div>
</form>
</div>
</main>
    
<h3>¡Aún no tengo una cuenta! <a href="registro.php" class="inicio">Registrarse<a></h3>


<!--PHP-->
<?php
    
    include("login_code.php");
?>
</body>
</html>