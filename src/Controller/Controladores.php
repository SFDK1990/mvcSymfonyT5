<?php
// src/Controller/Controladores.php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//Incluir clase helper Datos
use App\Entity\Datos;

class Controladores extends AbstractController
{

/** 
 * @Route("/", name="index")
 */
public function home()
{
    $articulos = Datos::getDatos();
    return $this->render('articulos.twig', array('articulos'=>$articulos));
}
/** 
 * @Route("/articulo/{id}", name="articulo")
 */
public function articulo($id)
{
    $articulo = Datos::articulo($id);
    return $this->render('detalles_articulo.twig', array('articulo'=>$articulo));
}


}
?>
