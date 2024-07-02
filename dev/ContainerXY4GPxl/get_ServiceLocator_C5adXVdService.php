<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C5adXVdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c5adXVd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c5adXVd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'divisionsRepository' => ['privates', 'App\\Repository\\DivisionsRepository', 'getDivisionsRepositoryService', true],
            'servicesRepository' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService', true],
        ], [
            'divisionsRepository' => 'App\\Repository\\DivisionsRepository',
            'servicesRepository' => 'App\\Repository\\ServicesRepository',
        ]);
    }
}
