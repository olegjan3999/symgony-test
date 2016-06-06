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
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94626bd4c953ff46a04604b373c39170814daab08e60779ae6ec0debe9af84fa = $this->env->getExtension("native_profiler");
        $__internal_94626bd4c953ff46a04604b373c39170814daab08e60779ae6ec0debe9af84fa->enter($__internal_94626bd4c953ff46a04604b373c39170814daab08e60779ae6ec0debe9af84fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94626bd4c953ff46a04604b373c39170814daab08e60779ae6ec0debe9af84fa->leave($__internal_94626bd4c953ff46a04604b373c39170814daab08e60779ae6ec0debe9af84fa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebba88a04964a81ccea786fd096531fbe5e0831f98251a4790d5b0f9476b5d4c = $this->env->getExtension("native_profiler");
        $__internal_ebba88a04964a81ccea786fd096531fbe5e0831f98251a4790d5b0f9476b5d4c->enter($__internal_ebba88a04964a81ccea786fd096531fbe5e0831f98251a4790d5b0f9476b5d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <head>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    <h1>IT languages</h1>

    <div class=\"categories\" style=\"display: inline-block;\">
        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
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
        // line 18
        echo "        </ul>
    </div>
    </body>


    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Language ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h3>

<p>Developers for this language: </p>
    <table>
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "                <tr>
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

";
        
        $__internal_ebba88a04964a81ccea786fd096531fbe5e0831f98251a4790d5b0f9476b5d4c->leave($__internal_ebba88a04964a81ccea786fd096531fbe5e0831f98251a4790d5b0f9476b5d4c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4548bd51f0dcfb6c0db8085d2903034644e37e5d15e71282890da6b684e6102 = $this->env->getExtension("native_profiler");
        $__internal_a4548bd51f0dcfb6c0db8085d2903034644e37e5d15e71282890da6b684e6102->enter($__internal_a4548bd51f0dcfb6c0db8085d2903034644e37e5d15e71282890da6b684e6102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_a4548bd51f0dcfb6c0db8085d2903034644e37e5d15e71282890da6b684e6102->leave($__internal_a4548bd51f0dcfb6c0db8085d2903034644e37e5d15e71282890da6b684e6102_prof);

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
        return array (  125 => 7,  119 => 6,  107 => 38,  96 => 35,  93 => 34,  89 => 33,  78 => 25,  69 => 18,  58 => 16,  54 => 15,  46 => 9,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
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
