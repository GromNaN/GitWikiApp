<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

$vendor = __DIR__.'/../vendor_full';

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                        => $vendor.'/symfony/src',
    'Sensio'                         => __DIR__.'/../src',
    'Git'                            => __DIR__.'/../src',
    'Doctrine\\Common\\DataFixtures' => $vendor.'/doctrine-data-fixtures/lib',
    'Doctrine\\Common'               => $vendor.'/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations'     => $vendor.'/doctrine-migrations/lib',
    'Doctrine\\MongoDB'              => $vendor.'/doctrine-mongodb/lib',
    'Doctrine\\ODM\\MongoDB'         => $vendor.'/doctrine-mongodb-odm/lib',
    'Doctrine\\DBAL'                 => $vendor.'/doctrine-dbal/lib',
    'Doctrine'                       => $vendor.'/doctrine/lib',
    'Zend'                           => $vendor.'/zend/library',
));
$loader->registerPrefixes(array(
    'Twig_Extensions_' => $vendor.'/twig-extensions/lib',
    'Twig_'            => $vendor.'/twig/lib',
    'Swift_'           => $vendor.'/swiftmailer/lib/classes',
));
$loader->register();
