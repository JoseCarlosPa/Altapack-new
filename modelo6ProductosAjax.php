<?php

include("prodcutos_clases.php");

$_POST['idColor6'] = htmlentities($_POST['idColor6']);
$_POST['idSize6'] = htmlentities($_POST['idSize6']);
$idSize6 = $_POST['idSize6'];
$idColor6 = $_POST['idColor6'];

switch ($_POST['idColor6']) {
    case 0:
        $currentProduct6 = $bolsa_SPST;
        $nombreProducto6 = "Standup Pouch con Spout Transparente";
        $imagen1_6 = "img/productos/Spout_Transparente.jpg";

        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto6.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_6.'" id="imagen1_6" width="80%" height="70%">
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
                    <select class="form-control" id="size6" onchange="actualizarProducto6()">'
    .$currentProduct6->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color6" onchange="actualizarProducto6()">
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
                        <li>'.$currentProduct6->imprmir_medidas($idSize6).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        
                        <li>'.$currentProduct6->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color6").val(' .$idColor6.');
      $("#size6").val('.$idSize6.');
      $("#imagen1_6").fadeIn(1500);
      $("#imagen2_6").fadeIn(1500);
      $("#imagen3_6").fadeIn(1500);
    </script>
';


?>
