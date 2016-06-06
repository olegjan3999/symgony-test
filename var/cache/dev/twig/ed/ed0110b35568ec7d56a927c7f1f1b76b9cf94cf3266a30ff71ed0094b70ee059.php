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
        $__internal_8bef5424cc81a79890e668eaed87a015ae73d22b63d13502cbde4ac53f53a299 = $this->env->getExtension("native_profiler");
        $__internal_8bef5424cc81a79890e668eaed87a015ae73d22b63d13502cbde4ac53f53a299->enter($__internal_8bef5424cc81a79890e668eaed87a015ae73d22b63d13502cbde4ac53f53a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bef5424cc81a79890e668eaed87a015ae73d22b63d13502cbde4ac53f53a299->leave($__internal_8bef5424cc81a79890e668eaed87a015ae73d22b63d13502cbde4ac53f53a299_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6f679fbf594a147469d55958794b9a81f09b13fee850a1d42c364be9664cb7d = $this->env->getExtension("native_profiler");
        $__internal_f6f679fbf594a147469d55958794b9a81f09b13fee850a1d42c364be9664cb7d->enter($__internal_f6f679fbf594a147469d55958794b9a81f09b13fee850a1d42c364be9664cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <body>
    <h1>Developers</h1>

    <div class=\"products\" style=\"display: inline-block; margin-left: 50px\">

        <h3>Developer # ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</h3>

        <p>Developer name : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</p>

        <div class=\"categories\" style=\"display: inline-block;\">
            <p>Languages for this developer</p>
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
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
        // line 20
        echo "            </ul>
        </div>

    </div>
    </body>

";
        
        $__internal_f6f679fbf594a147469d55958794b9a81f09b13fee850a1d42c364be9664cb7d->leave($__internal_f6f679fbf594a147469d55958794b9a81f09b13fee850a1d42c364be9664cb7d_prof);

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
        return array (  75 => 20,  64 => 18,  60 => 17,  52 => 12,  47 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
