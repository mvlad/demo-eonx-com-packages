<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    EonX\EasyRandom\Bridge\Symfony\EasyRandomSymfonyBundle::class => ['all' => true],
    EonX\EasyActivity\Bridge\Symfony\EasyActivitySymfonyBundle::class => ['all' => true],
    EonX\EasyEventDispatcher\Bridge\Symfony\EasyEventDispatcherSymfonyBundle::class => ['all' => true],
    EonX\EasyDoctrine\Bridge\Symfony\EasyDoctrineSymfonyBundle::class => ['all' => true],
];
