<?php

require_once __DIR__ . "/vendor/autoload.php";

use iMaSzExample\ResponseClass\JsonResponse;

$student = array(
    'name' => 'John Doe',
    'course' => 'Software Engineering',
    'level' => '200',
    'collections' => ['books' => 'Intro to UML', 'music' => 'rap']
);

header('Content-Type: application/json');

new JsonResponse('ok', '', $student);
