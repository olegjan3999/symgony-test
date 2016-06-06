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
        $__internal_a6eaa1f2b06c6cc117f9418ce38ea58f4d173c201462d42d0585a6adf069d31b = $this->env->getExtension("native_profiler");
        $__internal_a6eaa1f2b06c6cc117f9418ce38ea58f4d173c201462d42d0585a6adf069d31b->enter($__internal_a6eaa1f2b06c6cc117f9418ce38ea58f4d173c201462d42d0585a6adf069d31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6eaa1f2b06c6cc117f9418ce38ea58f4d173c201462d42d0585a6adf069d31b->leave($__internal_a6eaa1f2b06c6cc117f9418ce38ea58f4d173c201462d42d0585a6adf069d31b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4acc1d44a5335a9b9f8ac34637bb67c07cbcc5c128655eecc271fa5ef7ce33ae = $this->env->getExtension("native_profiler");
        $__internal_4acc1d44a5335a9b9f8ac34637bb67c07cbcc5c128655eecc271fa5ef7ce33ae->enter($__internal_4acc1d44a5335a9b9f8ac34637bb67c07cbcc5c128655eecc271fa5ef7ce33ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <body>
    <h1>Main page</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
        <p>IT languages :</p>
        <ul>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
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
        // line 14
        echo "        </ul>
    </div>



    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">
    <p>Developers :</p>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
        </thead>
        <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/product/";
            // line 30
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
        // line 33
        echo "        </tbody>
    </table>

    </div>
    </body>

";
        
        $__internal_4acc1d44a5335a9b9f8ac34637bb67c07cbcc5c128655eecc271fa5ef7ce33ae->leave($__internal_4acc1d44a5335a9b9f8ac34637bb67c07cbcc5c128655eecc271fa5ef7ce33ae_prof);

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
        return array (  100 => 33,  89 => 30,  85 => 29,  82 => 28,  78 => 27,  63 => 14,  52 => 12,  48 => 11,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <body>*/
/*     <h1>Main page</h1>*/
/* */
/*     <div class="categories" style="display: inline-block;">*/
/*         <p>IT languages :</p>*/
/*         <ul>*/
/*             {% for category in categories %}*/
/*                 <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/*     <p>Developers :</p>*/
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
/*     </body>*/
/* */
/* {% endblock %}*/
