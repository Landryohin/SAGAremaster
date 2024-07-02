<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PostesController' shared autowired service.
     *
     * @return \App\Controller\PostesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PostesController.php';

        $container->services['App\\Controller\\PostesController'] = $instance = new \App\Controller\PostesController(($container->privates['App\\Repository\\DirectionsRepository'] ?? $container->load('getDirectionsRepositoryService')), ($container->privates['App\\Repository\\ServicesRepository'] ?? $container->load('getServicesRepositoryService')), ($container->privates['App\\Repository\\DivisionsRepository'] ?? $container->load('getDivisionsRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\PostesController', $container));

        return $instance;
    }
}