<?php

namespace ContainerLcyjh1O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResponseControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ResponseController' shared autowired service.
     *
     * @return \App\Controller\ResponseController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ResponseController'] = $instance = new \App\Controller\ResponseController(($container->privates['App\\Repository\\ResponseRepository'] ?? $container->load('getResponseRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ResponseController', $container));

        return $instance;
    }
}
