<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>HorrorWeb</title>
<link href="css/estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        <div class="titulo">
        <h1>HorrorWeb</h1><h2>La web del terror</h2>
        </div>
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos</h2>
   
    <form>
    <ul>
        <li><label>Nombre:</label> <input type="text" name="nombre" required placeholder="Nombre"></li>
        <li><label>Apellido:</label> <input type="text" name="apellido" required placeholder="Apellido"></li>
        <li><label>Edad:</label> <input type="number" name="edad" min="0" max="99" required class="number" placeholder="18"></li>
        <li><label>Correo Electrónico:</label> <input type="email" name="mail" required placeholder="ejemplo@ejemplo.com"></li>
        <li><label>Motivo de la consulta:</label> <input type="text" name="motivo" required placeholder="Motivo de la Consulta"></li>
        <li><label>Mensaje:</label> <textarea name="mensaje" rows="5" required placeholder="Escriba su consulta aquí"></textarea></li>
        <li><input type="submit" class="boton"></li>
</ul>
    </form>
    </section>


    <footer>
Desarrollado por <a href="https://santiagobarletta.000webhostapp.com/" target="_new">Santiago Barletta</a></footer>
</section>
</body>
</html>