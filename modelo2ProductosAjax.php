<?php

include("prodcutos_clases.php");

$_POST['idColor2'] = htmlentities($_POST['idColor2']);
$_POST['idSize2'] = htmlentities($_POST['idSize2']);
$idSize2 = $_POST['idSize2'];
$idColor2 = $_POST['idColor2'];
//------------------------------------------------Segundo producto-----------------------------------------------------
switch ($_POST['idColor2']) {
    case 0:
        $currentProduct2 = $blanco_4sellos;
        $nombreProducto2 = "BOLSA 4 SELLOS";
        $imagen1_2 = "img/productos/4Sellos-Blanco.gif";

        break;
    case 1:
        $currentProduct2 = $negro_4sellos;
        $nombreProducto2 = "4 SELLOS";
        $imagen1_2 = "img/productos/4Sellos-Negros.gif";

        break;
    case 2:
        $currentProduct2 = $plateado_4sellos;
        $nombreProducto2 = "4 SELLOS";
        $imagen1_2 = "img/productos/4Sellos-Plateada.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto2.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_2.'" id="imagen1_2" width="80%" height="70%">
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
                    <select class="form-control" id="size2" onchange="actualizarProducto2()">'
    .$currentProduct2->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color2" onchange="actualizarProducto2()">
                        <option value="0">Blanco</option>
                        <option value="1">Negro</option>
                        <option value="2">Plateada</option>
                       
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct2->imprmir_medidas($idSize2).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct2->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color2").val(' .$idColor2.');
      $("#size2").val('.$idSize2.');
      $("#imagen1_2").fadeIn(1500);
      $("#imagen2_2").fadeIn(1500);
      $("#imagen3_2").fadeIn(1500);
    </script>
';

?>
