<?php

/* play_quiz.twig */
class __TwigTemplate_7b8442bf7e8b57242fa4e9b13904f9b4f9d2759de20f40076fc6e5556d3e0eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<script type=\"text/javascript\">
    window.quiz_json = ";
        // line 6
        echo (isset($context["json"]) ? $context["json"] : null);
        echo ";
</script>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "name"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <form method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("results"), "html", null, true);
        echo "\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "questions"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "            <div class=\"row question\">
                <div class=\"col-md-12\">
                    <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "question"), "html", null, true);
            echo "</h4>
                    ";
            // line 21
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type") == "open")) {
                // line 22
                echo "                        <input name=\"answer";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), "html", null, true);
                echo "\">
                    ";
            }
            // line 24
            echo "                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </form>


</div>

";
    }

    public function getTemplateName()
    {
        return "play_quiz.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  88 => 24,  82 => 22,  80 => 21,  76 => 20,  72 => 18,  55 => 17,  51 => 16,  44 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
