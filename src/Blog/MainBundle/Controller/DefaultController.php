<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlogMainBundle:Default:index.html.twig', array(
          'name' => $name
        ));
    }

    public function feedsAction()
    {
        $post = 'Texto de prueba';
        return $this->render('BlogMainBundle:Default:feeds.html.twig', array(
          'post' => $post
        ));
    }

    public function newAction(){
      //1era Forma
      $post = new PostsType();
      $post->setTitle('Title of post');
      $post->setContent('Content of post');
      $form = $this->createFormBuilder($post)
      ->add('title', 'text')
      ->add('content', 'text')
      ->add('public', 'submit')
      ->getForm();
      return $this->render("BlogMainBundle:Default:newpost.html.twig", array(
        'form' => $form->createView()
      ));

      /*$form = $this->createForm(new PostsType());
      return $this->render('BlogMainBundle:Default:newpost.html.twig', array(
          "form" => $form->createView()
        ));*/
    }

}
