<?php
// Routes

$app->get('/', 'App\Controller\HomeController:homePage')
    ->setName('homepage');

$app->get('/about', 'App\Controller\HomeController:about')
    ->setName('about');

$app->get('/contact', 'App\Controller\HomeController:contact')
    ->setName('contact');

$app->get('/exchange', 'App\Controller\HomeController:exchange')
->setName('exchange');


$app->get('/services', 'App\Controller\HomeController:services')
->setName('services');

$app->get('/news', 'App\Controller\HomeController:news')
->setName('news');