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

    public function feedsAction($post)
    {
        return $this->render('BlogMainBundle:Default:feeds.html.twig', array(
          'post' => $post
        ));
    }
}
