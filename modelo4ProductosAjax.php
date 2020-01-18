<?php

include("prodcutos_clases.php");

$_POST['idColor4'] = htmlentities($_POST['idColor4']);
$_POST['idSize4'] = htmlentities($_POST['idSize4']);
$idSize4 = $_POST['idSize4'];
$idColor4 = $_POST['idColor4'];

switch ($_POST['idColor4']) {
    case 0:
        $currentProduct4 = $naranja_SPIP;
        $nombreProducto4 = "Standup Pouch Impresa Frasco";
        $imagen1_4 = "img/productos/Bolsa-Bote-Naranja.gif";
        break;
    case 1:
        $currentProduct4 = $verde_SPIP;
        $nombreProducto4 = "Standup Pouch Impresa Frasco";
        $imagen1_4 = "img/productos/Bolsa-Bote-Negro.gif";

        break;
    case 2:
        $currentProduct4 = $negra_SPIP;
        $nombreProducto4 = "Standup Pouch Impresa Frasco";
        $imagen1_4 = "img/productos/Bolsa-Bote-Verde.gif";
        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto4.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_4.'" id="imagen1_4" width="80%" height="70%">
        </div>

        <!--Tamaño y descripcion-->
        <div class="col-sm-8 ">

            <!--Titulo-->
            <div class="row">

                <div class="col-sm-6"style ="display:none;">
                    <h5>Tamaños Disponibles</h5>
                </div>
                <div class="col-sm-6">
                    <h5>Colores</h5>
                </div>
            </div>

            <!--Select-->
            <div class="row">
                <div class="col-sm-6 select-outline"style ="display:none;">
                    <select class="form-control" id="size4" onchange="actualizarProducto4()">'
    .$currentProduct4->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color4" onchange="actualizarProducto4()">
                       <option value="0">Roja</option>
                        <option value="1">Plateada</option>
                        <option value="2">Negra</option>
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct4->imprmir_medidas($idSize4).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct4->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color4").val(' .$idColor4.');
      $("#size4").val('.$idSize4.');
      $("#imagen1_4").fadeIn(1500);
      $("#imagen2_4").fadeIn(1500);
      $("#imagen3_4").fadeIn(1500);
    </script>
';


?>
