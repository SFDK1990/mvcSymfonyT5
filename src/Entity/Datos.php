<?php

namespace App\Entity;

/**Funcion que carga los datos de una lista y nos devuelve los articulos almacenados */
/**
 * @param array
 * @return $articulos
 * 
 */

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
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ),
    2 => array(
      "id" => 2,
      "nombre" => "Televisor",
      "a_imagen" => "televisor.png",
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ),
    3 => array(
      "id" => 3,
      "nombre" => "Pelota",
      "a_imagen" => "pelota.png",
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ),
    4 => array(
      "id" => 4,
      "nombre" => "Mesa",
      "a_imagen" => "mesa.png",
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ),
    5 => array(
      "id" => 5,
      "nombre" => "Moto",
      "a_imagen" => "moto.png",
      "detalle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi sit amet mauris commodo. Lorem ipsum dolor sit amet consectetur adipiscing. Nunc congue nisi vitae suscipit tellus mauris a diam. Tellus orci ac auctor augue mauris augue neque. Purus gravida quis blandit turpis cursus in hac habitasse platea. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Ullamcorper morbi tincidunt ornare massa. Viverra mauris in aliquam sem fringilla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Facilisi cras fermentum odio eu. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras."
    ));
	
	return $articulos;
}

static function articulo($id)
{
	$articulos = self::getDatos();
	$detalles = $articulos[$id];

    return $detalles;
}

static function sugerencias()
{
	//Obtener usuario y sugerencia
		$listaSugerencias = array(
		array(
			"usuario" => "Pepe",
			"sugerencia" => "Quiero precios más baratos"),	
		array(
			"usuario" => "Daniel",
			"sugerencia" => "Mejoren la parte gráfica"),
		array(
			"usuario" => "Ricardo",
			"sugerencia" => "Poca variedad de ratones") 
	);
	
    return $listaSugerencias;
}
}

// Clase de articulo

class articulo{
  private $id;
  private $titulo;
  private $imagen;
  private $precio;

  public function __construct($id, $titulo, $imagen, $precio){
    $this->id=$id;
    $this->titulo=$titulo;
    $this->imagen=$imagen;
    $this->precio=$precio;

  }


  /**
   * Get the value of titulo
   */
  public function getTitulo()
  {
    return $this->titulo;
  }

  /**
   * Set the value of titulo
   */
  public function setTitulo($titulo): self
  {
    $this->titulo = $titulo;

    return $this;
  }

  /**
   * Get the value of imagen
   */
  public function getImagen()
  {
    return $this->imagen;
  }

  /**
   * Set the value of imagen
   */
  public function setImagen($imagen): self
  {
    $this->imagen = $imagen;

    return $this;
  }

  /**
   * Get the value of precio
   */
  public function getPrecio()
  {
    return $this->precio;
  }

  /**
   * Set the value of precio
   */
  public function setPrecio($precio): self
  {
    $this->precio = $precio;

    return $this;
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   */
  public function setId($id): self
  {
    $this->id = $id;

    return $this;
  }
}