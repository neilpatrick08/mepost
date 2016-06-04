<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77b01de4a8369a11b672009fd72247cc0867fe3ee7e228a13f7fb03699843d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ae93f166de29ee0de9edae4753cc314dada361906fd49ff01b8d56322c3369a = $this->env->getExtension("native_profiler");
        $__internal_0ae93f166de29ee0de9edae4753cc314dada361906fd49ff01b8d56322c3369a->enter($__internal_0ae93f166de29ee0de9edae4753cc314dada361906fd49ff01b8d56322c3369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ae93f166de29ee0de9edae4753cc314dada361906fd49ff01b8d56322c3369a->leave($__internal_0ae93f166de29ee0de9edae4753cc314dada361906fd49ff01b8d56322c3369a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31627221df9f08b312ad14cbc8e67c5922946c8d7884c930ddc6bbb41cc59379 = $this->env->getExtension("native_profiler");
        $__internal_31627221df9f08b312ad14cbc8e67c5922946c8d7884c930ddc6bbb41cc59379->enter($__internal_31627221df9f08b312ad14cbc8e67c5922946c8d7884c930ddc6bbb41cc59379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31627221df9f08b312ad14cbc8e67c5922946c8d7884c930ddc6bbb41cc59379->leave($__internal_31627221df9f08b312ad14cbc8e67c5922946c8d7884c930ddc6bbb41cc59379_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7eea9f4b26ab1ec9a9c3f2ee3fdb7afcf8453d2a8512ba0860b5f6f80e8c1149 = $this->env->getExtension("native_profiler");
        $__internal_7eea9f4b26ab1ec9a9c3f2ee3fdb7afcf8453d2a8512ba0860b5f6f80e8c1149->enter($__internal_7eea9f4b26ab1ec9a9c3f2ee3fdb7afcf8453d2a8512ba0860b5f6f80e8c1149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7eea9f4b26ab1ec9a9c3f2ee3fdb7afcf8453d2a8512ba0860b5f6f80e8c1149->leave($__internal_7eea9f4b26ab1ec9a9c3f2ee3fdb7afcf8453d2a8512ba0860b5f6f80e8c1149_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74d3483876e3540cd0b711933e48fbbbd2b3bc5f813e0c121725a78a9289ff97 = $this->env->getExtension("native_profiler");
        $__internal_74d3483876e3540cd0b711933e48fbbbd2b3bc5f813e0c121725a78a9289ff97->enter($__internal_74d3483876e3540cd0b711933e48fbbbd2b3bc5f813e0c121725a78a9289ff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74d3483876e3540cd0b711933e48fbbbd2b3bc5f813e0c121725a78a9289ff97->leave($__internal_74d3483876e3540cd0b711933e48fbbbd2b3bc5f813e0c121725a78a9289ff97_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
