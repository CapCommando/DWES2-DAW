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

        <form name = "form1" method = "get" action="distritos_ctl.php">
            <p>Barrio:
                <?php
                    include 'datos_patraix.php';

                    echo '<select name="distrito">';
                    foreach ($datos_distritos as $barrio => $poblacion) {
                        if ($barrio == 'Patraix'){
                            echo '<option value="' . $barrio . '" selected>' . $barrio . '</option>';
                        } else {
                            echo '<option value="' . $barrio . '">' . $barrio . '</option>';
                        }
                    }
                    echo '</select>'; 
            ?>
            </p>
            <p>
                <input type="checkbox" name="muestra_todo"> Mostrar todos los Barrios <br>
            </p>   
            <p>
                <input type="submit" name="Submit" value="Consultar">
            </p>
            </form>


            <?php
                echo '<br><br><a href="menu.php?nombre=' . $nombre . '&apellidos=' . $apellidos . '">Volver</a>';
            ?>
    </body>
</html>
