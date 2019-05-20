<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
            '/registrationPerson' => [[['_route' => 'registrationPerson', '_controller' => 'App\\Controller\\RegistrationController::registrationPerson'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/accesshomepage/([^/]++)(*:193)'
                    .'|/delete/([^/]++)(*:217)'
                    .'|/registrationKakeibo/([^/]++)(*:254)'
                    .'|/showcost(?'
                        .'|/([^/]++)(*:283)'
                        .'|By(?'
                            .'|Category/([^/]++)(*:313)'
                            .'|Year/([^/]++)(*:334)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            193 => [[['_route' => 'access_homepage', '_controller' => 'App\\Controller\\AccessHomepageController::index'], ['id'], null, null, false, true, null]],
            217 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\DeleteController::index'], ['id'], null, null, false, true, null]],
            254 => [[['_route' => 'registrationKakeibo', '_controller' => 'App\\Controller\\RegistrationController::registrationKakeibo'], ['id'], null, null, false, true, null]],
            283 => [[['_route' => 'show_cost', '_controller' => 'App\\Controller\\ShowCostController::index'], ['id'], null, null, false, true, null]],
            313 => [[['_route' => 'showcostbycategory', '_controller' => 'App\\Controller\\ShowCostController::showcostByCategory'], ['id'], null, null, false, true, null]],
            334 => [[['_route' => 'showcostbyvategory', '_controller' => 'App\\Controller\\ShowCostController::showcostByYear'], ['id'], null, null, false, true, null]],
        ];
    }
}
