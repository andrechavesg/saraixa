<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_livro_formulario' => array(array(), array('_controller' => 'App\\Controller\\LivroController::formulario'), array(), array(array('text', '/livro/novo')), array(), array()),
        'app_livro_cria' => array(array(), array('_controller' => 'App\\Controller\\LivroController::cria'), array(), array(array('text', '/livro/novo')), array(), array()),
        'admin_livro_lista' => array(array(), array('_controller' => 'App\\Controller\\LivroController::lista'), array(), array(array('text', '/livro/lista')), array(), array()),
        'app_livro_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\LivroController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/livro/edita')), array(), array()),
        'app_livro_edita' => array(array('id'), array('_controller' => 'App\\Controller\\LivroController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/livro/edita')), array(), array()),
        'app_livro_delete' => array(array('id'), array('_controller' => 'App\\Controller\\LivroController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/livro/remove')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_usuario_formulario' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::formulario'), array(), array(array('text', '/usuario/novo')), array(), array()),
        'app_usuario_cria' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::cria'), array(), array(array('text', '/usuario/novo')), array(), array()),
        'app_usuario_lista' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::lista'), array(), array(array('text', '/usuario/lista')), array(), array()),
        'app_usuario_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/edita')), array(), array()),
        'app_usuario_edita' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/edita')), array(), array()),
        'app_usuario_delete' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/remove')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
