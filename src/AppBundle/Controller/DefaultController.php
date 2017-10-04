<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public $name='JJJ';
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
/**
 *@Route("/prueba1");
 */
    public function prueba()
    {
        return new Response('<html><body>Hola Mundo!</body></html>');
    }

    /**
     *@Route("/prueba2");
     */

    public function getName()
    {
        $name= $this->name;
        return $name;
    }

    /**
     * @Route("/blog/post/{id}", name="blog-post")
     */
    public function postAction(Request $request)
    {
        $request->get('id'); // $_GET
        $request->get('slug'); // $_POST
    }

    /**
     * @Route("/hola/{name}", name="hello")
     */
    public function helloAction($name)
    {
        $response = new Response(json_encode(array('name' => $name)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
