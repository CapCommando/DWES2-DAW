<!DOCTYPE html>
<html>
    <head>
        <title>
            Consulta datos de Barrios
        </title>
    </head>
    <body>
        <?php
            $nombre = $_GET['nombre'];
            $apellidos = $_GET['apellidos'];
            echo '<h3>¡Bienvenido, ' . $nombre . ' ' . $apellidos . '!</h3>';
        ?> 

        <h2>Consulta datos por Barrios(Distrito de Patraix)</h2>

        <form name = "form1" method = "post" action="patraix_ctl.php">
            <p>Barrio:
                <?php
                    include 'datos_patraix.php';
                    echo '<select name="barrrio">';
                    echo '<option value="0" selected>mostrar todos</option>';
                    foreach ($datos_patraix as $indice => $itera) {
                            $barrio=$value[0];
                            echo '<option value="' . $indice . '" selected>' . $barrio . '</option>';
                                          }
                    echo '</select>'; 
            ?>
            </p> 
            <p>
                <input type="submit" name="Submit" value="Consultar">
            </p>
            </form>
        

            <?php
                echo '<input type="hidden" name="nombre" value="'.$nombre.'">';
                echo '<input type="hidden" name="apellidos" value="'.$apellidos.'">';
                echo '<br><br><a href="menu.php?nombre=' . $nombre . '&apellidos=' . $apellidos . '">Volver</a>';
            ?>
    </body>
</html>
