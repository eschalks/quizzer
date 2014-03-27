<?php

/* create_quiz.twig */
class __TwigTemplate_a4250de7d5b69b7fe129762a4c0f1a9b50bec926dec8355dda0d516e5d3d4a72 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/js/angular.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("/js/quiz.js"), "html", null, true);
        echo "\"></script>
<div class=\"container\" ng-app=\"quizzer\">
    <div class=\"row\"  ng-controller=\"EditQuestionsCtrl\" >
        <div class=\"col-md-12\">
            <h1>New Quiz</h1>
            <form role=\"form\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("quiz_post"), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <label for=\"name\">Quiz Name</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <strong>Questions</strong>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"panel-group\" id=\"questions\">
                                    <div class=\"panel\" ng-class=\"{'panel-default': isQuestionValid(q), 'panel-danger': !isQuestionValid(q)}\" ng-repeat=\"q in questions\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\"data-parent=\"#questions\" href=\"#question-panel{[\$index]}\">
                                                    <span ng-if=\"!q.question\" class=\"\"><em>No Question</em></span>
                                                    {[ q.question ]}
                                                </a>
                                            </h4>
                                        </div>

                                        <div id=\"question-panel{[\$index]}\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">
                                                    <div class=\"form-group\">
                                                        <label>Question Type</label>
                                                        <div class=\"radio\">
                                                            <input type=\"radio\" id=\"questionType{[\$index]}\" name=\"questions[{[\$index]}][type]\" value=\"open\" ng-model=\"q.type\"> Open
                                                        </div>
                                                        <div class=\"radio\">
                                                            <input type=\"radio\" id=\"questionType{[\$index]}\" name=\"questions[{[\$index]}][type]\" value=\"multiple\" ng-model=\"q.type\"> Multiple Choice
                                                        </div>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"questionInput{[\$index]}\">Question </label><br>
                                                        <input id=\"questionInput{[\$index]}\" ng-model=\"q.question\" name=\"questions[{[\$index]}][question]\">
                                                    </div>
                                                    <div class=\"form-group\" ng-if=\"q.type == 'open'\">
                                                        <label for=\"questionAnswer{[\$index]}\">Answer</label><br>
                                                        <input id=\"questionAnswer{[\$index]}\" ng-model=\"q.answer\" name=\"questions[{[\$index]}][answer]\">
                                                    </div>
                                                    <div class=\"checkbox\" ng-if=\"q.type == 'multiple'\">
                                                        <label>
                                                            <input type=\"checkbox\" name=\"questions[{[\$index]}][randomAnswers]\"> Random Answer Order
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class=\"panel-footer\">
                                <button class=\"btn btn-success\" type=\"button\" ng-click=\"addQuestion()\">
                                    <i class=\"glyphicon glyphicon-plus\"></i> Add
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                <hr>
                <button type=\"submit\" class=\"btn btn-default\" ng-disabled=\"!isFormValid()\">Create</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "create_quiz.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  36 => 5,  31 => 4,  28 => 3,);
    }
}
