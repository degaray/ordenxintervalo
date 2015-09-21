<?php

/* base.html.twig */
class __TwigTemplate_9faccd09c74847749008018f178aabfcc2d204d5c27dd50a845093bcf13c2e22 extends Twig_Template
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
        $__internal_c11d0fd07d3c202874a57a073fe09056e7a0f6cfd00511f0954c89a4339dd478 = $this->env->getExtension("native_profiler");
        $__internal_c11d0fd07d3c202874a57a073fe09056e7a0f6cfd00511f0954c89a4339dd478->enter($__internal_c11d0fd07d3c202874a57a073fe09056e7a0f6cfd00511f0954c89a4339dd478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c11d0fd07d3c202874a57a073fe09056e7a0f6cfd00511f0954c89a4339dd478->leave($__internal_c11d0fd07d3c202874a57a073fe09056e7a0f6cfd00511f0954c89a4339dd478_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca6980d850ffeb8cba05329a585896708d94d27decf5f49160efbdf4b0d61a8 = $this->env->getExtension("native_profiler");
        $__internal_9ca6980d850ffeb8cba05329a585896708d94d27decf5f49160efbdf4b0d61a8->enter($__internal_9ca6980d850ffeb8cba05329a585896708d94d27decf5f49160efbdf4b0d61a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ca6980d850ffeb8cba05329a585896708d94d27decf5f49160efbdf4b0d61a8->leave($__internal_9ca6980d850ffeb8cba05329a585896708d94d27decf5f49160efbdf4b0d61a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f1d7a94c9fb9e7069684e7de50afd0ef9f3937cbc31cdbfd5f5e58b4c01e38e = $this->env->getExtension("native_profiler");
        $__internal_8f1d7a94c9fb9e7069684e7de50afd0ef9f3937cbc31cdbfd5f5e58b4c01e38e->enter($__internal_8f1d7a94c9fb9e7069684e7de50afd0ef9f3937cbc31cdbfd5f5e58b4c01e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f1d7a94c9fb9e7069684e7de50afd0ef9f3937cbc31cdbfd5f5e58b4c01e38e->leave($__internal_8f1d7a94c9fb9e7069684e7de50afd0ef9f3937cbc31cdbfd5f5e58b4c01e38e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_006f99890b9ab29449c03bba229e0c059f8aa4cea7360b845d68f697da752a72 = $this->env->getExtension("native_profiler");
        $__internal_006f99890b9ab29449c03bba229e0c059f8aa4cea7360b845d68f697da752a72->enter($__internal_006f99890b9ab29449c03bba229e0c059f8aa4cea7360b845d68f697da752a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_006f99890b9ab29449c03bba229e0c059f8aa4cea7360b845d68f697da752a72->leave($__internal_006f99890b9ab29449c03bba229e0c059f8aa4cea7360b845d68f697da752a72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_061bf80bc754f492f3353651e42e99ee264e3c8e24bf66df8ff9e6f96ce9ecd0 = $this->env->getExtension("native_profiler");
        $__internal_061bf80bc754f492f3353651e42e99ee264e3c8e24bf66df8ff9e6f96ce9ecd0->enter($__internal_061bf80bc754f492f3353651e42e99ee264e3c8e24bf66df8ff9e6f96ce9ecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_061bf80bc754f492f3353651e42e99ee264e3c8e24bf66df8ff9e6f96ce9ecd0->leave($__internal_061bf80bc754f492f3353651e42e99ee264e3c8e24bf66df8ff9e6f96ce9ecd0_prof);

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
