<?php

include("prodcutos_clases.php");

$_POST['idColor3'] = htmlentities($_POST['idColor3']);
$_POST['idSize3'] = htmlentities($_POST['idSize3']);
$idSize3 = $_POST['idSize3'];
$idColor3 = $_POST['idColor3'];
//------------------------------------------------Segundo producto-----------------------------------------------------
switch ($_POST['idColor3']) {
    case 0:
        $currentProduct3 = $plateada_fuelle;
        $nombreProducto3 = "FUELLE PLATEADO";
        $imagen1_3 = "img/productos/Fuelle-Plateada.gif";

        break;

}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto3.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
        

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1_3.'" id="imagen1_2" width="80%" height="70%">
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
                    <select class="form-control" id="size3" onchange="actualizarProducto3()">'
    .$currentProduct3->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <input disabled="disabled" class="form-control" type="text" placeholder="Plateado" readonly>
                    <select class="form-control" id="color3" onchange="actualizarProducto3()" disabled="disabled" style ="display:none;">
                        <option value="0">Plateado</option>
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct3->imprmir_medidas($idSize3).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                       
                        <li>'.$currentProduct3->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color3").val(' .$idColor3.');
      $("#size3").val('.$idSize3.');
      $("#imagen1_3").fadeIn(1500);
      $("#imagen2_3").fadeIn(1500);
      $("#imagen3_3").fadeIn(1500);
    </script>
';

?>

