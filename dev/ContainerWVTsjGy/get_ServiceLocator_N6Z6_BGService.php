<?php

namespace ContainerWVTsjGy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N6Z6_BGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N6Z6.BG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N6Z6.BG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'secretariatsRepository' => ['privates', 'App\\Repository\\SecretariatsRepository', 'getSecretariatsRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'secretariatsRepository' => 'App\\Repository\\SecretariatsRepository',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
