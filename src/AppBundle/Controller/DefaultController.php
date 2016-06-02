<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/test", name="sidepage")
     */
    public function sideAction(Request $request){
        return $this->render('default/side.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/hello/{name}", name="app_default_hello")
     */
    public function sayHelloAction($name, Request $request){
        //return new Response("Hello " . $name);
        return $this->render('default/hello.html.twig', array(
            'name' => $name
        ));
    }

    /**
     * @Route("/api", name="app_default_api")
     */
    public function apiAction(Request $request){
        $arr = ['hello', 'world'];
        $json = json_encode($arr);
        return new Response($json);
    }
}
