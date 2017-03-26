<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Blog\MainBundle\Entity\Posts;

class FeedsController extends Controller
{
    public function newPostAction($title, $content)
    {
      $post = new Posts();
      $post->setPostTitle($title);
      $post->setPostContent($content);

      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();

      return new Response(
        'Post añadido con titulo: '.$title.' y ID: '.$post->getId().' en la DB.'
      );
    }


    public function feedsAction()
    {
      /*
      $em =$this->getDoctrine()->getManager();
      $posts = $em->getRepository('BlogMainBundle:Posts')->findAll();
      $res = "<strong><h2>My Posts:</h2></strong><br>";
      foreach ($posts as $post) {
        $res .= 'Title: '.$post->getPostTitle().'<br> Content:
        '.$post->getPostContent().'<br>ID: '.$post->getId().'<hr>';
      }
      return new Response($res);
      */
      $em =$this->getDoctrine()->getManager();
      $posts = $em->getRepository('BlogMainBundle:Posts')->findAll();
      $res = "<strong><h2>My Posts:</h2></strong><br>";
      foreach ($posts as $post) {
        $res .= '<h2>'.$post->getPostTitle().'</h2><p>
        '.$post->getPostContent().'</p><br>ID: '.$post->getId().'<hr>';
      }
      return new Response($res);
    }


    public function getByIdAction($id)
    {
      $em =$this->getDoctrine()->getManager();
      $post = $em->getRepository('BlogMainBundle:Posts')->findOneById($id);
      return new Response(
        '<h2>'.$post->getPostTitle().'</h2><br><p>'.$post->getPostContent().'
        </p><br>'
      );
    }


    public function newAction()
    {
      $form = 'My form here...';
      //return new Response ("<html><body><h2>My Posts:</h2></body></html>");
      return $this->render("BlogMainBundle:Default:newpost.html.twig", array(
          'form' => $form
      ));
    }





}
