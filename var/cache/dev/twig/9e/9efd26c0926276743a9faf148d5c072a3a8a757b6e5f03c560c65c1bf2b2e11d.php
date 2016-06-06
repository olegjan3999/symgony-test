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
        $__internal_af06709ba597a2f6b160c523fdad797fa8975c248411c2b9c3438fe1d2214c52 = $this->env->getExtension("native_profiler");
        $__internal_af06709ba597a2f6b160c523fdad797fa8975c248411c2b9c3438fe1d2214c52->enter($__internal_af06709ba597a2f6b160c523fdad797fa8975c248411c2b9c3438fe1d2214c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af06709ba597a2f6b160c523fdad797fa8975c248411c2b9c3438fe1d2214c52->leave($__internal_af06709ba597a2f6b160c523fdad797fa8975c248411c2b9c3438fe1d2214c52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3524f92d9b67a59bdbfe4d531c03527895ac9efec3d08a945dc89b51d0417aef = $this->env->getExtension("native_profiler");
        $__internal_3524f92d9b67a59bdbfe4d531c03527895ac9efec3d08a945dc89b51d0417aef->enter($__internal_3524f92d9b67a59bdbfe4d531c03527895ac9efec3d08a945dc89b51d0417aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3524f92d9b67a59bdbfe4d531c03527895ac9efec3d08a945dc89b51d0417aef->leave($__internal_3524f92d9b67a59bdbfe4d531c03527895ac9efec3d08a945dc89b51d0417aef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80e023713b59164787bd55b7a9cc39399937866e80c5513d020bd22e6de6618d = $this->env->getExtension("native_profiler");
        $__internal_80e023713b59164787bd55b7a9cc39399937866e80c5513d020bd22e6de6618d->enter($__internal_80e023713b59164787bd55b7a9cc39399937866e80c5513d020bd22e6de6618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80e023713b59164787bd55b7a9cc39399937866e80c5513d020bd22e6de6618d->leave($__internal_80e023713b59164787bd55b7a9cc39399937866e80c5513d020bd22e6de6618d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d3f9b7a8c7cabce52071dff950012df3d4f8571b83bd7aa76ed9d82721c292 = $this->env->getExtension("native_profiler");
        $__internal_a4d3f9b7a8c7cabce52071dff950012df3d4f8571b83bd7aa76ed9d82721c292->enter($__internal_a4d3f9b7a8c7cabce52071dff950012df3d4f8571b83bd7aa76ed9d82721c292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4d3f9b7a8c7cabce52071dff950012df3d4f8571b83bd7aa76ed9d82721c292->leave($__internal_a4d3f9b7a8c7cabce52071dff950012df3d4f8571b83bd7aa76ed9d82721c292_prof);

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
