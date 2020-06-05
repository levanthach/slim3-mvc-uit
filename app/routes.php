<?php
// Routes

$app->get('/', 'App\Controller\HomeController:homePage')
    ->setName('homepage');

$app->get('/about', 'App\Controller\HomeController:about')
    ->setName('about');

$app->get('/contact', 'App\Controller\HomeController:contact')
    ->setName('contact');