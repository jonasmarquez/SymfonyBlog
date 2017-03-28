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
        // line 16
        echo "


  ";
        // line 19
        $this->displayBlock('posts_block', $context, $blocks);
        // line 48
        echo "


";
    }

    // line 7
    public function block_cabecero_block($context, array $blocks = array())
    {
        // line 8
        echo "  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/images/logo.png"), "html", null, true);
        echo "\"

  width=\"50px\" style=\"float:left; margin-right:50px;\"></img>
  <h1>MY WEB BLOG</h1>
  <hr>
  <h4><a href=\"http://localhost:8000/app_dev.php/new\">
    Add new Post</a></h4><hr>
";
    }

    // line 19
    public function block_posts_block($context, array $blocks = array())
    {
        // line 20
        echo "
    ";
        // line 21
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
            // line 22
            echo "
      ";
            // line 23
            $this->displayBlock('post', $context, $blocks);
            // line 42
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
        // line 46
        echo "
  ";
    }

    // line 23
    public function block_post($context, array $blocks = array())
    {
        // line 24
        echo "      <article>
        <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postTitle", array()), "html", null, true);
        echo "</h2>
        <h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postDate", array()), "html", null, true);
        echo " |
          <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postUser", array()), "html", null, true);
        echo "\">
          ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postAutor", array()), "html", null, true);
        echo "</a></h4>
          ";
        // line 29
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array())) {
            // line 30
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/images/posts/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imageName", array()), "html", null, true);
            echo "\"

            width=\"auto\" style=\"margin:1em;\"></img>
          ";
        }
        // line 34
        echo "          <div>";
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "postContent", array()), "html", null, true));
        echo "</div>
      </article>
      <h4><a href=\"http://localhost:8000/app_dev.php/delete/";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
        Delete x</a> |
        <a href=\"http://localhost:8000/app_dev.php/blog/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\">
          Read more +</a>
      </h4>
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
        return array (  173 => 38,  168 => 36,  162 => 34,  153 => 30,  151 => 29,  147 => 28,  143 => 27,  139 => 26,  135 => 25,  132 => 24,  129 => 23,  124 => 46,  107 => 42,  105 => 23,  102 => 22,  85 => 21,  82 => 20,  79 => 19,  66 => 8,  63 => 7,  56 => 48,  54 => 19,  49 => 16,  47 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
