<?php

/* base.html.twig */
class __TwigTemplate_eb308d3d751320860aa3cf59032e7086c31e8f84cc39d81c4f7a2004fdec1182 extends Twig_Template
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
        $__internal_eb905ea831673e20fd50b6423311d503b844d76cc1f3dc4b9d3f2104a6f76905 = $this->env->getExtension("native_profiler");
        $__internal_eb905ea831673e20fd50b6423311d503b844d76cc1f3dc4b9d3f2104a6f76905->enter($__internal_eb905ea831673e20fd50b6423311d503b844d76cc1f3dc4b9d3f2104a6f76905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_eb905ea831673e20fd50b6423311d503b844d76cc1f3dc4b9d3f2104a6f76905->leave($__internal_eb905ea831673e20fd50b6423311d503b844d76cc1f3dc4b9d3f2104a6f76905_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecdba654031da3dbcca9c1161a2851beaea7e240fe38d0ac64126a8d39f55d9f = $this->env->getExtension("native_profiler");
        $__internal_ecdba654031da3dbcca9c1161a2851beaea7e240fe38d0ac64126a8d39f55d9f->enter($__internal_ecdba654031da3dbcca9c1161a2851beaea7e240fe38d0ac64126a8d39f55d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ecdba654031da3dbcca9c1161a2851beaea7e240fe38d0ac64126a8d39f55d9f->leave($__internal_ecdba654031da3dbcca9c1161a2851beaea7e240fe38d0ac64126a8d39f55d9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4752d5cca3e3bbfaa0be875b55a89687c624478767bab6343a69a8ddc04b16eb = $this->env->getExtension("native_profiler");
        $__internal_4752d5cca3e3bbfaa0be875b55a89687c624478767bab6343a69a8ddc04b16eb->enter($__internal_4752d5cca3e3bbfaa0be875b55a89687c624478767bab6343a69a8ddc04b16eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4752d5cca3e3bbfaa0be875b55a89687c624478767bab6343a69a8ddc04b16eb->leave($__internal_4752d5cca3e3bbfaa0be875b55a89687c624478767bab6343a69a8ddc04b16eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_414f817725fab8ab3ea4a3ecae90fdb997bc7518643e14ef6c46f92bd525af30 = $this->env->getExtension("native_profiler");
        $__internal_414f817725fab8ab3ea4a3ecae90fdb997bc7518643e14ef6c46f92bd525af30->enter($__internal_414f817725fab8ab3ea4a3ecae90fdb997bc7518643e14ef6c46f92bd525af30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_414f817725fab8ab3ea4a3ecae90fdb997bc7518643e14ef6c46f92bd525af30->leave($__internal_414f817725fab8ab3ea4a3ecae90fdb997bc7518643e14ef6c46f92bd525af30_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ccd9dfb4a67685a40d34e74c0465005427d71f72c172aa947d9a02e2ea2c892 = $this->env->getExtension("native_profiler");
        $__internal_4ccd9dfb4a67685a40d34e74c0465005427d71f72c172aa947d9a02e2ea2c892->enter($__internal_4ccd9dfb4a67685a40d34e74c0465005427d71f72c172aa947d9a02e2ea2c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4ccd9dfb4a67685a40d34e74c0465005427d71f72c172aa947d9a02e2ea2c892->leave($__internal_4ccd9dfb4a67685a40d34e74c0465005427d71f72c172aa947d9a02e2ea2c892_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
