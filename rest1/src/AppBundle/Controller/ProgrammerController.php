<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; //para poder usar el parametro ruta arriba de la funcion en los comentarios
	

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;  //para poder usar el parametro metodo arriba de la funcion en los comentarios

use Symfony\Component\HttpFoundation\Response;
// para poder usar la funcion response para retornar el string

class ProgrammerController extends Controller
{

     /**
     * @Route("/api/programmers")
     * @Method("POST")
     */
    public function newAction()
    {
        return new Response('Let\'s do this!');

    }


}
