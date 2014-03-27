<?php

$config = array();

/*
 * General Settings
 */

$config['debug'] = true;

/*
 * Template Settings
 */
$config['templates.path'] = './templates';
$config['view'] = new \Slim\Views\Twig();
$config['templates.cache'] = '/cache';

/*
 * Database Settings
 */
$config['db.server'] = 'mongodb://localhost:27017';
$config['db.name'] = 'quizzer_dev';