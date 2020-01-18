<?php

include("prodcutos_clases.php");

$_POST['idColor11'] = htmlentities($_POST['idColor11']);
$_POST['idSize11'] = htmlentities($_POST['idSize11']);
$idSize11 = $_POST['idSize11'];
$idColor11 = $_POST['idColor11'];

switch ($_POST['idColor11']) {
    case 0:
        $currentProduct11 = $selladora;
        $nombreProducto11 = "SELLADORA TERMICA DE IMPULSO";
        $imagen1_11 = "img/productos/Selladora_termica.jpg";
        break;


}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto11.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_11.'" id="imagen1_11" width="80%" height="70%">
        </div>

        <!--Tamaño y descripcion-->
        <div class="col-sm-8 ">

            <!--Titulo-->
            <div class="row">

                <div class="col-sm-6">
                    <h5>Tamaños Disponibles</h5>
                </div>
                <div class="col-sm-6" style ="display:none;">
                    <h5>Colores</h5>
                </div>
            </div>

            <!--Select-->
            <div class="row">
                <div class="col-sm-6 select-outline">
                    <select class="form-control" id="size11" onchange="actualizarProducto11()">'
    .$currentProduct11->imprmir_tamanios().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline" style ="display:none;">
                    <select class="form-control" id ="color11" onchange="actualizarProducto11()">
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
                        <li>'.$currentProduct11->imprmir_medidas($idSize11).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        <li>'.$currentProduct11->imprmir_capacidad($idSize11).'</li>
                        <li>'.$currentProduct11->imprimir_laminacion($idSize11). '</li><!--Este es un atributo unico-->
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
      $("#color11").val(' .$idColor11.');
      $("#size11").val('.$idSize11.');
      $("#imagen1_11").fadeIn(1500);
    </script>
';


?>