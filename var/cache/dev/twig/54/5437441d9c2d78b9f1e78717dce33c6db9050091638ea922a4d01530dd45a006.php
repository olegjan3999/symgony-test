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
        $__internal_962a1825e2efa2b3fd0953e644a99ba68fe4805da1fc3582925b7c2bece409fb = $this->env->getExtension("native_profiler");
        $__internal_962a1825e2efa2b3fd0953e644a99ba68fe4805da1fc3582925b7c2bece409fb->enter($__internal_962a1825e2efa2b3fd0953e644a99ba68fe4805da1fc3582925b7c2bece409fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_962a1825e2efa2b3fd0953e644a99ba68fe4805da1fc3582925b7c2bece409fb->leave($__internal_962a1825e2efa2b3fd0953e644a99ba68fe4805da1fc3582925b7c2bece409fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec34854cf460af2090f1f012d2f176547b5466a941e02d13c6cd4b20f455e9c2 = $this->env->getExtension("native_profiler");
        $__internal_ec34854cf460af2090f1f012d2f176547b5466a941e02d13c6cd4b20f455e9c2->enter($__internal_ec34854cf460af2090f1f012d2f176547b5466a941e02d13c6cd4b20f455e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ec34854cf460af2090f1f012d2f176547b5466a941e02d13c6cd4b20f455e9c2->leave($__internal_ec34854cf460af2090f1f012d2f176547b5466a941e02d13c6cd4b20f455e9c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7bcf6d4e69465cec3043a7a142a9c7b93a23741ca8d91d9a8b7bb9f140b033e = $this->env->getExtension("native_profiler");
        $__internal_e7bcf6d4e69465cec3043a7a142a9c7b93a23741ca8d91d9a8b7bb9f140b033e->enter($__internal_e7bcf6d4e69465cec3043a7a142a9c7b93a23741ca8d91d9a8b7bb9f140b033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e7bcf6d4e69465cec3043a7a142a9c7b93a23741ca8d91d9a8b7bb9f140b033e->leave($__internal_e7bcf6d4e69465cec3043a7a142a9c7b93a23741ca8d91d9a8b7bb9f140b033e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f5414b565f61a244a11be2326b9e657284efa425c79ef0de2fc9c060a0e2b16 = $this->env->getExtension("native_profiler");
        $__internal_8f5414b565f61a244a11be2326b9e657284efa425c79ef0de2fc9c060a0e2b16->enter($__internal_8f5414b565f61a244a11be2326b9e657284efa425c79ef0de2fc9c060a0e2b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f5414b565f61a244a11be2326b9e657284efa425c79ef0de2fc9c060a0e2b16->leave($__internal_8f5414b565f61a244a11be2326b9e657284efa425c79ef0de2fc9c060a0e2b16_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8bdaf61b063e8fb2d79c23d543e31009fec7f80c96bc3f47b616e136b4764a9 = $this->env->getExtension("native_profiler");
        $__internal_b8bdaf61b063e8fb2d79c23d543e31009fec7f80c96bc3f47b616e136b4764a9->enter($__internal_b8bdaf61b063e8fb2d79c23d543e31009fec7f80c96bc3f47b616e136b4764a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8bdaf61b063e8fb2d79c23d543e31009fec7f80c96bc3f47b616e136b4764a9->leave($__internal_b8bdaf61b063e8fb2d79c23d543e31009fec7f80c96bc3f47b616e136b4764a9_prof);

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
