<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85a7046cfd35c3032842c2944c5ac2e20b38143a9e93ede6824c3bc1a5f49ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c89f6ed0b067967a02ee5b6223b1048658fb0ba4babea178cda93e5bd303b338 = $this->env->getExtension("native_profiler");
        $__internal_c89f6ed0b067967a02ee5b6223b1048658fb0ba4babea178cda93e5bd303b338->enter($__internal_c89f6ed0b067967a02ee5b6223b1048658fb0ba4babea178cda93e5bd303b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89f6ed0b067967a02ee5b6223b1048658fb0ba4babea178cda93e5bd303b338->leave($__internal_c89f6ed0b067967a02ee5b6223b1048658fb0ba4babea178cda93e5bd303b338_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b9042cc36dd94cb85cdca78f859b77109577e8517f669221e61783d0097623b = $this->env->getExtension("native_profiler");
        $__internal_5b9042cc36dd94cb85cdca78f859b77109577e8517f669221e61783d0097623b->enter($__internal_5b9042cc36dd94cb85cdca78f859b77109577e8517f669221e61783d0097623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b9042cc36dd94cb85cdca78f859b77109577e8517f669221e61783d0097623b->leave($__internal_5b9042cc36dd94cb85cdca78f859b77109577e8517f669221e61783d0097623b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3422d5a0754eee2becf27c9d0af048c6ebf1ad1bb1be8183906ad076337fd81 = $this->env->getExtension("native_profiler");
        $__internal_a3422d5a0754eee2becf27c9d0af048c6ebf1ad1bb1be8183906ad076337fd81->enter($__internal_a3422d5a0754eee2becf27c9d0af048c6ebf1ad1bb1be8183906ad076337fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3422d5a0754eee2becf27c9d0af048c6ebf1ad1bb1be8183906ad076337fd81->leave($__internal_a3422d5a0754eee2becf27c9d0af048c6ebf1ad1bb1be8183906ad076337fd81_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0910bb4127ab222964c71c6b72ce73d3555c2f3aa29780bc431b44a9d5bb11c1 = $this->env->getExtension("native_profiler");
        $__internal_0910bb4127ab222964c71c6b72ce73d3555c2f3aa29780bc431b44a9d5bb11c1->enter($__internal_0910bb4127ab222964c71c6b72ce73d3555c2f3aa29780bc431b44a9d5bb11c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0910bb4127ab222964c71c6b72ce73d3555c2f3aa29780bc431b44a9d5bb11c1->leave($__internal_0910bb4127ab222964c71c6b72ce73d3555c2f3aa29780bc431b44a9d5bb11c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
