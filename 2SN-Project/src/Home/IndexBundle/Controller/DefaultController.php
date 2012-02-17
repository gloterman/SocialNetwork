<?php

namespace Home\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('HomeIndexBundle:Default:index.html.twig');
    }
}
