<?php

namespace ContainerRhPXYjx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSliderRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\SliderRepository' shared autowired service.
     *
     * @return \App\Repository\SliderRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SliderRepository'] = new \App\Repository\SliderRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
