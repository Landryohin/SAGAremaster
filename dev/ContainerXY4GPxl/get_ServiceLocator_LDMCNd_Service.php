<?php

namespace ContainerXY4GPxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LDMCNd_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LDMCNd.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LDMCNd.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'postesRepository' => ['privates', 'App\\Repository\\PostesRepository', 'getPostesRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'postesRepository' => 'App\\Repository\\PostesRepository',
            'userRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
