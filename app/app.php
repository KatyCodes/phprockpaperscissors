<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/game', function() use ($app) {
        $player1 = $_POST['player1_choice'];
        $player2 = $_POST['player2_choice'];
        $rock_paper_scissors = new RockPaperScissors;
        $result = $rock_paper_scissors->playGame($player1, $player2);
        return $result;
    });

    return $app;
  ?>
