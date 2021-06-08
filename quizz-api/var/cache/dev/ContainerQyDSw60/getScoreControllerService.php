<?php

namespace ContainerQyDSw60;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScoreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ScoreController' shared autowired service.
     *
     * @return \App\Controller\ScoreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ScoreController.php';

        $container->services['App\\Controller\\ScoreController'] = $instance = new \App\Controller\ScoreController(($container->privates['App\\Repository\\ScoreRepository'] ?? $container->load('getScoreRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ScoreController', $container));

        return $instance;
    }
}