<?php

namespace PersonalPage\AreasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersonalPageAreasBundle:Default:index.html.twig', array('name' => $name));
    }
}
