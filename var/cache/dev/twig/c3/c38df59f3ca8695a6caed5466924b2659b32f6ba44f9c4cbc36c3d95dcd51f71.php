<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5124109154577959445ed0569aa5c7bf0982ca60722aa40257849bba34e516ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d39eae4a7128c32947386aa35a17ab535c66ee893ba1f68769e101009ee1161 = $this->env->getExtension("native_profiler");
        $__internal_0d39eae4a7128c32947386aa35a17ab535c66ee893ba1f68769e101009ee1161->enter($__internal_0d39eae4a7128c32947386aa35a17ab535c66ee893ba1f68769e101009ee1161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d39eae4a7128c32947386aa35a17ab535c66ee893ba1f68769e101009ee1161->leave($__internal_0d39eae4a7128c32947386aa35a17ab535c66ee893ba1f68769e101009ee1161_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3538b2caadee20d5fcd37167133a12c23b03d90851b0f1f013f4f68495d2da6b = $this->env->getExtension("native_profiler");
        $__internal_3538b2caadee20d5fcd37167133a12c23b03d90851b0f1f013f4f68495d2da6b->enter($__internal_3538b2caadee20d5fcd37167133a12c23b03d90851b0f1f013f4f68495d2da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3538b2caadee20d5fcd37167133a12c23b03d90851b0f1f013f4f68495d2da6b->leave($__internal_3538b2caadee20d5fcd37167133a12c23b03d90851b0f1f013f4f68495d2da6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2dd9b38bd858ab2c3c468b1c151994220245b7f10007b684ac05a7d25b92d40 = $this->env->getExtension("native_profiler");
        $__internal_e2dd9b38bd858ab2c3c468b1c151994220245b7f10007b684ac05a7d25b92d40->enter($__internal_e2dd9b38bd858ab2c3c468b1c151994220245b7f10007b684ac05a7d25b92d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2dd9b38bd858ab2c3c468b1c151994220245b7f10007b684ac05a7d25b92d40->leave($__internal_e2dd9b38bd858ab2c3c468b1c151994220245b7f10007b684ac05a7d25b92d40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b086e663e85e5250dd3ca29f32e3b1d7af80c604bad144bcf0543620074ae57 = $this->env->getExtension("native_profiler");
        $__internal_3b086e663e85e5250dd3ca29f32e3b1d7af80c604bad144bcf0543620074ae57->enter($__internal_3b086e663e85e5250dd3ca29f32e3b1d7af80c604bad144bcf0543620074ae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b086e663e85e5250dd3ca29f32e3b1d7af80c604bad144bcf0543620074ae57->leave($__internal_3b086e663e85e5250dd3ca29f32e3b1d7af80c604bad144bcf0543620074ae57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
