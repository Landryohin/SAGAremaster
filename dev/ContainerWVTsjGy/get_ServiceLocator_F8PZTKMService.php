<?php

namespace ContainerWVTsjGy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F8PZTKMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f8PZTKM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f8PZTKM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'typeDocument' => ['privates', '.errored..service_locator.f8PZTKM.App\\Entity\\TypeDocuments', NULL, 'Cannot autowire service ".service_locator.f8PZTKM": it needs an instance of "App\\Entity\\TypeDocuments" but this type has been excluded in "config/services.yaml".'],
        ], [
            'typeDocument' => 'App\\Entity\\TypeDocuments',
        ]);
    }
}
