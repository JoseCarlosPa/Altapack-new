<?php

include("prodcutos_clases.php");

$_POST['idColor12'] = htmlentities($_POST['idColor12']);
$_POST['idSize12'] = htmlentities($_POST['idSize12']);
$idSize12 = $_POST['idSize12'];
$idColor12 = $_POST['idColor12'];

switch ($_POST['idColor12']) {
    case 0:
        $currentProduct12 = $mattOP;
        $nombreProducto12 = "STAND UP POUCH KRAFT CON VENTANA";
        $imagen1_12 = "img/productos/kraft_ven.png";
        break;


}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto12.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_12.'" id="imagen1_10" width="80%" height="70%">
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
                    <select class="form-control" id="size12" onchange="actualizarProducto12()">'
    .$currentProduct12->imprmir_tamanios().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                   <input disabled="disabled" class="form-control" type="text" placeholder="Kraft" readonly>
                    <select class="form-control" id="color12" onchange="actualizarProducto12()" style ="display:none;">
                        <option value="0">Kraft</option>

                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct12->imprmir_medidas($idSize12).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct12->get_laminacion(). '</li><!--Este es un atributo unico-->
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-11 text-right">
                    <p>
                       <a href ="info18.php"> <button class="boton_publicidad">Mas informacion</button></a>
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!---------- FIn Caracetristicas----------------->

    <script>
      $("#color12").val(' .$idColor12.');
      $("#size12").val('.$idSize12.');
      $("#imagen1_12").fadeIn(1500);
    </script>
';


?>