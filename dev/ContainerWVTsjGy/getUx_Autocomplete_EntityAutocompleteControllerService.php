<?php

namespace ContainerWVTsjGy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_EntityAutocompleteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ux.autocomplete.entity_autocomplete_controller' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Controller\EntityAutocompleteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EntityAutocompleteController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AutocompleterRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AutocompleteResultsExecutor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DoctrineRegistryWrapper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security.php';

        return $container->services['ux.autocomplete.entity_autocomplete_controller'] = new \Symfony\UX\Autocomplete\Controller\EntityAutocompleteController(new \Symfony\UX\Autocomplete\AutocompleterRegistry(($container->privates['.service_locator.Xbsa8iG'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], []))), new \Symfony\UX\Autocomplete\AutocompleteResultsExecutor(new \Symfony\UX\Autocomplete\Doctrine\DoctrineRegistryWrapper(($container->services['doctrine'] ?? self::getDoctrineService($container))), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), new \Symfony\Bundle\SecurityBundle\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'security.authenticator.managers_locator' => ['privates', 'security.authenticator.managers_locator', 'getSecurity_Authenticator_ManagersLocatorService', true],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'security.firewall.event_dispatcher_locator' => ['privates', 'security.firewall.event_dispatcher_locator', 'getSecurity_Firewall_EventDispatcherLocatorService', true],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.user_checker' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', true],
        ], [
            'request_stack' => '?',
            'security.authenticator.managers_locator' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.firewall.event_dispatcher_locator' => '?',
            'security.firewall.map' => '?',
            'security.token_storage' => '?',
            'security.user_checker' => '?',
        ]), ['dev' => NULL, 'main' => new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Security\\LoginAuthentificatorAuthenticator' => ['privates', 'App\\Security\\LoginAuthentificatorAuthenticator', 'getLoginAuthentificatorAuthenticatorService', true],
        ], [
            'App\\Security\\LoginAuthentificatorAuthenticator' => '?',
        ])])), ($container->services['router'] ?? self::getRouterService($container)));
    }
}
