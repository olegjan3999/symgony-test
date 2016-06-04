<?php

/* main/category.html.twig */
class __TwigTemplate_e08b2127b514f4510ba6cbd631dc318e8e7d48e2c3de55335484079f7aa79705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "main/category.html.twig", 2);
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
        $__internal_20da0cc320d86d521a506c2e9ee9f9408414b081a570548c0473c45f124dbe27 = $this->env->getExtension("native_profiler");
        $__internal_20da0cc320d86d521a506c2e9ee9f9408414b081a570548c0473c45f124dbe27->enter($__internal_20da0cc320d86d521a506c2e9ee9f9408414b081a570548c0473c45f124dbe27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20da0cc320d86d521a506c2e9ee9f9408414b081a570548c0473c45f124dbe27->leave($__internal_20da0cc320d86d521a506c2e9ee9f9408414b081a570548c0473c45f124dbe27_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_36bf8c7f4f5d9abbc8c1f81a79ca8f771cb466fd1d3c4a934d6b96e91fc42d04 = $this->env->getExtension("native_profiler");
        $__internal_36bf8c7f4f5d9abbc8c1f81a79ca8f771cb466fd1d3c4a934d6b96e91fc42d04->enter($__internal_36bf8c7f4f5d9abbc8c1f81a79ca8f771cb466fd1d3c4a934d6b96e91fc42d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Categories</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
        <ul>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
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
        // line 12
        echo "        </ul>
    </div>


    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Category ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h3>

<p>Products for this category: </p>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                <tr>
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
        
        $__internal_36bf8c7f4f5d9abbc8c1f81a79ca8f771cb466fd1d3c4a934d6b96e91fc42d04->leave($__internal_36bf8c7f4f5d9abbc8c1f81a79ca8f771cb466fd1d3c4a934d6b96e91fc42d04_prof);

    }

    public function getTemplateName()
    {
        return "main/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  87 => 28,  84 => 27,  80 => 26,  69 => 18,  61 => 12,  50 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categories</h1>*/
/* */
/*     <div class="categories" style="display: inline-block;">*/
/*         <ul>*/
/*             {% for category in categories %}*/
/*                 <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/* */
/*         <h3>Category {{ category.name }}</h3>*/
/* */
/* <p>Products for this category: </p>*/
/*     <table>*/
/*         <thead>*/
/*             <th>Name</th>*/
/*         </thead>*/
/*         <tbody>*/
/*                 {% for product in category.products %}*/
/*                 <tr>*/
/*                     <td><a href="/product/{{ product.id }}">{{ product.name }}</a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
