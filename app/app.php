<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramChecker.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $my_anagram = new AnagramChecker();
        $anagram_array = $my_anagram->checkAnagram($_GET['word'], $_GET['blob']);
        return $app['twig']->render('results.html.twig', array('result' => $anagram_array));

    });
/*
    $app->get("/test", function() use ($app) {

        $my_anagram = new AnagramChecker();
        $my_anagram->checkAnagram("taco", "ocat");
        return $app['twig']->render('form.html.twig');
    });

*/

        return $app;


 ?>
