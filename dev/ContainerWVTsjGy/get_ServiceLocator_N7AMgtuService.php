<?php

namespace ContainerWVTsjGy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N7AMgtuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N7AMgtu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N7AMgtu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'User' => ['privates', '.errored..service_locator.N7AMgtu.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.N7AMgtu": it needs an instance of "App\\Entity\\Users" but this type has been excluded in "config/services.yaml".'],
            'hash' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'User' => 'App\\Entity\\Users',
            'hash' => '?',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}