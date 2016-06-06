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
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff123c852c84941f291044645a979fffb7a7b649604049c15804f408c276b08f = $this->env->getExtension("native_profiler");
        $__internal_ff123c852c84941f291044645a979fffb7a7b649604049c15804f408c276b08f->enter($__internal_ff123c852c84941f291044645a979fffb7a7b649604049c15804f408c276b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff123c852c84941f291044645a979fffb7a7b649604049c15804f408c276b08f->leave($__internal_ff123c852c84941f291044645a979fffb7a7b649604049c15804f408c276b08f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc8739a2b8aedb3bfc7de2fcf23ba1adb1a98c7b09b99188a7068257d64bd92 = $this->env->getExtension("native_profiler");
        $__internal_8dc8739a2b8aedb3bfc7de2fcf23ba1adb1a98c7b09b99188a7068257d64bd92->enter($__internal_8dc8739a2b8aedb3bfc7de2fcf23ba1adb1a98c7b09b99188a7068257d64bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <head>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    <h1>Main page</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
        <p>IT languages :</p>
        <ul>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
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
        // line 19
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"/product/";
            // line 35
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
        // line 38
        echo "        </tbody>
    </table>

    </div>
    </body>

";
        
        $__internal_8dc8739a2b8aedb3bfc7de2fcf23ba1adb1a98c7b09b99188a7068257d64bd92->leave($__internal_8dc8739a2b8aedb3bfc7de2fcf23ba1adb1a98c7b09b99188a7068257d64bd92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b5fc2f7dd41960ae255656b9055675f177047cba1b2f6219c28c10df7506581 = $this->env->getExtension("native_profiler");
        $__internal_4b5fc2f7dd41960ae255656b9055675f177047cba1b2f6219c28c10df7506581->enter($__internal_4b5fc2f7dd41960ae255656b9055675f177047cba1b2f6219c28c10df7506581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_4b5fc2f7dd41960ae255656b9055675f177047cba1b2f6219c28c10df7506581->leave($__internal_4b5fc2f7dd41960ae255656b9055675f177047cba1b2f6219c28c10df7506581_prof);

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
        return array (  126 => 7,  120 => 6,  107 => 38,  96 => 35,  92 => 34,  89 => 33,  85 => 32,  70 => 19,  59 => 17,  55 => 16,  46 => 9,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
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
