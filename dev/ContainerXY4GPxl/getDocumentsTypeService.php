<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DocumentsType' shared autowired service.
     *
     * @return \App\Form\DocumentsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'DocumentsType.php';

        $a = ($container->services['App\\Controller\\PostesController'] ?? $container->load('getPostesControllerService'));

        if (isset($container->privates['App\\Form\\DocumentsType'])) {
            return $container->privates['App\\Form\\DocumentsType'];
        }

        return $container->privates['App\\Form\\DocumentsType'] = new \App\Form\DocumentsType(($container->privates['App\\Repository\\TypeDocumentsRepository'] ?? $container->load('getTypeDocumentsRepositoryService')), $a);
    }
}
