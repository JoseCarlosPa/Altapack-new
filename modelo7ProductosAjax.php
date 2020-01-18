<?php

include("prodcutos_clases.php");

$_POST['idColor7'] = htmlentities($_POST['idColor7']);
$_POST['idSize7'] = htmlentities($_POST['idSize7']);
$idSize7 = $_POST['idSize7'];
$idColor7 = $_POST['idColor7'];

switch ($_POST['idColor7']) {
    case 0:
        $currentProduct7 = $plateada_3sellos;
        $nombreProducto7 = "3 SELLOS";
        $imagen1_7 = "img/productos/3_sellos.png";
        $imagen2_7 = "img/productos/3_sellos.png";
        $imagen3_7 = "img/productos/3_sellos.png";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto7.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_7.'" id="imagen1_7" width="80%" height="70%">
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
                    <select class="form-control" id="size7" onchange="actualizarProducto7()">'
    .$currentProduct7->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <input disabled="disabled" class="form-control" type="text" placeholder="Plateada" readonly>
                    <select class="form-control" disabled="disabled" id ="color7" onchange="actualizarProducto7()" style = "display:none;">
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
                        <li>'.$currentProduct7->imprmir_medidas($idSize7).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        
                        <li>'.$currentProduct7->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color7").val(' .$idColor7.');
      $("#size7").val('.$idSize7.');
      $("#imagen1_7").fadeIn(1500);
      $("#imagen2_7").fadeIn(1500);
      $("#imagen3_7").fadeIn(1500);
    </script>
';


?>
