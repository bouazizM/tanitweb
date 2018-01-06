<?php

namespace AppBundle\Controller;

use AppBundle\Entity\cv;
use AppBundle\Form\cvType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class cvController extends Controller
{

    /**
    * @Route("/cv",name="create_cv")
     */
    public function createcvAction(Request $request){
        $cv=new cv();
        $form=$this->createForm('AppBundle\Form\cvType',$cv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cv);
            $em->flush();
            return $this->render("default/index.html.twig");

        }
         /*   if ($form->isSubmitted()&& $form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($cv);
                $em->flush();
            }*/
        return $this->render("cv/cv.html.twig",array('form'=>$form->createView()));
    }
}
