<?php

namespace ContainerPl4ra83;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FShFoGKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FShFoGK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FShFoGK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cart' => ['privates', 'App\\Classe\\Cart', 'getCartService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cart' => 'App\\Classe\\Cart',
            'entityManager' => '?',
        ]);
    }
}
