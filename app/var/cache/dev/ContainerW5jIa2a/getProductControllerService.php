<?php

namespace ContainerW5jIa2a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductController' shared autowired service.
     *
     * @return \App\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductController.php';

        $container->services['App\\Controller\\ProductController'] = $instance = new \App\Controller\ProductController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ProductController', $container));

        return $instance;
    }
}
