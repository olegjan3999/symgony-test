<?php

/* main/main.html.twig */
class __TwigTemplate_a32f0f0bbaedf68ad9f4de12b5f2e860441e4720fd86632d3ee783915b6fa5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "main/main.html.twig", 2);
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
        $__internal_7f75d8469102fef37977ee5f104b2f71c47e193cc78202a5c53a311359af6b33 = $this->env->getExtension("native_profiler");
        $__internal_7f75d8469102fef37977ee5f104b2f71c47e193cc78202a5c53a311359af6b33->enter($__internal_7f75d8469102fef37977ee5f104b2f71c47e193cc78202a5c53a311359af6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f75d8469102fef37977ee5f104b2f71c47e193cc78202a5c53a311359af6b33->leave($__internal_7f75d8469102fef37977ee5f104b2f71c47e193cc78202a5c53a311359af6b33_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f44ca30a8388a47d40dc79bc745149c8ed5c7b6270225a054a1429feb7e5c25 = $this->env->getExtension("native_profiler");
        $__internal_1f44ca30a8388a47d40dc79bc745149c8ed5c7b6270225a054a1429feb7e5c25->enter($__internal_1f44ca30a8388a47d40dc79bc745149c8ed5c7b6270225a054a1429feb7e5c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Main page</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
        <p>Categories : </p>
        <ul>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                <li><a href=\"/category/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>


    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">
    <p>Products : </p>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
        </thead>
        <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/product/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    </div>

";
        
        $__internal_1f44ca30a8388a47d40dc79bc745149c8ed5c7b6270225a054a1429feb7e5c25->leave($__internal_1f44ca30a8388a47d40dc79bc745149c8ed5c7b6270225a054a1429feb7e5c25_prof);

    }

    public function getTemplateName()
    {
        return "main/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  87 => 28,  83 => 27,  80 => 26,  76 => 25,  62 => 13,  51 => 11,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Main page</h1>*/
/* */
/*     <div class="categories" style="display: inline-block;">*/
/*         <p>Categories : </p>*/
/*         <ul>*/
/*             {% for category in categories %}*/
/*                 <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/*     <p>Products : </p>*/
/*     <table>*/
/*         <thead>*/
/*             <th>Id</th>*/
/*             <th>Name</th>*/
/*         </thead>*/
/*         <tbody>*/
/*                 {% for product in products %}*/
/*                 <tr>*/
/*                     <td>{{ product.id }}</td>*/
/*                     <td><a href="/product/{{ product.id }}">{{ product.name }}</a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
