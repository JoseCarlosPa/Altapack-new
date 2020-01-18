

function actualizarProducto(){
  var select = document.getElementById("color");
  var idColor = select.options[select.selectedIndex].value;
  var select2 = document.getElementById("size");
  var idSize = select2.options[select2.selectedIndex].value;
         $.post('modeloProductosAjax.php', { idColor : idColor, idSize : idSize } )
        .done(function(data){
            $('#caracteristicasAjax').html(data);
            //restart Bootstrap features
        });
    }

function actualizarProducto2(){
    var select = document.getElementById("color2");
    var idColor2 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size2");
    var idSize2 = select2.options[select2.selectedIndex].value;
    $.post('modelo2ProductosAjax.php', { idColor2 : idColor2, idSize2 : idSize2 } )
        .done(function(data){
            $('#caracteristicasAjax2').html(data);
            //restart Bootstrap features
        });
}

function actualizarProducto3(){
    var select = document.getElementById("color3");
    var idColor3 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size3");
    var idSize3 = select2.options[select2.selectedIndex].value;
    $.post('modelo3ProductosAjax.php', { idColor3 : idColor3, idSize3 : idSize3 } )
        .done(function(data){
            $('#caracteristicasAjax3').html(data);
            //restart Bootstrap features
        });
}

function actualizarProducto31(){
    var select = document.getElementById("color31");
    var idColor31 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size31");
    var idSize31 = select2.options[select2.selectedIndex].value;
    $.post('modelo31ProductosAjax.php', { idColor31 : idColor31, idSize31 : idSize31 } )
        .done(function(data){
            $('#caracteristicasAjax31').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto4(){
    var select = document.getElementById("color4");
    var idColor4 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size4");
    var idSize4 = select2.options[select2.selectedIndex].value;
    $.post('modelo4ProductosAjax.php', { idColor4 : idColor4, idSize4 : idSize4 } )
        .done(function(data){
            $('#caracteristicasAjax4').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto5(){
    var select = document.getElementById("color5");
    var idColor5 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size5");
    var idSize5 = select2.options[select2.selectedIndex].value;
    $.post('modelo5ProductosAjax.php', { idColor5 : idColor5, idSize5 : idSize5 } )
        .done(function(data){
            $('#caracteristicasAjax5').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto6(){
    var select = document.getElementById("color6");
    var idColor6 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size6");
    var idSize6 = select2.options[select2.selectedIndex].value;
    $.post('modelo6ProductosAjax.php', { idColor6 : idColor6, idSize6 : idSize6 } )
        .done(function(data){
            $('#caracteristicasAjax6').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto7(){
    var select = document.getElementById("color7");
    var idColor7 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size7");
    var idSize7 = select2.options[select2.selectedIndex].value;
    $.post('modelo7ProductosAjax.php', { idColor7 : idColor7, idSize7 : idSize7 } )
        .done(function(data){
            $('#caracteristicasAjax7').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto8(){
    var select = document.getElementById("color8");
    var idColor8 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size8");
    var idSize8 = select2.options[select2.selectedIndex].value;
    $.post('modelo8ProductosAjax.php', { idColor8 : idColor8, idSize8 : idSize8 } )
        .done(function(data){
            $('#caracteristicasAjax8').html(data);
            //restart Bootstrap features
        });
}


function actualizarProducto9(){
    var select = document.getElementById("color9");
    var idColor9 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size9");
    var idSize9 = select2.options[select2.selectedIndex].value;
    $.post('modelo9ProductosAjax.php', { idColor9 : idColor9, idSize9 : idSize9 } )
        .done(function(data){
            $('#caracteristicasAjax9').html(data);
            //restart Bootstrap features
        });
}

function actualizarProducto10(){
    var select = document.getElementById("color10");
    var idColor10 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size10");
    var idSize10 = select2.options[select2.selectedIndex].value;
    $.post('modelo10ProductosAjax.php', { idColor10 : idColor10, idSize10 : idSize10 } )
        .done(function(data){
            $('#caracteristicasAjax10').html(data);
            //restart Bootstrap features
        });
}

function actualizarProducto11(){
    var select = document.getElementById("color11");
    var idColor11 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size11");
    var idSize11 = select2.options[select2.selectedIndex].value;
    $.post('modelo11ProductosAjax.php', { idColor11 : idColor11, idSize11 : idSize11 } )
        .done(function(data){
            $('#caracteristicasAjax11').html(data);
            //restart Bootstrap features
        });
}

function actualizarProducto12(){
    var select = document.getElementById("color12");
    var idColor12 = select.options[select.selectedIndex].value;
    var select2 = document.getElementById("size12");
    var idSize12 = select2.options[select2.selectedIndex].value;
    $.post('modelo12ProductosAjax.php', { idColor12 : idColor12, idSize12 : idSize12 } )
        .done(function(data){
            $('#caracteristicasAjax12').html(data);
            //restart Bootstrap features
        });
}






