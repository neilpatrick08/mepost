<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86b9c1eb13d5d26b36fc853d0a9c4a9ab1f70f0f707408bef0cba12f2ccf82b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ca10632896131a200156317a639d7576c23db2e88b66bb20eeae1e934be20f = $this->env->getExtension("native_profiler");
        $__internal_c2ca10632896131a200156317a639d7576c23db2e88b66bb20eeae1e934be20f->enter($__internal_c2ca10632896131a200156317a639d7576c23db2e88b66bb20eeae1e934be20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ca10632896131a200156317a639d7576c23db2e88b66bb20eeae1e934be20f->leave($__internal_c2ca10632896131a200156317a639d7576c23db2e88b66bb20eeae1e934be20f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75b92f6099a8452b78f192614272ddf5b9aac1274e186bcb7837c9986b8d8e68 = $this->env->getExtension("native_profiler");
        $__internal_75b92f6099a8452b78f192614272ddf5b9aac1274e186bcb7837c9986b8d8e68->enter($__internal_75b92f6099a8452b78f192614272ddf5b9aac1274e186bcb7837c9986b8d8e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75b92f6099a8452b78f192614272ddf5b9aac1274e186bcb7837c9986b8d8e68->leave($__internal_75b92f6099a8452b78f192614272ddf5b9aac1274e186bcb7837c9986b8d8e68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09a8336879a7c86908d5852d11201e9811457c8df61418ab3d895df5cbafe88f = $this->env->getExtension("native_profiler");
        $__internal_09a8336879a7c86908d5852d11201e9811457c8df61418ab3d895df5cbafe88f->enter($__internal_09a8336879a7c86908d5852d11201e9811457c8df61418ab3d895df5cbafe88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09a8336879a7c86908d5852d11201e9811457c8df61418ab3d895df5cbafe88f->leave($__internal_09a8336879a7c86908d5852d11201e9811457c8df61418ab3d895df5cbafe88f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_664624c6427cd3b7524c7b53b3cd045f74037a1d1d6eb8789e827733d7240bcd = $this->env->getExtension("native_profiler");
        $__internal_664624c6427cd3b7524c7b53b3cd045f74037a1d1d6eb8789e827733d7240bcd->enter($__internal_664624c6427cd3b7524c7b53b3cd045f74037a1d1d6eb8789e827733d7240bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_664624c6427cd3b7524c7b53b3cd045f74037a1d1d6eb8789e827733d7240bcd->leave($__internal_664624c6427cd3b7524c7b53b3cd045f74037a1d1d6eb8789e827733d7240bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
