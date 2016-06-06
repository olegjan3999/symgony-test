<?php

/* main/product.html.twig */
class __TwigTemplate_d708c33b38765c4296d9134f0798af76abfdd0deacae42b91f4b61465c30d9ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "main/product.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72723c83157d5ea5af2a0ad716445719f8001cb31fea661b2749e94e38c4f0f9 = $this->env->getExtension("native_profiler");
        $__internal_72723c83157d5ea5af2a0ad716445719f8001cb31fea661b2749e94e38c4f0f9->enter($__internal_72723c83157d5ea5af2a0ad716445719f8001cb31fea661b2749e94e38c4f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72723c83157d5ea5af2a0ad716445719f8001cb31fea661b2749e94e38c4f0f9->leave($__internal_72723c83157d5ea5af2a0ad716445719f8001cb31fea661b2749e94e38c4f0f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc364885036f9f56767f40c098d248e4157ddce6d23c4a5a78ce3b892aa27192 = $this->env->getExtension("native_profiler");
        $__internal_cc364885036f9f56767f40c098d248e4157ddce6d23c4a5a78ce3b892aa27192->enter($__internal_cc364885036f9f56767f40c098d248e4157ddce6d23c4a5a78ce3b892aa27192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <head>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    <h1>Developers</h1>

    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Developer # ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</h3>

        <p>Developer name : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</p>

        <div class=\"categories\" style=\"display: inline-block;\">
            <p>Languages for this developer</p>
            <ul>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                    <li><a href=\"/category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>

    </div>
    </body>

";
        
        $__internal_cc364885036f9f56767f40c098d248e4157ddce6d23c4a5a78ce3b892aa27192->leave($__internal_cc364885036f9f56767f40c098d248e4157ddce6d23c4a5a78ce3b892aa27192_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_009cb71af3c3213748297d66cdbd9b67a36b90c59fbd9ed523b107af180f612d = $this->env->getExtension("native_profiler");
        $__internal_009cb71af3c3213748297d66cdbd9b67a36b90c59fbd9ed523b107af180f612d->enter($__internal_009cb71af3c3213748297d66cdbd9b67a36b90c59fbd9ed523b107af180f612d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_009cb71af3c3213748297d66cdbd9b67a36b90c59fbd9ed523b107af180f612d->leave($__internal_009cb71af3c3213748297d66cdbd9b67a36b90c59fbd9ed523b107af180f612d_prof);

    }

    public function getTemplateName()
    {
        return "main/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 7,  95 => 6,  82 => 25,  71 => 23,  67 => 22,  59 => 17,  54 => 15,  46 => 9,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <head>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/framework/css/style.css') }}" rel="stylesheet">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     <h1>Developers</h1>*/
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/* */
/*         <h3>Developer # {{ product.id }}</h3>*/
/* */
/*         <p>Developer name : {{ product.name }}</p>*/
/* */
/*         <div class="categories" style="display: inline-block;">*/
/*             <p>Languages for this developer</p>*/
/*             <ul>*/
/*                 {% for category in product.categories %}*/
/*                     <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/*     </body>*/
/* */
/* {% endblock %}*/
