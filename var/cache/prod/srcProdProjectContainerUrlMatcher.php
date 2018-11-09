<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/funcionario/novo':
                // app_funcionario_formulario
                $ret = array('_route' => 'app_funcionario_formulario', '_controller' => 'App\\Controller\\FuncionarioController::formulario');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_funcionario_formulario;
                }

                return $ret;
                not_app_funcionario_formulario:
                // app_funcionario_cria
                $ret = array('_route' => 'app_funcionario_cria', '_controller' => 'App\\Controller\\FuncionarioController::cria');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_funcionario_cria;
                }

                return $ret;
                not_app_funcionario_cria:
                break;
            case '/horaLancada/novo':
                // app_horalancada_formulario
                $ret = array('_route' => 'app_horalancada_formulario', '_controller' => 'App\\Controller\\HoraLancadaController::formulario');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_horalancada_formulario;
                }

                return $ret;
                not_app_horalancada_formulario:
                // app_horalancada_cria
                $ret = array('_route' => 'app_horalancada_cria', '_controller' => 'App\\Controller\\HoraLancadaController::cria');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_horalancada_cria;
                }

                return $ret;
                not_app_horalancada_cria:
                break;
            case '/projeto/novo':
                // app_projeto_formulario
                $ret = array('_route' => 'app_projeto_formulario', '_controller' => 'App\\Controller\\ProjetoController::formulario');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_projeto_formulario;
                }

                return $ret;
                not_app_projeto_formulario:
                // app_projeto_cria
                $ret = array('_route' => 'app_projeto_cria', '_controller' => 'App\\Controller\\ProjetoController::cria');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_projeto_cria;
                }

                return $ret;
                not_app_projeto_cria:
                break;
            case '/usuario/novo':
                // app_usuario_formulario
                $ret = array('_route' => 'app_usuario_formulario', '_controller' => 'App\\Controller\\UsuarioController::formulario');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_usuario_formulario;
                }

                return $ret;
                not_app_usuario_formulario:
                // app_usuario_cria
                $ret = array('_route' => 'app_usuario_cria', '_controller' => 'App\\Controller\\UsuarioController::cria');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_usuario_cria;
                }

                return $ret;
                not_app_usuario_cria:
                break;
            default:
                $routes = array(
                    '/funcionario/lista' => array(array('_route' => 'app_funcionario_lista', '_controller' => 'App\\Controller\\FuncionarioController::lista'), null, null, null),
                    '/' => array(array('_route' => 'app_home_index', '_controller' => 'App\\Controller\\HomeController::indexAction'), null, null, null),
                    '/horaLancada/lista' => array(array('_route' => 'app_horalancada_lista', '_controller' => 'App\\Controller\\HoraLancadaController::lista'), null, array('GET' => 0), null),
                    '/projeto/lista' => array(array('_route' => 'app_projeto_lista', '_controller' => 'App\\Controller\\ProjetoController::lista'), null, array('GET' => 0), null),
                    '/usuario/lista' => array(array('_route' => 'app_usuario_lista', '_controller' => 'App\\Controller\\UsuarioController::lista'), null, array('GET' => 0), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/funcionario/(?'
                        .'|edita/([^/]++)(?'
                            .'|(*:40)'
                        .')'
                        .'|remove/([^/]++)(*:63)'
                    .')'
                    .'|/horaLancada/(?'
                        .'|edita/([^/]++)(?'
                            .'|(*:104)'
                        .')'
                        .'|remove/([^/]++)(*:128)'
                    .')'
                    .'|/projeto/(?'
                        .'|edita/([^/]++)(?'
                            .'|(*:166)'
                        .')'
                        .'|remove/([^/]++)(*:190)'
                    .')'
                    .'|/usuario/(?'
                        .'|edita/([^/]++)(?'
                            .'|(*:228)'
                        .')'
                        .'|remove/([^/]++)(*:252)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 40:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_funcionario_mostra
                        $ret = $this->mergeDefaults(array('_route' => 'app_funcionario_mostra') + $matches, array('_controller' => 'App\\Controller\\FuncionarioController::mostra'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_funcionario_mostra;
                        }

                        return $ret;
                        not_app_funcionario_mostra:

                        // app_funcionario_edita
                        $ret = $this->mergeDefaults(array('_route' => 'app_funcionario_edita') + $matches, array('_controller' => 'App\\Controller\\FuncionarioController::edita'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_funcionario_edita;
                        }

                        return $ret;
                        not_app_funcionario_edita:

                        break;
                    case 104:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_horalancada_mostra
                        $ret = $this->mergeDefaults(array('_route' => 'app_horalancada_mostra') + $matches, array('_controller' => 'App\\Controller\\HoraLancadaController::mostra'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_horalancada_mostra;
                        }

                        return $ret;
                        not_app_horalancada_mostra:

                        // app_horalancada_edita
                        $ret = $this->mergeDefaults(array('_route' => 'app_horalancada_edita') + $matches, array('_controller' => 'App\\Controller\\HoraLancadaController::edita'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_horalancada_edita;
                        }

                        return $ret;
                        not_app_horalancada_edita:

                        break;
                    case 166:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_projeto_mostra
                        $ret = $this->mergeDefaults(array('_route' => 'app_projeto_mostra') + $matches, array('_controller' => 'App\\Controller\\ProjetoController::mostra'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_projeto_mostra;
                        }

                        return $ret;
                        not_app_projeto_mostra:

                        // app_projeto_edita
                        $ret = $this->mergeDefaults(array('_route' => 'app_projeto_edita') + $matches, array('_controller' => 'App\\Controller\\ProjetoController::edita'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_projeto_edita;
                        }

                        return $ret;
                        not_app_projeto_edita:

                        break;
                    case 228:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_usuario_mostra
                        $ret = $this->mergeDefaults(array('_route' => 'app_usuario_mostra') + $matches, array('_controller' => 'App\\Controller\\UsuarioController::mostra'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_usuario_mostra;
                        }

                        return $ret;
                        not_app_usuario_mostra:

                        // app_usuario_edita
                        $ret = $this->mergeDefaults(array('_route' => 'app_usuario_edita') + $matches, array('_controller' => 'App\\Controller\\UsuarioController::edita'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_usuario_edita;
                        }

                        return $ret;
                        not_app_usuario_edita:

                        break;
                    default:
                        $routes = array(
                            63 => array(array('_route' => 'app_funcionario_remove', '_controller' => 'App\\Controller\\FuncionarioController::remove'), array('id'), null, null),
                            128 => array(array('_route' => 'app_horalancada_delete', '_controller' => 'App\\Controller\\HoraLancadaController::delete'), array('id'), array('GET' => 0), null),
                            190 => array(array('_route' => 'app_projeto_delete', '_controller' => 'App\\Controller\\ProjetoController::delete'), array('id'), array('GET' => 0), null),
                            252 => array(array('_route' => 'app_usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'), array('id'), array('GET' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (252 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
