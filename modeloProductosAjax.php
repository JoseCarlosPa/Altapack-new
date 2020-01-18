<?php

include("prodcutos_clases.php");

$_POST['idColor'] = htmlentities($_POST['idColor']);
$_POST['idSize'] = htmlentities($_POST['idSize']);
$idSize = $_POST['idSize'];
$idColor = $_POST['idColor'];

switch ($_POST['idColor']) {
  case 0:
      $currentProduct = $negro_standup;
      $nombreProducto = "BOLSA STAND UP POUCH";
      $imagen1 = "img/productos/SUP-Negra.gif";
      $imagen2 = "img/productos/SUP-Negra.gif";
      $imagen3 = "img/productos/SUP-Negra.gif";
      break;
  case 1:
      $currentProduct = $blanco_standup;
      $nombreProducto = "BOLSA STANDUP POUCH";
      $imagen1 = "img/productos/SUP-Blanca2.gif";
      $imagen2 = "img/productos/SUP-Blanca2.gif";
      $imagen3 = "img/productos/SUP-Blanca2.gif";
      break;
  case 2:
      $currentProduct = $plateada_standup;
      $nombreProducto = "BOLSA STANDUP POUCH";
      $imagen1 = "img/productos/SUP-Plateada.gif";
      $imagen2 = "img/productos/SUP-Plateada.gif";
      $imagen3 = "img/productos/SUP-Plateada.gif";
      break;
  case 3:
      $currentProduct = $dorada_standup;
      $nombreProducto = "BOLSA STANDUP POUCH";
      $imagen1 = "img/productos/SUP-Dorada.gif";
      $imagen2 = "img/productos/SUP-Dorada.gif";
      $imagen3 = "img/productos/SUP-Dorada.gif";
      break;
}

echo '
    <!--Titulo de la bolsa-->
    <div class="row">
        <div class="col-sm-12">
            <p class="font_1">'.$nombreProducto.'</p>
        </div>
    </div>

    <!----------Caracetristicas--------------->

    <div class="row">

        <!--Imagenes laterales-->
       

        <!--Imagen central-->
        <div class="col-sm-4">
        <img src ="'.$imagen1.'" id="imagen1" width="80%" height="70%">
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
                    <select class="form-control" id="size" onchange="actualizarProducto()">'
                      .$currentProduct->imprmir_capacidad2().'
                    </select>
                </div>

                <div class="col-sm-6 select-outline">
                    <select class="form-control" id ="color" onchange="actualizarProducto()">
                        <option value="0">Negra</option>
                        <option value="1">Blanco</option>
                        <option value="2">Plateada</option>
                        <option value="3">Dorada</option>
                  
                    </select>
                </div>
            </div>

            <!--Descripcio-->
            <div class="row">
                <div class="col-sm-11">
                    <br>
                    <h5>Descripcion</h5>
                    <ul>
                        <li>'.$currentProduct->imprmir_medidas($idSize).'</li> <!--Se le debera pasar el atributo dependiendo del tamaño-->
                        <!--Se le debera pasar por atributo el mismo numero que el de la medida-->
                        <li>'.$currentProduct->get_laminacion(). '</li><!--Este es un atributo unico-->
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
      $("#color").val(' .$idColor.');
      $("#size").val('.$idSize.');
      $("#imagen1").fadeIn(1500);
      $("#imagen2").fadeIn(1500);
      $("#imagen3").fadeIn(1500);
    </script>
';


?>
