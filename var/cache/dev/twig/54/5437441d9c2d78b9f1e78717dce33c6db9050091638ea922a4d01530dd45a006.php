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
        $__internal_0b4825657b0904a29ac315aba88e7778aa1fa973e95f56a281242b41d2ca3a74 = $this->env->getExtension("native_profiler");
        $__internal_0b4825657b0904a29ac315aba88e7778aa1fa973e95f56a281242b41d2ca3a74->enter($__internal_0b4825657b0904a29ac315aba88e7778aa1fa973e95f56a281242b41d2ca3a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0b4825657b0904a29ac315aba88e7778aa1fa973e95f56a281242b41d2ca3a74->leave($__internal_0b4825657b0904a29ac315aba88e7778aa1fa973e95f56a281242b41d2ca3a74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6d4e667b63b6ea4dc2f21a1d3da3ebf94768106746f81b5b33353e20f3a0bb = $this->env->getExtension("native_profiler");
        $__internal_ff6d4e667b63b6ea4dc2f21a1d3da3ebf94768106746f81b5b33353e20f3a0bb->enter($__internal_ff6d4e667b63b6ea4dc2f21a1d3da3ebf94768106746f81b5b33353e20f3a0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff6d4e667b63b6ea4dc2f21a1d3da3ebf94768106746f81b5b33353e20f3a0bb->leave($__internal_ff6d4e667b63b6ea4dc2f21a1d3da3ebf94768106746f81b5b33353e20f3a0bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_868c067b99892e3db328e190769b630ae6e92415f83ad0c9aa4991acf5f02b2c = $this->env->getExtension("native_profiler");
        $__internal_868c067b99892e3db328e190769b630ae6e92415f83ad0c9aa4991acf5f02b2c->enter($__internal_868c067b99892e3db328e190769b630ae6e92415f83ad0c9aa4991acf5f02b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_868c067b99892e3db328e190769b630ae6e92415f83ad0c9aa4991acf5f02b2c->leave($__internal_868c067b99892e3db328e190769b630ae6e92415f83ad0c9aa4991acf5f02b2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd298363347154c08113ae898b98da4217cea3dd85fa00fa5e3402a839bd134 = $this->env->getExtension("native_profiler");
        $__internal_2fd298363347154c08113ae898b98da4217cea3dd85fa00fa5e3402a839bd134->enter($__internal_2fd298363347154c08113ae898b98da4217cea3dd85fa00fa5e3402a839bd134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fd298363347154c08113ae898b98da4217cea3dd85fa00fa5e3402a839bd134->leave($__internal_2fd298363347154c08113ae898b98da4217cea3dd85fa00fa5e3402a839bd134_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e0e4899d84347ca9d41c9e8e38ffb4484b25e917f14aa080ed0c5228558e147 = $this->env->getExtension("native_profiler");
        $__internal_0e0e4899d84347ca9d41c9e8e38ffb4484b25e917f14aa080ed0c5228558e147->enter($__internal_0e0e4899d84347ca9d41c9e8e38ffb4484b25e917f14aa080ed0c5228558e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e0e4899d84347ca9d41c9e8e38ffb4484b25e917f14aa080ed0c5228558e147->leave($__internal_0e0e4899d84347ca9d41c9e8e38ffb4484b25e917f14aa080ed0c5228558e147_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
