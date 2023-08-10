<?php

use App\Classes\Template;
use App\Classes\Parameters;

$parameters = new Parameters;
dump($parameters->explodeParameters());

$template = new Template;
$twig = $template->init();

/**
 * Chamando o controller digitado na url
 * http://localhost:8888/controller
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);


/**
 * Chamando o metodo digitado na url
 *  http://localhost:8888/controller/metodo
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);

/**
 * Chamando o controller atraves da classe controller e da classe method
 */
$controller->$method();