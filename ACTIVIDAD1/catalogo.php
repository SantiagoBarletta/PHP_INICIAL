<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>HorrorWeb</title>
    <link href="css/estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">
        <header>
            <nav id="botonera_principal">
                <div class="titulo">
                    <h1>HorrorWeb</h1>
                    <h2>La web del terror</h2>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="contacto.php">Contáctenos</a></li>
                </ul>
            </nav>
            <div id="marca">

            </div>
        </header>
        <section id="contenido">
            <h2>Catálogo</h2>


            <?php
            //Declaracion de constante
            const DESCUENTO = 20;
            //Declaracion de variables
            $pelicula1 = 'Viernes 13';
            $precio1 = 1500.00;
            $info1 = 'El campamento de verano de Crystal Lake reabre sus puertas tras permanecer varios años cerrado a raíz de un accidente. A partir de ese momento, comienza a aparecer gente muerta en extrañas circunstancias.';
            $imagen1 = 'viernes13.jpg';
            $pelicula2 = 'Pesadilla';
            $precio2 = 1250.00;
            $info2 ='Varios jóvenes de una pequeña localidad tienen habitualmente pesadillas en las que son perseguidos por un hombre deformado por el fuego y que usa un guante terminado en afiladas cuchillas. Algunos de ellos comienzan a ser asesinados mientras duermen por este ser, que resulta ser un asesino al que los padres de estos jóvenes quemaron vivo hace varios años tras descubrir que había asesinado a varios niños.';
            $imagen2 = 'pesadilla.jpg';
            $pelicula3 = 'Halloween';
            $precio3 = 1450.00;
            $info3 = 'El pequeño Michael Myers asesina a su hermana en la noche de Halloween de 1963, por lo que es internado en un psiquiátrico. Seis años más tarde, Myers se escapa del hospital y regresa a su pueblo natal, Haddonfield, en Illinois. El psicópata dará comienzo a una serie de horripilantes asesinatos mientras uno de los médicos que lo trataba en el hospital le sigue la pista.';
            $imagen3 = 'halloween.jpg';
            //Operadores arismeticos
            $TotalCombo = $precio1 + $precio2 + $precio3;
            $ConDescuento = $TotalCombo - $TotalCombo * DESCUENTO / 100;
            ?>

            <div id="producto">
                <div id="imagen"><img src="imagenes/<?php echo "$imagen1?"; ?>"></div>
                <div id="descripcion">
                    <h3> <?php echo "$pelicula1"; ?></h3>
                    <b>Pelicula:</b> <?php echo "$pelicula1"; ?><br>
                    <b>Precio:</b> <?php echo "$ $precio1"; ?><br>
                    <b>Caracteristicas:</b> <?php echo "$info1"; ?>
                </div>
            </div>
            <div id="producto">
                <div id="imagen"><img src="imagenes/<?php echo "$imagen2?"; ?>"></div>
                <div id="descripcion">
                    <h3> <?php echo "$pelicula2"; ?></h3>
                    <b>Pelicula:</b> <?php echo "$pelicula2"; ?><br>
                    <b>Precio:</b> <?php echo "$ $precio2"; ?><br>
                    <b>Caracteristicas:</b> <?php echo "$info2"; ?>
                </div>
            </div>
            <div id="producto">

                <div id="imagen"><img src="imagenes/<?php echo "$imagen3?"; ?>"></div>
                <div id="descripcion">
                    <h3> <?php echo "$pelicula3"; ?></h3>
                    <b>Pelicula:</b> <?php echo "$pelicula3"; ?><br>
                    <b>Precio:</b> <?php echo "$ $precio3"; ?><br>
                    <b>Caracteristicas:</b> <?php echo "$info3"; ?>
                </div>
            </div>
            <div id="producto">
               <p> Precio total por las 3 Peliculas: <?php echo "$". $TotalCombo ?></p>
               <p> Total con 20% de descuento por combo: <?php echo "$". $ConDescuento ?></p>

            </div>
               </section>


<footer>
Desarrollado por <a href="https://santiagobarletta.000webhostapp.com/" target="_new">Santiago Barletta</a></footer>
</section>
</body>
</html>