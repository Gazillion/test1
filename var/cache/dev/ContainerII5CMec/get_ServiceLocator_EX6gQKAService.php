<?php

namespace ContainerII5CMec;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EX6gQKAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eX6gQKA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eX6gQKA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AjaxServiceController::saveData' => ['privates', '.service_locator.mKTQHHv', 'get_ServiceLocator_MKTQHHvService', true],
            'App\\Controller\\ListController::index' => ['privates', '.service_locator.mKTQHHv', 'get_ServiceLocator_MKTQHHvService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\Policy1Controller::List' => ['privates', '.service_locator.nnqCUHt', 'get_ServiceLocator_NnqCUHtService', true],
            'App\\Controller\\Policy1Controller::create' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Policy1Controller::delete' => ['privates', '.service_locator.fKDOhUA', 'get_ServiceLocator_FKDOhUAService', true],
            'App\\Controller\\Policy1Controller::show' => ['privates', '.service_locator.0YQEsXg', 'get_ServiceLocator_0YQEsXgService', true],
            'App\\Controller\\Policy1Controller::showUserPolicy' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Policy1Controller::update' => ['privates', '.service_locator.FeF82Gz', 'get_ServiceLocator_FeF82GzService', true],
            'App\\Controller\\RegistrationController::index' => ['privates', '.service_locator.qrNhk2c', 'get_ServiceLocator_QrNhk2cService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AjaxServiceController:saveData' => ['privates', '.service_locator.mKTQHHv', 'get_ServiceLocator_MKTQHHvService', true],
            'App\\Controller\\ListController:index' => ['privates', '.service_locator.mKTQHHv', 'get_ServiceLocator_MKTQHHvService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\Policy1Controller:List' => ['privates', '.service_locator.nnqCUHt', 'get_ServiceLocator_NnqCUHtService', true],
            'App\\Controller\\Policy1Controller:create' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Policy1Controller:delete' => ['privates', '.service_locator.fKDOhUA', 'get_ServiceLocator_FKDOhUAService', true],
            'App\\Controller\\Policy1Controller:show' => ['privates', '.service_locator.0YQEsXg', 'get_ServiceLocator_0YQEsXgService', true],
            'App\\Controller\\Policy1Controller:showUserPolicy' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Policy1Controller:update' => ['privates', '.service_locator.FeF82Gz', 'get_ServiceLocator_FeF82GzService', true],
            'App\\Controller\\RegistrationController:index' => ['privates', '.service_locator.qrNhk2c', 'get_ServiceLocator_QrNhk2cService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AjaxServiceController::saveData' => '?',
            'App\\Controller\\ListController::index' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\Policy1Controller::List' => '?',
            'App\\Controller\\Policy1Controller::create' => '?',
            'App\\Controller\\Policy1Controller::delete' => '?',
            'App\\Controller\\Policy1Controller::show' => '?',
            'App\\Controller\\Policy1Controller::showUserPolicy' => '?',
            'App\\Controller\\Policy1Controller::update' => '?',
            'App\\Controller\\RegistrationController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AjaxServiceController:saveData' => '?',
            'App\\Controller\\ListController:index' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\Policy1Controller:List' => '?',
            'App\\Controller\\Policy1Controller:create' => '?',
            'App\\Controller\\Policy1Controller:delete' => '?',
            'App\\Controller\\Policy1Controller:show' => '?',
            'App\\Controller\\Policy1Controller:showUserPolicy' => '?',
            'App\\Controller\\Policy1Controller:update' => '?',
            'App\\Controller\\RegistrationController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
