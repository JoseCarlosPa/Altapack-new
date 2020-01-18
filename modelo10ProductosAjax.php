<?php

include("prodcutos_clases.php");

$_POST['idColor10'] = htmlentities($_POST['idColor10']);
$_POST['idSize10'] = htmlentities($_POST['idSize10']);
$idSize10 = $_POST['idSize10'];
$idColor10 = $_POST['idColor10'];

switch ($_POST['idColor10']) {
    case 0:
        $currentProduct10 = $kraft_standup_blanco;
        $nombreProducto10 = "BOLSA STAND UP POUCH KRAFT BLANCO";
        $imagen1_10 = "img/productos/SUP-kRAFT-Blanca.gif";
        break;


}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto10.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_10.'" id="imagen1_10" width="80%" height="70%">
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
                    <select class="form-control" id="size10" onchange="actualizarProducto10()">'
    .$currentProduct10->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                   <input disabled="disabled" class="form-control" type="text" placeholder="Blanco" readonly>
                    <select class="form-control" id="color10" onchange="actualizarProducto10()" style ="display:none;">
                        <option value="0">Blanco</option>

                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct10->imprmir_medidas($idSize10).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct10->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color10").val(' .$idColor10.');
      $("#size10").val('.$idSize10.');
      $("#imagen1_10").fadeIn(1500);
    </script>
';


?>