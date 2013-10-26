<?php

namespace Spolischook;

require_once '../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Spolischook\Mebel\ComputerTable;

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
$host = $request->headers->get('host');

$table = new ComputerTable('Yellow');

$response = new Response();
$response->setContent($table);
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

$response->send();
