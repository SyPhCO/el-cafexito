<?php

namespace ContainerDUdvIkD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Handler_DeprecationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'monolog.handler.deprecation' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.handler.deprecation'] = $instance = new \Monolog\Handler\StreamHandler('php://stderr', 100, true, NULL, false);

        $instance->pushProcessor(($container->privates['monolog.processor.psr_log_message'] ??= new \Monolog\Processor\PsrLogMessageProcessor()));

        return $instance;
    }
}
