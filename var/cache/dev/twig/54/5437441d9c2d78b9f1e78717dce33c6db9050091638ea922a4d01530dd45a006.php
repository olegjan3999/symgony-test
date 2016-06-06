<?php

/* base.html.twig */
class __TwigTemplate_c467beb9d88f7cf3078742ec187221fb9dcc043ea3d89011b1d16d60803a606b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f5eb1eb7d2ba662a1699b2c3b90ac12601398a0e64ba60fbe08a86afe1d4ee1 = $this->env->getExtension("native_profiler");
        $__internal_2f5eb1eb7d2ba662a1699b2c3b90ac12601398a0e64ba60fbe08a86afe1d4ee1->enter($__internal_2f5eb1eb7d2ba662a1699b2c3b90ac12601398a0e64ba60fbe08a86afe1d4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2f5eb1eb7d2ba662a1699b2c3b90ac12601398a0e64ba60fbe08a86afe1d4ee1->leave($__internal_2f5eb1eb7d2ba662a1699b2c3b90ac12601398a0e64ba60fbe08a86afe1d4ee1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e57a68ac749793757ba5df976170311bd7f8684a38897423e2dcdde1dcd08540 = $this->env->getExtension("native_profiler");
        $__internal_e57a68ac749793757ba5df976170311bd7f8684a38897423e2dcdde1dcd08540->enter($__internal_e57a68ac749793757ba5df976170311bd7f8684a38897423e2dcdde1dcd08540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e57a68ac749793757ba5df976170311bd7f8684a38897423e2dcdde1dcd08540->leave($__internal_e57a68ac749793757ba5df976170311bd7f8684a38897423e2dcdde1dcd08540_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52d02904da02a91f54451dae5c2ef16d6195e492551f0b803ac2654fb0e9d050 = $this->env->getExtension("native_profiler");
        $__internal_52d02904da02a91f54451dae5c2ef16d6195e492551f0b803ac2654fb0e9d050->enter($__internal_52d02904da02a91f54451dae5c2ef16d6195e492551f0b803ac2654fb0e9d050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52d02904da02a91f54451dae5c2ef16d6195e492551f0b803ac2654fb0e9d050->leave($__internal_52d02904da02a91f54451dae5c2ef16d6195e492551f0b803ac2654fb0e9d050_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7c4bee22761a5152bb63803f07b8ce0da69a6e45f9f7fc9669a6443c34cd612 = $this->env->getExtension("native_profiler");
        $__internal_e7c4bee22761a5152bb63803f07b8ce0da69a6e45f9f7fc9669a6443c34cd612->enter($__internal_e7c4bee22761a5152bb63803f07b8ce0da69a6e45f9f7fc9669a6443c34cd612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7c4bee22761a5152bb63803f07b8ce0da69a6e45f9f7fc9669a6443c34cd612->leave($__internal_e7c4bee22761a5152bb63803f07b8ce0da69a6e45f9f7fc9669a6443c34cd612_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8179220bc936e5b40ee33aa6378efd212389c9cab9285992b225867eade667b = $this->env->getExtension("native_profiler");
        $__internal_d8179220bc936e5b40ee33aa6378efd212389c9cab9285992b225867eade667b->enter($__internal_d8179220bc936e5b40ee33aa6378efd212389c9cab9285992b225867eade667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8179220bc936e5b40ee33aa6378efd212389c9cab9285992b225867eade667b->leave($__internal_d8179220bc936e5b40ee33aa6378efd212389c9cab9285992b225867eade667b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 12,  86 => 11,  75 => 6,  63 => 5,  54 => 13,  51 => 12,  49 => 11,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="{{ asset('bundles/framework/css/body.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
