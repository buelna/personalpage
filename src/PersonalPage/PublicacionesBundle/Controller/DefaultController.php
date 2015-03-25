<?php

namespace PersonalPage\PublicacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersonalPagePublicacionesBundle:Default:index.html.twig', array('name' => $name));
    }
}
