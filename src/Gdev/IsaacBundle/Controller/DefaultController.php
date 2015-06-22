<?php

namespace Gdev\IsaacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{

    public function homeAction()
    {
        return $this->render('GdevIsaacBundle:Default:index.html.twig', array());
    }
}
