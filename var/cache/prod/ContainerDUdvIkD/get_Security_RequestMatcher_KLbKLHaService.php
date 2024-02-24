<?php

namespace ContainerDUdvIkD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_RequestMatcher_KLbKLHaService extends App_KernelProdContainer
{
    /*
     * Gets the private '.security.request_matcher.kLbKLHa' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\ChainRequestMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.security.request_matcher.kLbKLHa'] = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/(_(profiler|wdt)|css|images|js)/')]);
    }
}
