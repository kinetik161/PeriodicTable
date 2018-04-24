<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $elenents=$this->getDoctrine()->getRepository('AppBundle:Elements')->findAll();
        return $this->render('default/index.html.twig', [
            'elements' =>$elenents,
        ]);
    }
}
