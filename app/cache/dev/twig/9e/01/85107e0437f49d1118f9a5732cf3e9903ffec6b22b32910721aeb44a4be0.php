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
        echo "  ";
        $this->displayBlock('cabecero_block', $context, $blocks);
        // line 7
        echo "
  <p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "html", null, true);
        echo "</p>
";
    }

    // line 4
    public function block_cabecero_block($context, array $blocks = array())
    {
        // line 5
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogmain/images/logo.png"), "html", null, true);
        echo "\" width=\"50px\"></img>
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
        return array (  55 => 5,  52 => 4,  46 => 8,  43 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
