<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'app_funcionario_lista' => array(array(), array('_controller' => 'App\\Controller\\FuncionarioController::lista'), array(), array(array('text', '/funcionario/lista')), array(), array()),
        'app_funcionario_formulario' => array(array(), array('_controller' => 'App\\Controller\\FuncionarioController::formulario'), array(), array(array('text', '/funcionario/novo')), array(), array()),
        'app_funcionario_cria' => array(array(), array('_controller' => 'App\\Controller\\FuncionarioController::cria'), array(), array(array('text', '/funcionario/novo')), array(), array()),
        'app_funcionario_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\FuncionarioController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/funcionario/edita')), array(), array()),
        'app_funcionario_edita' => array(array('id'), array('_controller' => 'App\\Controller\\FuncionarioController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/funcionario/edita')), array(), array()),
        'app_funcionario_remove' => array(array('id'), array('_controller' => 'App\\Controller\\FuncionarioController::remove'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/funcionario/remove')), array(), array()),
        'app_home_index' => array(array(), array('_controller' => 'App\\Controller\\HomeController::indexAction'), array(), array(array('text', '/')), array(), array()),
        'app_horalancada_formulario' => array(array(), array('_controller' => 'App\\Controller\\HoraLancadaController::formulario'), array(), array(array('text', '/horaLancada/novo')), array(), array()),
        'app_horalancada_cria' => array(array(), array('_controller' => 'App\\Controller\\HoraLancadaController::cria'), array(), array(array('text', '/horaLancada/novo')), array(), array()),
        'app_horalancada_lista' => array(array(), array('_controller' => 'App\\Controller\\HoraLancadaController::lista'), array(), array(array('text', '/horaLancada/lista')), array(), array()),
        'app_horalancada_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\HoraLancadaController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/horaLancada/edita')), array(), array()),
        'app_horalancada_edita' => array(array('id'), array('_controller' => 'App\\Controller\\HoraLancadaController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/horaLancada/edita')), array(), array()),
        'app_horalancada_delete' => array(array('id'), array('_controller' => 'App\\Controller\\HoraLancadaController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/horaLancada/remove')), array(), array()),
        'app_projeto_formulario' => array(array(), array('_controller' => 'App\\Controller\\ProjetoController::formulario'), array(), array(array('text', '/projeto/novo')), array(), array()),
        'app_projeto_cria' => array(array(), array('_controller' => 'App\\Controller\\ProjetoController::cria'), array(), array(array('text', '/projeto/novo')), array(), array()),
        'app_projeto_lista' => array(array(), array('_controller' => 'App\\Controller\\ProjetoController::lista'), array(), array(array('text', '/projeto/lista')), array(), array()),
        'app_projeto_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\ProjetoController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/projeto/edita')), array(), array()),
        'app_projeto_edita' => array(array('id'), array('_controller' => 'App\\Controller\\ProjetoController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/projeto/edita')), array(), array()),
        'app_projeto_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ProjetoController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/projeto/remove')), array(), array()),
        'app_usuario_formulario' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::formulario'), array(), array(array('text', '/usuario/novo')), array(), array()),
        'app_usuario_cria' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::cria'), array(), array(array('text', '/usuario/novo')), array(), array()),
        'app_usuario_lista' => array(array(), array('_controller' => 'App\\Controller\\UsuarioController::lista'), array(), array(array('text', '/usuario/lista')), array(), array()),
        'app_usuario_mostra' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::mostra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/edita')), array(), array()),
        'app_usuario_edita' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::edita'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/edita')), array(), array()),
        'app_usuario_delete' => array(array('id'), array('_controller' => 'App\\Controller\\UsuarioController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/usuario/remove')), array(), array()),
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
