<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con synfony4'
        ]);
    }

    public function animales($nombre,$apellidos){
        $title = 'Bienvenido a la pagina de Animales';
        $animales = array('perro','gato','paloma','rata');
        $aves = array(
            'tipo' =>'palomo',
            'color' => 'gris',
            'edad' => 4,
            'raza' => 'colillano'
            );
        
        
        return $this->render('home/animales.html.twig', [   
            'title'=> $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'aves' => $aves
    ]);
    }

    public function redirigir(){
        /*return $this->redirectToRoute('animales', [
            'nombre' => 'Juan Pedro',
            'apellidos' => 'Lopez'
        ]);*/
        return $this->redirect('https://www.google.com');
    }


}
