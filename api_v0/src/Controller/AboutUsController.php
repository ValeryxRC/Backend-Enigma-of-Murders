<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AboutUsController extends AbstractController
{
    public function about()
    {
        $aboutUsInfo = [
            'title' => 'Sobre nosotras',
            'slogan' => 'Studio VILA, donde los videojuegos se convierten en ingenio, logros y aventuras.',
            'descripcion' => 'Buscamos crear juegos de rol divertidos, inmersivos, interesantes e intuitivos en la web. 
        Para ello, apostamos por convertir a los usuarios en el protagonista principal de cada juego. 
        Hacerles vivir el juego y olvidarse de su realidad.'
        ];
        return new JsonResponse($aboutUsInfo);
    }

    public function contact(){
        $contactInfo=[
            'email' =>  'studioovila@gmail.com',
            'instagram' => '@studio_vila'
        ];
        return new JsonResponse($contactInfo);
    }
}
