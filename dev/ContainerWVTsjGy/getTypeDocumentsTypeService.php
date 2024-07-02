<?php

namespace ContainerWVTsjGy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeDocumentsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TypeDocumentsType' shared autowired service.
     *
     * @return \App\Form\TypeDocumentsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'TypeDocumentsType.php';

        return $container->privates['App\\Form\\TypeDocumentsType'] = new \App\Form\TypeDocumentsType(($container->privates['App\\Repository\\DirectionsRepository'] ?? $container->load('getDirectionsRepositoryService')));
    }
}
