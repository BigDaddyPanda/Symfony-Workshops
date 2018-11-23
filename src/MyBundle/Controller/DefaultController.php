<?php

namespace MyBundle\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/todo")
     */
    public function indexAction()
    {
        return $this->render('MyView/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/first")
     * */
    public function firstAction()
    {
        // Contenu du contrôleur à préparer

        return $this->render('MyView/first.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("cv/{nom}&{age}")
     */
    public function cvAction($nom,$age)
    {
//        // Contenu du contrôleur à préparer
//        $param = array(
//            'nom'=>$nom
//        );
        return $this->render('MyView/cv.html.twig',['nom'=>$nom,'age'=>$age,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/tobe")
     */
    public function todoGetAction(){
        return $this->render('MyView/todo.html.twig',[
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
