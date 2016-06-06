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
        $__internal_13b7ddb8483e8edf9a7164f179bca01af7843a604370234b9afce2b8ab2689d8 = $this->env->getExtension("native_profiler");
        $__internal_13b7ddb8483e8edf9a7164f179bca01af7843a604370234b9afce2b8ab2689d8->enter($__internal_13b7ddb8483e8edf9a7164f179bca01af7843a604370234b9afce2b8ab2689d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b7ddb8483e8edf9a7164f179bca01af7843a604370234b9afce2b8ab2689d8->leave($__internal_13b7ddb8483e8edf9a7164f179bca01af7843a604370234b9afce2b8ab2689d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_22cecfcf998182f41f121c581de252e9607cfcfee8ce882472de4b256d77571b = $this->env->getExtension("native_profiler");
        $__internal_22cecfcf998182f41f121c581de252e9607cfcfee8ce882472de4b256d77571b->enter($__internal_22cecfcf998182f41f121c581de252e9607cfcfee8ce882472de4b256d77571b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <body>
    <h1>IT languages</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
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
    </body>


    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Language ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h3>

<p>Developers for this language: </p>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "                <tr>
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

";
        
        $__internal_22cecfcf998182f41f121c581de252e9607cfcfee8ce882472de4b256d77571b->leave($__internal_22cecfcf998182f41f121c581de252e9607cfcfee8ce882472de4b256d77571b_prof);

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
        return array (  100 => 33,  89 => 30,  86 => 29,  82 => 28,  71 => 20,  62 => 13,  51 => 11,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <body>*/
/*     <h1>IT languages</h1>*/
/* */
/*     <div class="categories" style="display: inline-block;">*/
/*         <ul>*/
/*             {% for category in categories %}*/
/*                 <li><a href="/category/{{ category.name }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/*     </body>*/
/* */
/* */
/*     <div class="products" style="display: inline-block; margin-left: 50px">*/
/* */
/*         <h3>Language {{ category.name }}</h3>*/
/* */
/* <p>Developers for this language: </p>*/
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
