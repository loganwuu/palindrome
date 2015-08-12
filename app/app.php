<?php
	
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/Palindrome.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home.html.twig');
	});
	
	$app->get("/view_translate", function() use ($app){
		$palindrome = new Palindrome;
		$answer = $palindrome->isPalindrome($_GET['phrase']);
		return $app['twig']->render('result.html.twig', array('result' => $answer));
	
		});
		
	return $app;
	
?>