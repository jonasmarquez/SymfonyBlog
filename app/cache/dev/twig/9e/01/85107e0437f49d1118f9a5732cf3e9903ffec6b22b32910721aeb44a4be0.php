<?php

/* BlogMainBundle:Default:feeds.html.twig */
class __TwigTemplate_9e0185107e0437f49d1118f9a5732cf3e9903ffec6b22b32910721aeb44a4be0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'cabecero_block' => array($this, 'block_cabecero_block'),
            'posts_block' => array($this, 'block_posts_block'),
            'post' => array($this, 'block_post'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "


";
        // line 7
        $this->displayBlock('cabecero_block', $context, $blocks);
        // line 21
        echo "


  ";
        // line 24
        $this->displayBlock('posts_block', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "


";
    }

    // line 7
    public function block_cabecero_block($context, array $blocks = array())
    {
        // line 8
        echo "  <img src=\"http://placehold.it/350x150?text=LOGO\"

     style=\"float:left; margin-right:50px;\" alt=\"LOGO\"></img>
  <h1>MY SYMFONY WEB BLOG</h1>

  <div  id=\"navbar\">
    <ul>
      <li><a href=\"http://localhost:8000/app_dev.php/blog\">HOME</a></li>
      <li><a href=\"http://localhost:8000/app_dev.php/new\">Add new Post +</a></li>
    </ul>
  </div>
<hr>
";
    }

    // line 24
    public function block_posts_block($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "
      ";
            // line 28
            $this->displayBlock('post', $context, $blocks);
            // line 47
            echo "
      <hr>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
  ";
    }

    // line 28
    public function block_post($context, array $blocks = array())
    {
        // line 29
        echo "      <article style=\"margin-top:3em;\">
        <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle", array()), "html", null, true);
        echo "</h2>
        <h4>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postDate", array()), "html", null, true);
        echo " |
          <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postUser", array()), "html", null, true);
        echo "\">
          ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postAutor", array()), "html", null, true);
        echo "</a></h4>
          ";
        // line 34
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array())) {
            // line 35
            echo "            <img style=\"float:left\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/images/posts/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array()), "html", null, true);
            echo "\"

            width=\"auto\" style=\"margin:1em;\"></img>
          ";
        }
        // line 39
        echo "          <div>";
        echo nl2br($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postContent", array()));
        echo "</div>
      </article>
      <h4><a href=\"http://localhost:8000/app_dev.php/delete/";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
        Delete x</a> |
        <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
          Read more +</a>
      </h4>
      ";
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "    <footer>
      <h1>FOOTER</h1><hr>
      <p><strong>Copyleft © 2017</strong></p>
      <p><strong>Created by: Jonás Márquez |
        <a href=\"https://www.linkedin.com/in/jonasmarquez/\">LinkedIn</a> |
        <a href=\"https://gitlab.com/jonas.marquez/blog\">GitLab</a> |
        <a href=\"https://jonasmarquez.me\">Personal Blog</a></strong></p>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "BlogMainBundle:Default:feeds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  190 => 54,  182 => 43,  177 => 41,  171 => 39,  162 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  141 => 29,  138 => 28,  133 => 51,  116 => 47,  114 => 28,  111 => 27,  94 => 26,  91 => 25,  88 => 24,  72 => 8,  69 => 7,  62 => 64,  60 => 54,  57 => 53,  55 => 24,  50 => 21,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
