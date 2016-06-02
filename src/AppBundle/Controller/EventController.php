<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Event;

class EventController extends Controller
{
    /**
     * @Route("/event/write", name="app_event_write")
     */
    public function writeAction(){
        $event = new Event();
        $event->setName("IPC 2016");
        $event->setCity("Berlin");

        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();

        return new Response("Event saved!");
    }

    /**
     * @Route("/event/list", name="app_event_list")
     */
    public function listAction(){
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('AppBundle:Event')->findAll();
        return $this->render('event/list.html.twig', array(
            'events' => $events
        ));
    }

    /**
     * @Route("/event/{id}", name="app_event_show")
     */
    public function showAction($id){
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('AppBundle:Event')->find($id);
        if(!$event) {
            throw $this->createNotFoundException("Event: " . $id . " not found!");
        }
        return $this->render('event/show.html.twig', array(
           'event' => $event
        ));
    }
}