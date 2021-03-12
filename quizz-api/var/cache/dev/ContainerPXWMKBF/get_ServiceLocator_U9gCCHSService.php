<?php

namespace ContainerPXWMKBF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U9gCCHSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u9gCCHS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u9gCCHS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
