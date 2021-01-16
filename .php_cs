<?php

$finder = PhpCsFixer\Finder::create()
    ->in('src');

$config = new PhpCsFixer\Config('faker');

return $config
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
    ]);
