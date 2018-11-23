<?php

namespace FirstNameSpace\MyTodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public $todos = [
        'achat'=>'acheter clé usb',
        'cours'=>'Finaliser mon cours',
        'correction'=>'corriger mes examens'
    ];

    /**
     * @Route("/index")
     */

    public function indexAction()
    {
        return $this->render('@MyTodo\Default\index.html.twig',["todos"=>$this->todos]);
    }
    /**
     * @Route("/toAdd")
     */
    public function redirectToAddAction()
    {

        return $this->render('@MyTodo\Default\addtodo.html.twig');
    }
    /**
    * @Route("/addToDo")
    */
    public function addToDoAddAction(Request $request)
    {

        $this->todos["new"]="Todo";
        return $this->render('@MyTodo\Default\addtodo.html.twig');
    }
}
