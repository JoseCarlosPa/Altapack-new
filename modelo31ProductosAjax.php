<?php

include("prodcutos_clases.php");

$_POST['idColor31'] = htmlentities($_POST['idColor31']);
$_POST['idSize31'] = htmlentities($_POST['idSize31']);
$idSize31 = $_POST['idSize31'];
$idColor31 = $_POST['idColor31'];
//------------------------------------------------Segundo producto-----------------------------------------------------
switch ($_POST['idColor31']) {
    case 0:
        $currentProduct31 = $Kraft_fuelle;
        $nombreProducto31 = "FUELLE";
        $imagen1_31 = "img/productos/Fuelle_Kraft.gif";

        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto31.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
        

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_31.'" id="imagen1_2" width="80%" height="70%">
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
                    <select class="form-control" id="size31" onchange="actualizarProducto31()">'
    .$currentProduct31->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                   <input disabled="disabled" class="form-control" type="text" placeholder="Kraft" readonly>
                
                    <select class="form-control" id="color31" onchange="actualizarProducto31()" disabled="disabled" style ="display:none;">
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
                        <li>'.$currentProduct31->imprmir_medidas($idSize31).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct31->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color31").val(' .$idColor31.');
      $("#size31").val('.$idSize31.');
      $("#imagen1_31").fadeIn(1500);
    </script>
';

?>

