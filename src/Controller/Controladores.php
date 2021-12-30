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

/** 
 * @Route("/registro", name="registro")
 */
public function registro(Request $request)
{   
    $form = $this->createFormBuilder()
    ->add('Nombre', TextType::class)
    ->add('Apellidos', TextType::class)
    ->add('Direccion', TextType::class)
    ->add('Email', TextType::class)
    ->add('Contrasena', TextType::class)
    ->add('Enviar', SubmitType::class, array('label' => 'Enviar'))
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {			
        $datos = $form->getData();		
        $nombre = $datos['Nombre'];
        return $this->render('registro_correcto.twig', array('nombre'=>$nombre));
    }
    return $this->render('registro.twig', array(
    'form' => $form->createView(),
    ));
}

/** 
 * @Route("/sugerencias", name="sugerencias")
 */
public function sugerencias(Request $request)
{
    $sugerencias = Datos::sugerencias();

    // Creamos los campos del formulario
    $formulario = array(
        //Vamos a seguir el patrón ('label', 'type', 'name', 'value')
        array('Observación: ', 'text', 'observ', ''),
        array('', 'submit', 'valorar', 'Valorar')
    );
    
    if ($request->query->get('observ'))
    {
        return new Response('<html><body>Grabar ' . $request->query->get('observ') . '</body></html>');
    }

    return $this->render('sugerencias.twig', array(
    'sugerencias' => $sugerencias, 'formulario' => $formulario
    ));
}



}
?>
