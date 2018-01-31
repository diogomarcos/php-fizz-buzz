<?php

use App\Controller\Number;
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/* $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
}); */

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/number', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Números '/' route");

    $number = 100;
    $args['numbers'] = array();
    $args['multipleOf3'] = 0;
    $args['multipleOf5'] = 0;
    $args['multipleOf3And5'] = 0;
    $args['notMultiple'] = 0;

    for ($i = 1; $i <= $number; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            $args['numbers'][$i] = 'FizzBuzz';
            $args['multipleOf3And5']++;
        } elseif ($i % 3 === 0) {
            $args['numbers'][$i] = 'Fizz';
            $args['multipleOf3']++;
        } elseif($i % 5 === 0) {
            $args['numbers'][$i] =  'Buzz';
            $args['multipleOf5']++;
        } else {
            $args['numbers'][$i] =  $i;
            $args['notMultiple']++;
        }
    }

    // Render index view
    return $this->renderer->render($response, 'number.phtml', $args);
});
