<?php

/* HomeIndexBundle:Default:index.html.twig */
class __TwigTemplate_e7d5c5d6a9c7a23a8462fddbc7a7d5b3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "HomeIndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
