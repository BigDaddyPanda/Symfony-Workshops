<?php

namespace ContestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Contest/Default/index.html.twig');
    }

    /**
     * @Route("/2")
     */
    public function index2Action()
    {
        return $this->render('@Contest/Default/index.html.twig');
    }
}
