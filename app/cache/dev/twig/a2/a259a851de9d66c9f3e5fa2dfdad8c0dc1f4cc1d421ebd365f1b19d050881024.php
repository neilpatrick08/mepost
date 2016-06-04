<?php

/* index/index.html.twig */
class __TwigTemplate_faefcac1e3846673a6c5cdd2443eadfbc58ce443ce0e19ecd8c0af8d70241c1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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
        $__internal_18d87384d2bcd596f152b68175ccdf6ff3b6ad90f068e8a17d22e1e148534712 = $this->env->getExtension("native_profiler");
        $__internal_18d87384d2bcd596f152b68175ccdf6ff3b6ad90f068e8a17d22e1e148534712->enter($__internal_18d87384d2bcd596f152b68175ccdf6ff3b6ad90f068e8a17d22e1e148534712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d87384d2bcd596f152b68175ccdf6ff3b6ad90f068e8a17d22e1e148534712->leave($__internal_18d87384d2bcd596f152b68175ccdf6ff3b6ad90f068e8a17d22e1e148534712_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_419c966235fb736fb2f903085c3562ff981b6d19f9eaa57cbf8de462644750ee = $this->env->getExtension("native_profiler");
        $__internal_419c966235fb736fb2f903085c3562ff981b6d19f9eaa57cbf8de462644750ee->enter($__internal_419c966235fb736fb2f903085c3562ff981b6d19f9eaa57cbf8de462644750ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    hello
";
        
        $__internal_419c966235fb736fb2f903085c3562ff981b6d19f9eaa57cbf8de462644750ee->leave($__internal_419c966235fb736fb2f903085c3562ff981b6d19f9eaa57cbf8de462644750ee_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     hello*/
/* {% endblock %}*/
