<?php

/* ::layout.html.twig */
class __TwigTemplate_29c48c47f5246d3f294c8a8b1e6a940e3ce7661e413a9a876485c94868a25130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'cabecero_block' => array($this, 'block_cabecero_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Blog";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/css/stylesheets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cabecero_block\">
   ";
        // line 12
        $this->displayBlock('cabecero_block', $context, $blocks);
        // line 14
        echo "</div>
";
    }

    // line 12
    public function block_cabecero_block($context, array $blocks = array())
    {
        // line 13
        echo "   ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  68 => 12,  63 => 14,  61 => 12,  58 => 11,  55 => 10,  48 => 7,  45 => 6,  39 => 4,  11 => 1,);
    }
}
