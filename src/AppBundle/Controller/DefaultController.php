<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Abonne;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/page", name="page")
     */
    public function pageAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/page.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signUp(Request $request)
    {
        // replace this example code with whatever you need
        $deleteForm = $this->createDeleteForm($abonne);

        


        return $this->render('default/signup.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/abo", name="abo")
     */
    public function createAbo(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $abonne = new Abonne();
      $abonne->setNomAbonne('LOLO BENTO');
      $abonne->setPrenomAbonne('aya');
      $abonne->setLogin('LOLO');
      $abonne->setPassword('BENTO');

      // tells Doctrine you want to (eventually) save the Product (no queries yet)
      $em->persist($abonne);

      // actually executes the queries (i.e. the INSERT query)
      $em->flush();
      return $this->render('default/page.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
      ]);
    }
}
