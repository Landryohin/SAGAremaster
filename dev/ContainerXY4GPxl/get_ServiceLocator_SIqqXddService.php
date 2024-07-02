<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SIqqXddService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sIqqXdd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sIqqXdd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'AffectationsRepository' => ['privates', 'App\\Repository\\AffectationsRepository', 'getAffectationsRepositoryService', true],
            'directionsRepository' => ['privates', 'App\\Repository\\DirectionsRepository', 'getDirectionsRepositoryService', true],
            'divisionsRepository' => ['privates', 'App\\Repository\\DivisionsRepository', 'getDivisionsRepositoryService', true],
            'documentsRepository' => ['privates', 'App\\Repository\\DocumentsRepository', 'getDocumentsRepositoryService', true],
            'postesRepository' => ['privates', 'App\\Repository\\PostesRepository', 'getPostesRepositoryService', true],
            'secretariatsController' => ['services', 'App\\Controller\\SecretariatsController', 'getSecretariatsControllerService', true],
            'secretariatsRepository' => ['privates', 'App\\Repository\\SecretariatsRepository', 'getSecretariatsRepositoryService', true],
            'servicesRepository' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'AffectationsRepository' => 'App\\Repository\\AffectationsRepository',
            'directionsRepository' => 'App\\Repository\\DirectionsRepository',
            'divisionsRepository' => 'App\\Repository\\DivisionsRepository',
            'documentsRepository' => 'App\\Repository\\DocumentsRepository',
            'postesRepository' => 'App\\Repository\\PostesRepository',
            'secretariatsController' => 'App\\Controller\\SecretariatsController',
            'secretariatsRepository' => 'App\\Repository\\SecretariatsRepository',
            'servicesRepository' => 'App\\Repository\\ServicesRepository',
            'userRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
