<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MyBundle:Default:index.html.twig');
    }

    /**
     * @Route("/info/about/{name}", name="aboutpage", defaults={"name":null})
     */
    public function aboutAction($name) {

        if($name) {
            $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('name'=>$name));
        }
        return $this->render('MyBundle:Default:about.html.twig', array("user"=>$user));
    }
}
