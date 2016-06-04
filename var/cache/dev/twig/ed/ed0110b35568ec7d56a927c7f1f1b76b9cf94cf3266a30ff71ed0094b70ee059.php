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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f198a34b1c8d67b7361935ac9457009fe84b91a2585b81c055e5eb3ca430c694 = $this->env->getExtension("native_profiler");
        $__internal_f198a34b1c8d67b7361935ac9457009fe84b91a2585b81c055e5eb3ca430c694->enter($__internal_f198a34b1c8d67b7361935ac9457009fe84b91a2585b81c055e5eb3ca430c694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f198a34b1c8d67b7361935ac9457009fe84b91a2585b81c055e5eb3ca430c694->leave($__internal_f198a34b1c8d67b7361935ac9457009fe84b91a2585b81c055e5eb3ca430c694_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b811e5adb3e480c8a3f726b6fe9c5930f16cf8f8dde8118f4f257ba01d73e78 = $this->env->getExtension("native_profiler");
        $__internal_2b811e5adb3e480c8a3f726b6fe9c5930f16cf8f8dde8118f4f257ba01d73e78->enter($__internal_2b811e5adb3e480c8a3f726b6fe9c5930f16cf8f8dde8118f4f257ba01d73e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Products</h1>

    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Product # ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</h3>

        <p>Product name : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</p>

        <div class=\"categories\" style=\"display: inline-block;\">
            <p>Categories for this product</p>
            <ul>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
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
        // line 19
        echo "            </ul>
        </div>

    </div>

";
        
        $__internal_2b811e5adb3e480c8a3f726b6fe9c5930f16cf8f8dde8118f4f257ba01d73e78->leave($__internal_2b811e5adb3e480c8a3f726b6fe9c5930f16cf8f8dde8118f4f257ba01d73e78_prof);

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
        return array (  74 => 19,  63 => 17,  59 => 16,  51 => 11,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Products</h1>*/
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/* */
/*         <h3>Product # {{ product.id }}</h3>*/
/* */
/*         <p>Product name : {{ product.name }}</p>*/
/* */
/*         <div class="categories" style="display: inline-block;">*/
/*             <p>Categories for this product</p>*/
/*             <ul>*/
/*                 {% for category in product.categories %}*/
/*                     <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
