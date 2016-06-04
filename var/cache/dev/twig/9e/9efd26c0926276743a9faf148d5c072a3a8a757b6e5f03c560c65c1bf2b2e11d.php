<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd92b7e85fc23595add07d6c8e53bf77754550749f0afaf6c21f5069747419c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d4ea96bc8ddbf8afc5872c1be368b363f85841ee767cd6581c68895fb816cc = $this->env->getExtension("native_profiler");
        $__internal_67d4ea96bc8ddbf8afc5872c1be368b363f85841ee767cd6581c68895fb816cc->enter($__internal_67d4ea96bc8ddbf8afc5872c1be368b363f85841ee767cd6581c68895fb816cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d4ea96bc8ddbf8afc5872c1be368b363f85841ee767cd6581c68895fb816cc->leave($__internal_67d4ea96bc8ddbf8afc5872c1be368b363f85841ee767cd6581c68895fb816cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b11da13c4f874bc068f27fec0592d9cee213132d5e03bdb100880eecd9e7bebb = $this->env->getExtension("native_profiler");
        $__internal_b11da13c4f874bc068f27fec0592d9cee213132d5e03bdb100880eecd9e7bebb->enter($__internal_b11da13c4f874bc068f27fec0592d9cee213132d5e03bdb100880eecd9e7bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b11da13c4f874bc068f27fec0592d9cee213132d5e03bdb100880eecd9e7bebb->leave($__internal_b11da13c4f874bc068f27fec0592d9cee213132d5e03bdb100880eecd9e7bebb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1106154336c3283cf8c317792cdeef9afd4a12bf7cb5cf9649d632ad257ca463 = $this->env->getExtension("native_profiler");
        $__internal_1106154336c3283cf8c317792cdeef9afd4a12bf7cb5cf9649d632ad257ca463->enter($__internal_1106154336c3283cf8c317792cdeef9afd4a12bf7cb5cf9649d632ad257ca463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1106154336c3283cf8c317792cdeef9afd4a12bf7cb5cf9649d632ad257ca463->leave($__internal_1106154336c3283cf8c317792cdeef9afd4a12bf7cb5cf9649d632ad257ca463_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f24ab68bc244b82d40ea97a365adaa7e091c57a739c5c8568c9e1487a6688d2 = $this->env->getExtension("native_profiler");
        $__internal_4f24ab68bc244b82d40ea97a365adaa7e091c57a739c5c8568c9e1487a6688d2->enter($__internal_4f24ab68bc244b82d40ea97a365adaa7e091c57a739c5c8568c9e1487a6688d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4f24ab68bc244b82d40ea97a365adaa7e091c57a739c5c8568c9e1487a6688d2->leave($__internal_4f24ab68bc244b82d40ea97a365adaa7e091c57a739c5c8568c9e1487a6688d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
