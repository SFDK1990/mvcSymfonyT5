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
use App\Entity\Datos;


class Controladores extends AbstractController
{

/** 
 * @Route("/", name="index")
 * Introducimos en una variable los elementos de la "base de datos" ->(array asociativo)
 * @param array Datos
 * @return array pagina donde se muestra articulos.twig
 */
public function home()
{
    $articulos = Datos::getDatos();
    return $this->render('articulos.twig', array('articulos'=>$articulos));
}
/** 
 * @Route("/articulo/{id}", name="articulo")
 * @param array $id Dependiendo del ID en el array devolvemos el articulo elegido
 * @return render detalle_articulo.twig
 */
public function articulo($id)
{
    $articulo = Datos::articulo($id);
    return $this->render('detalles_articulo.twig', array('articulo'=>$articulo));
}

/** 
 * @Route("/registro", name="registro")
 * @param mixed $data Datos que se agregan al formulario
 * @return createView registro.twig
 * @param mixed $request Si se envian todos los datos nos muestra el registro correcto
 * @return render registro_correcto.twig
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
 * @param array Datos 
 * @return render sugerencias.twig
 */
public function sugerencias(Request $request)
{
    $sugerencias = Datos::sugerencias();

    // Creamos los campos del formulario 
    $formulario = array(
       //Introducimos los datos que queremos tener en el formulario
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
