<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5Ye7SJ2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5Ye7SJ2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5Ye7SJ2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'directionsRepository' => ['privates', 'App\\Repository\\DirectionsRepository', 'getDirectionsRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'directionsRepository' => 'App\\Repository\\DirectionsRepository',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
