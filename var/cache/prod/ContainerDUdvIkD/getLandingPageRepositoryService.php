<?php

namespace ContainerDUdvIkD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLandingPageRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LandingPageRepository' shared autowired service.
     *
     * @return \App\Repository\LandingPageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LandingPageRepository'] = new \App\Repository\LandingPageRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
