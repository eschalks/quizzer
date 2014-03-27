 var app = angular.module('quizzer', []).config(function($interpolateProvider) {
    // Use {[ ]} instead of {{ }} to prevent conflicts with Twig
    $interpolateProvider.startSymbol("{[").endSymbol("]}");
 });

app.controller('EditQuestionsCtrl', function($scope) {
    $scope.questions = [];

    $scope.addQuestion = function() {
        var q = {};
        q.type = 'open';
        $scope.questions.push(q);
    };

    $scope.isQuestionValid = function(q) {
        if (!q.question) return false;
        if (!q.answer) return false;
        return true;
    }

    $scope.isFormValid = function() {

        if ($scope.questions.length == 0)
            return false;

        // All questions need to be valid for the form to be valid
        var validForm = true;
        angular.forEach($scope.questions, function(q, key) {
            if (!$scope.isQuestionValid(q)) {
                validForm = false;
            }
        });

        return validForm;
    }
});
