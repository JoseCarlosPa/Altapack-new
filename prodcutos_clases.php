<?php

class
Color_objeto
{

    //Variables tipo string de la clase bolsa
    private $color;
    private $tamanio;
    private $medidas;
    private $capacidad;
    private $laminacion;
    private $imagen;
    private $precio;

    //Construtor de la clase bolsa
    public function __construct($color, $tamanio, $medidas, $capacidad, $laminacion, $imagen,$precio)
    {
        $this->color = $color;
        $this->tamanio = $tamanio;
        $this->medidas = $medidas;
        $this->capacidad = $capacidad;
        $this->laminacion = $laminacion;
        $this->imagen = $imagen;
        $this->precio = $precio;

    }

    //Geters y seters de Clase bolsa

    public function get_precio()
    {
        return $this->precio;
    }

    public function set_precio($precio)
    {
        $this->precio = $precio;
    }

    public function get_color()
    {
        return $this->color;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_tamanio()
    {
        return $this->tamanio;
    }

    public function set_tamanio($tamanio)
    {
        $this->tamanio = $tamanio;
    }

    public function get_medidas()
    {
        return $this->medidas;
    }

    public function set_medidas($medidas)
    {
        $this->medidas = $medidas;
    }

    public function get_capacidad()
    {
        return $this->capacidad;
    }

    public function set_capacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }

    public function get_laminacion()
    {
        return $this->laminacion;
    }


    public function set_laminiacion($laminacion)
    {
        $this->capacidad = $laminacion;
    }

    public function get_imagen()
    {
        return $this->imagen;
    }

    public function set_imagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function imprimir_laminacion($tamanio_bolsa)
    {
        $result = '';
        $array = $this->get_laminacion();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            if ($tamanio_bolsa == $i) { // Si el numero que se le pasa es igual al numero donde pasa el array
                $result = $array[$i];  // se guardara el valor en result y se mandara imprimir
            }
        }
        return $result;
    }
    public function imprmir_tamanios()
    {
        $option = '';
        $array = $this->get_tamanio();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            $option .= '<option value ="'.$i.'">' . $array[$i] . '</option>';
        }
        return $option;
    }

    public function imprmir_capacidad2()
    {
        $option = '';
        $array = $this->get_capacidad();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            $option .= '<option value ="'.$i.'">' . $array[$i] . '</option>';
        }
        return $option;
    }

    public function imprmir_medidas($tamanio_bolsa) //Le llegara un parametro de tipo int del 0 a X donde 0 es chicho y X es XXL
    {
        $result = '';
        $array = $this->get_medidas();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            if ($tamanio_bolsa == $i) { // Si el numero que se le pasa es igual al numero donde pasa el array
                $result = $array[$i];  // se guardara el valor en result y se mandara imprimir
            }
        }
        return $result;
    }

    public function imprmir_capacidad($tamanio_bolsa) //Le llegara un parametro de tipo int del 0 a X donde 0 es chicho y X es XXL
    {
        $result = '';
        $array = $this->get_capacidad();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            if ($tamanio_bolsa == $i) { // Si el numero que se le pasa es igual al numero donde pasa el array
                $result = $array[$i];  // se guardara el valor en result y se mandara imprimir
            }
        }
        return $result;
    }

    public function imprmir_precio($precio) //Le llegara un parametro de tipo int del 0 a X donde 0 es chicho y X es XXL
    {
        $result = '';
        $array = $this->get_precio();
        $count = count($array);
        for ($i = 0; $i < $count; $i++) {
            if ($precio == $i) { // Si el numero que se le pasa es igual al numero donde pasa el array
                $result = $array[$i];  // se guardara el valor en result y se mandara imprimir
            }
        }
        return $result;
    }

}

//Lista de todos los objetos estaticos

// -------------------------------------------------------------------------------------------------------------------
//Stadup Pouch
$negro_standup = new Color_objeto('Negro', ['Chico', 'Mediano'], ['150mm x 220mm + 90mm de fondo', '200mm x 260mm + 90mm de fondo']
    , ['250 gr.', '500 gr.'], 'BOPPMAT + MPET + PE', '1.png',['N/A']);

$blanco_standup = new Color_objeto('Blanco', ['Chico', 'Mediano'], ['150mm x 220mm + 90mm de fondo', '200mm x 260mm + 90mm de fondo']
    , ['250 gr.', '500 gr.'], 'BOPPMAT + MPET + PE', '2.png',['N/A']);

$plateada_standup = new Color_objeto('Plateada', ['Chicho', 'Mediano'], ['150mm x 210mm + 80mm de fondo', '190mm x 250mm + 90mm de fondo']
    , ['250 gr.', '500 gr.'], 'PET + MPET + PE', '3.png',['N/A']);

$dorada_standup = new Color_objeto('Dorada', ['Chicho', 'Mediano', 'Grande'], ['150mm x 210mm + 80mm de fondo', '190mm x 250mm + 90mm de fondo',
    '240mm x 340mm + 120mm de fondo'], ['250 gr.', '500 gr.', '1 kg.'], 'PET + MPET + PE', '4.png',['N/A']);

$kraft_standup = new Color_objeto('Kraft', ['Mediano'], ['170mm x 250mm + 90mm de fondo'], ['454 gr.'], 'PAPEL KRAFT + MPET + PE', '5.png',['N/A']);

$kraft_standup_blanco = new Color_objeto('Kraft Blanco', ['Mediano','Grande'], ['130mm x 200m + 80mm ','150mm x 230mm + 90mm'], ['200 gr.','400 gr'], 'PAPEL KRAFT + MPET + PE ', '5.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//4 Sellos
$blanco_4sellos = new Color_objeto('Blanco', ['Mediano', 'Grande'], ['120mm x 300mm + 80mm de fondo', '140mm x 390mm + 95mm de fondo']
    , ['500 gr.', '1 kg.'], 'BOPPMAT + MPET + PE', '6.png',['N/A']);

$negro_4sellos = new Color_objeto('Negro', ['Mediano', 'Grande'], ['120mm x 300mm + 80mm de fondo', '140mm x 390mm + 95mm de fondo']
    , ['500 gr.', '1 kg.'], 'BOPPMAT + MPET + PE', '7.png',['N/A']);

$plateado_4sellos = new Color_objeto('Plateado', ['Chico'], ['95mm x 250mm + 50mm de fondo']
    , ['250 gr.'], 'BOPPMAT + MPET + PE', '7.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Fuelle

$plateada_fuelle = new Color_objeto('Plateada', ['Chica', 'Mediana', 'Grande', 'Extra Grande'], ['90mm x 250mm + 50mm', '115mm x 290mm + 70mm', '125mm x 390mm + 70mm', '170mm x 490mm + 85mm de fondo']
    , ['250 gr.', '500 gr.', '1 kg.', '2.5 kg.'], 'MPET + PE', '8.png',['N/A']);

$Kraft_fuelle = new Color_objeto('Kraft', ['Chica','Mediano', 'Grande'], ['90mm x 240mm x 45mm','115mm x 280mm + 70mm', '140mm x 350mm + 80mm']
    , ['250 gr.','500 gr.', '1 kg.'], 'PAPEL KRAFT + MPET + PE', '7.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Standup Pouch Impresa Frasco

$naranja_SPIP = new Color_objeto('Naranja', ['-',], ['175mm X 245mm + 80mm']
    , ['-'], 'PET + PE', '8.png',['N/A']);

$verde_SPIP = new Color_objeto('Verde', ['-'], ['157mm x 250mm + 70mm']
    , ['-'], 'PET + PE', '9.png',['N/A']);

$negra_SPIP = new Color_objeto('Negra', ['-'], ['169mm x 250mm + 70mm']
    , ['-'], 'PET + PE', '10.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Standup Pouch con Spout

$bolsa_SPS = new Color_objeto('-', ['Chica', 'Mediana'], ['100mm x 170mm + 60mm de fondo', '130mm x 190mm + 80mm de fondo']
    , ['250 ml.', '500 ml.'], 'PET 12/PE100', '11.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Standup Pouch con Spout Transparente

$bolsa_SPST = new Color_objeto('-', ['Chica', 'Mediana', 'Grande', 'Extra Grande', 'XXL'], ['-', '-', '-', '-', '-']
    , ['250 ml.', '500 ml.', '1 L', '2 Lts', '3 Lts'], 'POLYESTER  + NYLON  + PE', '12.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//3 Sellos
$plateada_3sellos = new Color_objeto('Plateada', ['Chica', 'Mediano'], ['10cm x 12cm', '12cm x 18cm']
    , ['40 gr .', '60 gr .'], 'MPET + PE', '13.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Standup Pouch sin Zipper
$plateada_SPZ = new Color_objeto('Plateada', ['Grande'], ['200mm x 320mm + 110mm de fondo']
    , ['1 kg.'], 'MPET + PE', '14.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
//Standup Pouch con Ventana
$bolsa_SPV = new Color_objeto('Plateado', ['Chica'], ['150mm x 220mm + 80mm de fondo']
    , ['250 gr.'], 'POLYESTER MPET + PE', '15.png',['N/A']);
// -------------------------------------------------------------------------------------------------------------------
$selladora = new Color_objeto('-',['Delta Seal 250D','300 Delta','300HH','200 HH'],['Longitud de sello 250 mm,
Ancho de sello 1 mm','Longitud de sello 300 mm,Ancho de sello 1mm','Longitud de sello estriado 300 mm, Ancho de sello 12 mm','Longitud de sello estriado 200mm, Ancho de sello 12mm'],
    ['Potencia 240 V/290 W/50 Hz. Dimensiones 320 X 85 X 140 (mm )','Potencia 240 V/300 W/50 Hz, Dimensiones 420 X 85 X 145 mm'
    ,'Potencia 240 V/300 W/50 Hz, Dimensiones 420 X 85 X 145 mm','Potencia 240 V/300 W/50 Hz,Dimensiones 420 X 85 X 145mm.'],['Peso 2.5 kg','Peso 2.75 kg.','Peso  2.75 kg','Peso 2.75Kg.'],'16.png',['N/A']);


$mattOP = new Color_objeto('Kraft',['Chica', 'Mediana', 'Grande', 'Extra Grande'],['100mm X 140mm + 35*2mm','150mm X 220mm + 40*2mm','190mm X 280mm +45*2mm','240mm X 350mm +60*2mm'],'-','Matt OPP18/50gsm
Kraft Paper CPP50','-','N/A')
?>
