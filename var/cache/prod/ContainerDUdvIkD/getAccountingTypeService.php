<?php

namespace ContainerDUdvIkD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountingTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AccountingType' shared autowired service.
     *
     * @return \App\Form\AccountingType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AccountingType'] = new \App\Form\AccountingType();
    }
}
