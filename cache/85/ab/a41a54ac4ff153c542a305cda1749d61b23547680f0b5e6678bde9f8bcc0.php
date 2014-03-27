<?php

/* base.twig */
class __TwigTemplate_85aba41a54ac4ff153c542a305cda1749d61b23547680f0b5e6678bde9f8bcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("css/bootstrap.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("css/quizzer.css"), "html", null, true);
        echo "\" >
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <title>Quizzer</title>
</head>
<body>

<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#qz-navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("index"), "html", null, true);
        echo "\">Quizzer</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"qz-navbar\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("create_quiz"), "html", null, true);
        echo "\">Create Quiz</a></li>
            </ul>
        </div>
    </div>
</nav>

";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
</body>
</html>";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  77 => 34,  75 => 33,  66 => 27,  58 => 22,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  20 => 1,);
    }
}
