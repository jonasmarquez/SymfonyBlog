<?php

namespace Blog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Blog\MainBundle\Entity\Posts;
use Blog\MainBundle\Form\PostsType;

class FeedsController extends Controller
{

// Function Form to INSERT new post from FORM
    public function newFormAction(Request $request)
    {
      /*
      // Additional Variables
      // Must be assigned by session control etc...
      $date = date("Y-m-d H:i:s");
      $autor = 'Jonás Márquez';
      $post = new Posts();

      $post->setPostTitle('Title here...');
      $post->setPostContent('Content here...');
      $form = $this->createFormBuilder($post)
      ->add('postUser', 'text')
      ->add('postTitle', 'text')
      ->add('postContent', 'text')
      ->add('postDate', 'text')
      ->add('postAutor', 'text')
      ->add('public', 'submit')
      ->getForm();
      $form->handleRequest($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        return $this->redirect($this->generateUrl('blog_main_feeds'));
      }
      return $this->render("BlogMainBundle:Default:newpost.html.twig", array(
        'form' => $form->createView()
      ));*/

      // Additional Variables
      // Must be assigned by session control etc...
      $date = date("Y-m-d H:i:s");
      $autor = 'Jonás Márquez';
      $user = 'jonas';

      $post = new Posts();
      $post->setPostDate($date);
      $post->setPostAutor($autor);
      $post->setPostUser($user);
      // Create form FROM file Blog/MainBundle/Form/PostsType.php
      // if you want to make changes on fields you must to make it there.
      $form = $this->createForm(new PostsType(), $post);
      $form->handleRequest($request);
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();
        return $this->redirect($this->generateUrl('blog_main_feeds'));
      }
      return $this->render("BlogMainBundle:Default:newpost.html.twig", array(
        'form' => $form->createView()
      ));
    }

// Function to INSERT new Post
    public function newPostAction($user, $title, $content)
    {
      // Additional Variables
      // Must be assigned by session control etc...
      $date = date("Y-m-d H:i:s");
      $autor = 'Jonás Márquez';
      $user = 'jonas';

      $post = new Posts();
      $post->setPostUser($user);
      $post->setPostTitle($title);
      $post->setPostContent($content);
      $post->setPostDate($date);
      $post->setPostAutor($autor);
      $post->setPostUser($user);
      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();
      return new Response(
        'Post añadido con titulo: '.$title.' y ID: '.$post->getId().' en la DB.'
      );
    }

// Function to UPDATE Post
    public function updateAction($id, $title, $content)
    {
      $em = $this->getDoctrine()->getManager();
      $post = $em->getRepository('BlogMainBundle:Posts')->findOneById($id);
      // Exception in case of dont find any Post with these ID
      if (!$post) {
        throw $this->createNotFoundException(
          'Sorry! we can not find the Post with ID: '.$id.'<br>
          <a href="localhost:8000/app_dev.php/blog><- Back!</a>"'
        );
      }
      $post->setPostTitle($title);
      $post->setPostContent($content);
      $em->flush();
      return new Response(
        'Post updated successfully!<hr> Title: '.$post->getPostTitle().'<br>
        Content: '.$post->getPostContent().'<br>
        <a href="http://localhost:8000/app_dev.php/blog"> <- Back!</a>'
      );
    }

// Function to DELETE Post
    public function deleteAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $post = $em->getRepository('BlogMainBundle:Posts')->findOneById($id);
      // Exception in case of dont find any Post with these ID
      if (!$post) {
        throw $this->createNotFoundException(
          'Sorry! we can not find the Post with ID: '.$id.'<br>
          <a href="localhost:8000/app_dev.php/blog><- Back!</a>"'
        );
      }
      $em->remove($post);
      $em->flush();
      return $this->redirect($this->generateUrl('blog_main_feeds'));
      /*return new Response(
        '<h2>Post eliminado con éxito!</h2><br>
        <a href="http://localhost:8000/app_dev.php/blog"> < Back to Blog</a>'
      );*/
    }

// Function to get all Posts ORDER BY ID DESC
    public function feedsAction()
    {
      $em = $this->getDoctrine()->getManager();
      $posts = $em->getRepository('BlogMainBundle:Posts')->findBy(array(),
      array('id'=>'DESC'));
      return $this->render("BlogMainBundle:Default:feeds.html.twig", array(
        'posts' => $posts
      ));
    }

// Function to get Posts by Id
    public function getByIdAction($id)
    {
      $em =$this->getDoctrine()->getManager();
      $post = $em->getRepository('BlogMainBundle:Posts')->findOneById($id);
      return $this->render("BlogMainBundle:Default:feed.html.twig", array(
        'post' => $post
      ));
    }

// Function to get Posts by User
    public function getByUserAction($user)
    {
      $em =$this->getDoctrine()->getManager();
      $post = $em->getRepository('BlogMainBundle:Posts')->findOneByUser($user);
      return $this->render("BlogMainBundle:Default:feed.html.twig", array(
        'post' => $post
      ));
    }

// END OF CLASS
}
