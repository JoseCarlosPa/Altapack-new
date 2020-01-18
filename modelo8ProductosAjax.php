<?php

include("prodcutos_clases.php");

$_POST['idColor8'] = htmlentities($_POST['idColor8']);
$_POST['idSize8'] = htmlentities($_POST['idSize8']);
$idSize8 = $_POST['idSize8'];
$idColor8 = $_POST['idColor8'];

switch ($_POST['idColor8']) {
    case 0:
        $currentProduct8 = $plateada_SPZ;
        $nombreProducto8 = "Standup Pouch sin Zipper";
        $imagen1_8 = "img/productos/SUP-Plateada.gif";
        $imagen2_8 = "img/productos/SUP-Plateada.gif";
        $imagen3_8 = "img/productos/SUP-Plateada.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto8.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
        

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_8.'" id="imagen1_8" width="80%" height="70%">
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
                    <select class="form-control" id="size8" onchange="actualizarProducto8()">'
    .$currentProduct8->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color8" onchange="actualizarProducto8()">
                        <option value="0">Plateada</option>
                        
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct8->imprmir_medidas($idSize8).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        
                        <li>'.$currentProduct8->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color8").val(' .$idColor8.');
      $("#size8").val('.$idSize8.');
      $("#imagen1_8").fadeIn(1500);
      $("#imagen2_8").fadeIn(1500);
      $("#imagen3_8").fadeIn(1500);
    </script>
';


?>
