<?php

namespace WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public
        $todos = array(
        'achat'=>['acheter clé usb','lorem ipsum','dolor sit','3 days later'],
        'cours'=>['Finaliser mon cours','loremus ipsums','Stet cli','3 days later'],
        'correction'=>['Corriger mes examens','et justo duo dolores','cusam  et ea rebum. ','3 days later']
    );
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $z=$this->todos;
        if (!isset($z)){
//            Session::set("todos",$this->todos);
        }
        return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos));
    }
    /**
     * @Route( "/get_todo")
     */
    public function todoGet(){
//        $z=$this->todos;
//        if (!isset($z)){
////            Session::set("todos",$this->todos);
//        }
        return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos));
    }

    /**
     * @Route( "/set_todo")
     */
    public function todoSet(Request $req){
        $todo_cle = $req->query->get("todo_cle");
        $new_title= $req->query->get("new_title");
        $old_id= $req->query->get("old_id");

        $new_desc= $req->query->get("new_desc");
        $new_more_desc= $req->query->get("new_more_desc");
        $new_date= $req->query->get("new_date");
        if(isset($new_title)){
//            try{
//
//            }catch (\Exception $a){
//
//            }
            $this->todos[$old_id]=array($new_title,$new_desc,$new_more_desc,$new_date);
//            Session::set("todos",$this->todos);

            return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"notif"=>["update","success"]));
        }
        return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"todo_cle"=>$this->todos[$todo_cle],"notif"=>["load","success"]));

    }
    /**
         * @Route( "/unset_todo")
     */
    public function todoUnset(Request $req){
        $old_id= $req->query->get("old_id");
        if(isset($this->todos[$old_id])){
            unset($this->todos[$old_id]);
//            Session::set("todos",$this->todos);

            return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"notif"=>["delete","success"]));

        }
        return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"notif"=>["delete","danger"]));
    }
    /**
     * @Route( "/add_todo")
     */
    public function todoAdd(Request $req){

        $new_id= $req->query->get("old_id");
        $new_title= $req->query->get("new_title");
        $new_desc= $req->query->get("new_desc");
        $new_more_desc= $req->query->get("new_more_desc");
        $new_date= $req->query->get("new_date");

        if(isset($this->todos[$new_id])){
            return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"notif"=>["create","danger"]));
        }
        $this->todos[$new_id]=array($new_title,$new_desc,$new_more_desc,$new_date);
//        Session::set("todos",$this->todos);
        return $this->render('@Workshop\Default\todo.html.twig',array("todos"=>$this->todos,"notif"=>["create","success"]));
    }
}
