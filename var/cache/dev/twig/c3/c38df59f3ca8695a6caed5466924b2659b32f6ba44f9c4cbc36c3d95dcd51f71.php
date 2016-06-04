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
        $__internal_eeec570d8b56ec4f5768e73897bb88842a8ea120edf44bf2ea2d14bdd410e12e = $this->env->getExtension("native_profiler");
        $__internal_eeec570d8b56ec4f5768e73897bb88842a8ea120edf44bf2ea2d14bdd410e12e->enter($__internal_eeec570d8b56ec4f5768e73897bb88842a8ea120edf44bf2ea2d14bdd410e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeec570d8b56ec4f5768e73897bb88842a8ea120edf44bf2ea2d14bdd410e12e->leave($__internal_eeec570d8b56ec4f5768e73897bb88842a8ea120edf44bf2ea2d14bdd410e12e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9240419cd04469e0381fac7b974f2574ec58b5da198c5e38f7e6e3f31bffd6c = $this->env->getExtension("native_profiler");
        $__internal_a9240419cd04469e0381fac7b974f2574ec58b5da198c5e38f7e6e3f31bffd6c->enter($__internal_a9240419cd04469e0381fac7b974f2574ec58b5da198c5e38f7e6e3f31bffd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9240419cd04469e0381fac7b974f2574ec58b5da198c5e38f7e6e3f31bffd6c->leave($__internal_a9240419cd04469e0381fac7b974f2574ec58b5da198c5e38f7e6e3f31bffd6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6bfbbb7a895b396da84053f6bc2c37d5af10d2b8ff1acdf3c5b55600bab7653 = $this->env->getExtension("native_profiler");
        $__internal_e6bfbbb7a895b396da84053f6bc2c37d5af10d2b8ff1acdf3c5b55600bab7653->enter($__internal_e6bfbbb7a895b396da84053f6bc2c37d5af10d2b8ff1acdf3c5b55600bab7653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6bfbbb7a895b396da84053f6bc2c37d5af10d2b8ff1acdf3c5b55600bab7653->leave($__internal_e6bfbbb7a895b396da84053f6bc2c37d5af10d2b8ff1acdf3c5b55600bab7653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f86483523542058ba4e579676cb14622f06b7d8d4bad0abe54643def80edc9b6 = $this->env->getExtension("native_profiler");
        $__internal_f86483523542058ba4e579676cb14622f06b7d8d4bad0abe54643def80edc9b6->enter($__internal_f86483523542058ba4e579676cb14622f06b7d8d4bad0abe54643def80edc9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f86483523542058ba4e579676cb14622f06b7d8d4bad0abe54643def80edc9b6->leave($__internal_f86483523542058ba4e579676cb14622f06b7d8d4bad0abe54643def80edc9b6_prof);

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
