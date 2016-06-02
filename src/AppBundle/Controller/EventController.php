<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
        $events = $this->getRepository()->findByBerlin();
        return $this->render('event/list.html.twig', array(
            'events' => $events
        ));
    }

    /**
     * @Route("/event/{id}/show", name="app_event_show")
     * @ParamConverter("event", class="AppBundle:Event")
     */
    public function showAction($event){
        /*
         *  wenn @ParamConverter aktiv ist brauchts das nicht mehr
            $event = $this->getRepository()->find($id);
            if(!$event) {
                throw $this->createNotFoundException("Event: " . $id . " not found!");
            }
        */
        return $this->render('event/show.html.twig', array(
           'event' => $event
        ));
    }

    /**
     * @Route("/event/{id}/delete", name="app_event_delete")
     * @ParamConverter("event", class="AppBundle:Event")
     */
    public function deleteAction($event){
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        //SET MARKER FOR LIST
        //Flash => nur auf naechster seite
        $this->addFlash("delete.success", $event->getName());

        return new RedirectResponse(
            $this->generateUrl("app_event_list")
        );
    }

    public function embeddedAction(){
        return new Response('This does not need a route because it is embedded :)');
    }

    public function getRepository(){
        return $this->getDoctrine()->getRepository('AppBundle:Event');
    }
}