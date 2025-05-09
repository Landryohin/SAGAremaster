<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T8QqxDIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T8QqxDI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8QqxDI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'secretariats' => ['privates', '.errored..service_locator.T8QqxDI.App\\Entity\\Secretariats', NULL, 'Cannot autowire service ".service_locator.T8QqxDI": it needs an instance of "App\\Entity\\Secretariats" but this type has been excluded in "config/services.yaml".'],
            'secretariatsRepository' => ['privates', 'App\\Repository\\SecretariatsRepository', 'getSecretariatsRepositoryService', true],
        ], [
            'secretariats' => 'App\\Entity\\Secretariats',
            'secretariatsRepository' => 'App\\Repository\\SecretariatsRepository',
        ]);
    }
}
