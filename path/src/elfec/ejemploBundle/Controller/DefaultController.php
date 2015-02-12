<?php

namespace elfec\ejemploBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('elfecejemploBundle:Default:index.html.twig', array('name' => $name));
    }
}
