<?php

namespace ResumeYMLRoutedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public $resume_list=array (
        'samir' =>
            array (
                'name' => 'samir',
                'profilePicture' => 'samir.jpg',
            ),
        'lahnin' =>
            array (
                'name' => 'lahnin',
                'profilePicture' => null,
            )
    );
    public function indexAction()
    {
        return $this->render('@ResumeYMLRouted/SBAdmin/index.html.twig');
    }

    public function ResumeAction()
    {
        return $this->render('@ResumeYMLRouted/SBAdmin/resume.html.twig');
    }

    public function getListOfResumesAction()
    {
        return $this->render('@ResumeYMLRouted/SBAdmin/list-resume-model-view.html.twig',array("resume_list"=>$this->resume_list));
    }

    public function getDetailsOfResumesAction(Request $req)
    {
        $resume_name = $req->query->get("resume_name");
        $resume_details = $this->resume_list[$resume_name];
        return $this->render('@ResumeYMLRouted/SBAdmin/index.html.twig',array("resume_details"=>$resume_details));
    }
}
