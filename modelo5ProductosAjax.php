<?php

include("prodcutos_clases.php");

$_POST['idColor5'] = htmlentities($_POST['idColor5']);
$_POST['idSize5'] = htmlentities($_POST['idSize5']);
$idSize5 = $_POST['idSize5'];
$idColor5 = $_POST['idColor5'];

switch ($_POST['idColor5']) {
    case 0:
        $currentProduct5 = $bolsa_SPS;
        $nombreProducto5 = "Standup Pouch con Spout";
        $imagen1_5 = "img/productos/SUP-Negra.gif";
        $imagen2_5 = "img/productos/SUP-Negra.gif";
        $imagen3_5 = "img/productos/SUP-Negra.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto5.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_5.'" id="imagen1_5" width="80%" height="70%">
        </div>

        <!--Tamaño y descripcion-->
        <div class="col-sm-8 ">

            <!--Titulo-->
            <div class="row">

                <div class="col-sm-6">
                    <h5>Tamaños Disponibles</h5>
                </div>
                <div class="col-sm-6">
                    <h5>Colores</h5>
                </div>
            </div>

            <!--Select-->
            <div class="row">
                <div class="col-sm-6 select-outline">
                    <select class="form-control" id="size5" onchange="actualizarProducto5()">'
    .$currentProduct5->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color5" onchange="actualizarProducto5()">
                        <option value="0">-</option>
                        
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct5->imprmir_medidas($idSize5).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        
                        <li>'.$currentProduct5->get_laminacion(). '</li><!--Este es un atributo unico-->
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-11 text-right">
                    <p>
                        <a href ="info.php"> <button class="boton_publicidad">Mas informacion</button></a>
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!---------- FIn Caracetristicas----------------->

    <script>
      $("#color5").val(' .$idColor5.');
      $("#size5").val('.$idSize5.');
      $("#imagen1_5").fadeIn(1500);
      $("#imagen2_5").fadeIn(1500);
      $("#imagen3_5").fadeIn(1500);
    </script>
';


?>
