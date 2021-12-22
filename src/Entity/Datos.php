<?php

namespace App\Entity;

class Datos
{
 
static function getDatos()
{
	//Carga de los datos
  $articulos = array(
    0 => array(
      "id" => 0,
      "nombre" => "Libro",
      "a_imagen" => "libro.png",
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ),
    1 => array(
      "id" => 1,
      "nombre" => "Ordenador",
      "a_imagen" => "ordenador.png",
      ""
    ),
    2 => array(
      "id" => 2,
      "nombre" => "Televisor",
      "a_imagen" => "televisor.png"
    ),
    3 => array(
      "id" => 3,
      "nombre" => "Pelota",
      "a_imagen" => "pelota.png"
    ),
    4 => array(
      "id" => 4,
      "nombre" => "Mesa",
      "a_imagen" => "mesa.png"
    ),
    5 => array(
      "id" => 5,
      "nombre" => "Moto",
      "a_imagen" => "moto.png"
    ));
	
	return $articulos;
}

static function articulo($id)
{
	$articulos = self::getDatos();
	$detalles = $articulos[$id];

    return $detalles;
}

}