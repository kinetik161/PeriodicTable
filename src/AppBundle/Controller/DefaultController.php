<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $elements=$this->getDoctrine()->getRepository('AppBundle:Elements')->findAll();
        return $this->render('default/index.html.twig', [
            'elements' =>$elements,
        ]);
    }
    public function getAction($id)
    {
        $elements=$this->getDoctrine()->getRepository('AppBundle:Elements')->findBy(['id'=>$id]);
        $property=$this->getDoctrine()->getRepository('AppBundle:Properties')->findBy(['elements'=>$id]);
        return $this->render('default/get.html.twig', ['property'=>$property,
            'elements'=>$elements
            ]);
    }

}
