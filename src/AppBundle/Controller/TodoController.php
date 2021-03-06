<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/", name="todo_list")
     */
    public function listAction()
    {
      $todos = $this->getDoctrine()->getRepository('AppBundle:Todo')->findAll();  
      
      return $this->render('todo/index.html.twig', array(
          'todos' => $todos
      ));
    }
    
    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/create.html.twig');
    }
    
    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/edit.html.twig');
    }
    
    /**
     * @Route("/todo/show/{id}", name="todo_show")
     */
    public function showAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('todo/details.html.twig');
    }
    
}
