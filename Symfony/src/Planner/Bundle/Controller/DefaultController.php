<?php

namespace Planner\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/plan/{plan}")
     * @Template("PlannerBundle:Default:plan.html.twig")
     */
    public function planAction($plan)
    {
        return array('plan' => $plan);
    }
    
    /**
     * @Route("/inicio/")
     * @Template("PlannerBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
        /**
     * @Route("/calendar/")
     * @Template("PlannerBundle:Default:calendar.html.twig")
     */
    public function loadCalendarAction()
    {
        return array();
    }
    
    public function crearObjetivo()
    {
        // crea una task y le asigna algunos datos ficticios para este ejemplo
        $Objetivo = new \Planner\Bundle\Entity\Objetivo();
 
        $form = $this->createFormBuilder($Objetivo)
            ->add('deadLine', 'date')
            ->add('nombre', 'text')
            ->add('descripcion', 'text')
            ->add('duracion', 'text')
            ->add('save', 'submit')
            ->getForm();
 
        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    
    }
}
