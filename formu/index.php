<?php include "conexion.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<body>

<header class="botones">
    <button data-target="#registro">Registro</button>
    <button data-target="#ver-cliente">Ver cliente</button>
</header>

<section class="contenido">


    <div data-content class="container-regi active" id="registro">

        <div class="Registro-container" id="RegistroContainer">
            <h1 class="title">Registro de Cliente</h1>
            <form method="post" action="conexion.php">
                <div class="formu-container">
                    <span class="Identificacion">Nombre</span>
                    <input type="text" name="nombre" class="input-Regi">
                </div>

                <!-- <div class="formu-container">
                    <span class="Identificacion">Identificacion</span>
                    <input type="text" name="id_t" class="input-Regi">
                </div> -->

                <div class="formu-container">
                    <span class="Identificacion">Apellido</span>
                    <input type="text" name="apellido" class="input-Regi">
                </div>
                

                <div class="formu-container">
                    <span class="Identificacion">Contacto</span>
                    <input type="text" name="contacto" class="input-Regi">
                </div>

                <input type="submit" value="Guardar" name="enviar" class="boton-registro">
                <div id="Register" class="boton-2">Cancelar</div>
            </form>

            <?php 

             
            ?>
        </div>
    </div>
    <div data-content id="ver-cliente">
        <div class="contenedor-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CONTACTO</th>
                        <th>ELIMINAR</th>
                        <th>ACTUALIZAR</th>
                    </tr>
                    <?php?>
                </thead>
                
                <?php foreach($datos as $dato){ ?>
                    <div class="pp">
                    <tr>
                        <td><?php echo $dato[0];?></td>
                        <td><?php echo $dato[1];?></td>
                        <td><?php echo $dato[2];?></td>
                        <td><?php echo $dato[3];?></td>
                        <td><a href="?id=<?php  echo $dato[0];?>"><img src="elim.svg" alt=""></a></td>
                        <td><img src="editar.svg" alt=""></td>
                    </tr>
                    </div>
                <?php }?>

            </table>
            <div class="ir">
                <a href="inicio.html">volver al inicio</a>
                <a href="index.html">nuevo</a>
            </div>
        </div>
    </div>


</section>
<!-- <section class="form-register">
    <h4>Registrar Cliente</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">
    <p><a href="#">Cancelar</a></p>
</section> -->
<script src="main.js"></script>
</body>
</html>