<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/inscription")
     */
    public function inscriptionAction()
    {
        return $this->render('FrontBundle:Default:inscription.html.twig');
    }

    /**
     * @Route("/header")
     */
    public function headerAction()
    {
        return $this->render('FrontBundle:Default:header.html.twig');
    }
}

