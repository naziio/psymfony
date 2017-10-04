<?php

namespace Acme\HelloBundle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AcmeHelloBundle extends Bundle
{
    public $name='JJJ';
   
  /**
 *@Route("/prueba1");
 */
 public function prueba()
 {
     return new Response('<html><body>Hola Mundo!</body></html>');
 }
}
