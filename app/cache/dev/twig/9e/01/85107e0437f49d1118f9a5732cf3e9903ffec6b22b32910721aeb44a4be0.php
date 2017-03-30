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
        // line 18
        echo "


  ";
        // line 21
        $this->displayBlock('posts_block', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 61
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
  <hr>
  <h4><a href=\"http://localhost:8000/app_dev.php/blog\">
    HOME | </a>
    <a href=\"http://localhost:8000/app_dev.php/new\">
      Add new Post +</a></h4><hr>
";
    }

    // line 21
    public function block_posts_block($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
        // line 23
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
            // line 24
            echo "
      ";
            // line 25
            $this->displayBlock('post', $context, $blocks);
            // line 44
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
        // line 48
        echo "
  ";
    }

    // line 25
    public function block_post($context, array $blocks = array())
    {
        // line 26
        echo "      <article style=\"margin-top:3em;\">
        <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle", array()), "html", null, true);
        echo "</h2>
        <h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postDate", array()), "html", null, true);
        echo " |
          <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postUser", array()), "html", null, true);
        echo "\">
          ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postAutor", array()), "html", null, true);
        echo "</a></h4>
          ";
        // line 31
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array())) {
            // line 32
            echo "            <img style=\"float:left\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/images/posts/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array()), "html", null, true);
            echo "\"

            width=\"auto\" style=\"margin:1em;\"></img>
          ";
        }
        // line 36
        echo "          <div>";
        echo nl2br($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postContent", array()));
        echo "</div>
      </article>
      <h4><a href=\"http://localhost:8000/app_dev.php/delete/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
        Delete x</a> |
        <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
          Read more +</a>
      </h4>
      ";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "    <footer>
      <h1>FOOTER</h1><hr>
      <p>Copyleft © - 2017</p>
      <p>Created by: Jonás Márquez |
        <a href=\"https://www.linkedin.com/in/jonasmarquez/\">LinkedIn</a> |
        <a href=\"https://gitlab.com/jonas.marquez/blog\">GitLab</a> |
        <a href=\"https://jonasmarquez.me\">Personal Blog</a></p>
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
        return array (  190 => 52,  187 => 51,  179 => 40,  174 => 38,  168 => 36,  159 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  138 => 26,  135 => 25,  130 => 48,  113 => 44,  111 => 25,  108 => 24,  91 => 23,  88 => 22,  85 => 21,  72 => 8,  69 => 7,  62 => 61,  60 => 51,  57 => 50,  55 => 21,  50 => 18,  48 => 7,  43 => 4,  40 => 3,  11 => 1,);
    }
}
