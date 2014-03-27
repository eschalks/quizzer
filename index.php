<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/db.php';
$app = new \Slim\Slim($config);

// Set up twig view
$view = $app->view();
$view->parserOptions = array(
    'debug' => $app->config('debug'),
    'cache' => dirname(__FILE__) . $app->config('templates.cache')
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get("/", function () use ($app, $db) {
    $coll = $db->quizzes;
    $quizzes = array();
    $cursor = $coll->find();
    foreach ($cursor as $doc) {
        $quizzes[] = $doc;
    }
    $app->render('index.twig', array('quizzes' => $quizzes));
})->name('index');

$app->get('/create_quiz', function() use ($app) {
    $app->render('create_quiz.twig');
})->name('create_quiz');

$app->get('/play_quiz/:id', function($id) use ($app, $db) {

    $coll = $db->quizzes;
    $doc = $coll->findOne(array('_id' => new MongoId($id)));

    $app->render('play_quiz.twig', array('quiz' => $doc, 'json' => json_encode($doc)));
})->name('play_quiz');

$app->get('/results', function() use ($app, $db) {

})->name('results');

$app->post('/quiz', function() use ($app, $db) {
    $coll = $db->quizzes;
    $doc = array(
        'name' => $app->request->post('name'),
        'questions' => $app->request->post('questions')
    );
    $coll->insert($doc, array('fsync' => \TRUE));

    $app->redirect($app->urlFor('quiz', array('id' => $doc['_id']->{'$id'})));
})->name('quiz_post');

$app->run();