<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            default:
                $routes = array(
                    '/admin/classroom/manager' => array(array('_route' => 'classroom_manager', '_controller' => 'App\\Controller\\ClassroomController::classroomManager'), null, null, null),
                    '/admin/classroom/register' => array(array('_route' => 'register_classroom', '_controller' => 'App\\Controller\\ClassroomController::registerClassroom'), null, null, null),
                    '/controles/new' => array(array('_route' => 'new_controle', '_controller' => 'App\\Controller\\ControleController::addControle'), null, null, null),
                    '/controles/pending' => array(array('_route' => 'pending_controles', '_controller' => 'App\\Controller\\ControleController::controlesManager'), null, null, null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\CoreController::indexAction'), null, null, null),
                    '/admin/DC/manager' => array(array('_route' => 'dc_manager', '_controller' => 'App\\Controller\\DCController::DCManager'), null, null, null),
                    '/admin/DC/domaine/register' => array(array('_route' => 'register_domaine', '_controller' => 'App\\Controller\\DCController::registerDomaine'), null, null, null),
                    '/admin/DC/competence/register' => array(array('_route' => 'register_competence', '_controller' => 'App\\Controller\\DCController::registerCompetence'), null, null, null),
                    '/mystudents' => array(array('_route' => 'mystudents_manager', '_controller' => 'App\\Controller\\MyStudentsController::MyStudentsManager'), null, null, null),
                    '/renew-password/requete' => array(array('_route' => 'request_resetting', '_controller' => 'App\\Controller\\ResettingController::request'), null, null, null),
                    '/login' => array(array('_route' => 'security_login_form', '_controller' => 'App\\Controller\\SecurityController::loginAction'), null, null, null),
                    '/login_check' => array(array('_route' => 'security_login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheckAction'), null, null, null),
                    '/logout' => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'), null, null, null),
                    '/admin/user/manager' => array(array('_route' => 'user_manager', '_controller' => 'App\\Controller\\UserController::userManager'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
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
                    .'|/admin/(?'
                        .'|c(?'
                            .'|lassroom/(?'
                                .'|edit/([^/]++)(*:46)'
                                .'|delete/([^/]++)(*:68)'
                            .')'
                            .'|ompetence/(?'
                                .'|edit/([^/]++)(*:102)'
                                .'|delete/([^/]++)(*:125)'
                            .')'
                        .')'
                        .'|domaine/(?'
                            .'|edit/([^/]++)(*:159)'
                            .'|delete/([^/]++)(*:182)'
                        .')'
                        .'|student/edit/([^/]++)(*:212)'
                        .'|teacher/edit/([^/]++)(*:241)'
                        .'|user/(?'
                            .'|register/([^/]++)(*:274)'
                            .'|edit/([^/]++)(*:295)'
                            .'|d(?'
                                .'|isable/([^/]++)(*:322)'
                                .'|elete/([^/]++)(*:344)'
                            .')'
                        .')'
                    .')'
                    .'|/renew\\-password/([^/]++)/([^/]++)(*:389)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:428)'
                        .'|wdt/([^/]++)(*:448)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:494)'
                                .'|router(*:508)'
                                .'|exception(?'
                                    .'|(*:528)'
                                    .'|\\.css(*:541)'
                                .')'
                            .')'
                            .'|(*:551)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            46 => array(array('_route' => 'edit_classroom', '_controller' => 'App\\Controller\\ClassroomController::editClassroom'), array('id'), null, null),
                            68 => array(array('_route' => 'delete_classroom', '_controller' => 'App\\Controller\\ClassroomController::deleteClassroom'), array('id'), null, null),
                            102 => array(array('_route' => 'edit_competence', '_controller' => 'App\\Controller\\DCController::editCompetence'), array('id'), null, null),
                            125 => array(array('_route' => 'delete_competence', '_controller' => 'App\\Controller\\DCController::deleteCompetence'), array('id'), null, null),
                            159 => array(array('_route' => 'edit_domaine', '_controller' => 'App\\Controller\\DCController::editDomaine'), array('id'), null, null),
                            182 => array(array('_route' => 'delete_domaine', '_controller' => 'App\\Controller\\DCController::deleteDomaine'), array('id'), null, null),
                            212 => array(array('_route' => 'edit_student', '_controller' => 'App\\Controller\\StudentController::editStudent'), array('id'), null, null),
                            241 => array(array('_route' => 'edit_teacher', '_controller' => 'App\\Controller\\TeacherController::editTeacher'), array('id'), null, null),
                            274 => array(array('_route' => 'register_form', '_controller' => 'App\\Controller\\UserController::registerForm'), array('usertype'), null, null),
                            295 => array(array('_route' => 'edit_user', '_controller' => 'App\\Controller\\UserController::editUser'), array('id'), null, null),
                            322 => array(array('_route' => 'enableDisable_user', '_controller' => 'App\\Controller\\UserController::enableDisableUser'), array('id'), null, null),
                            344 => array(array('_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'), array('id'), null, null),
                            389 => array(array('_route' => 'resetting', '_controller' => 'App\\Controller\\ResettingController::resetting'), array('id', 'token'), null, null),
                            428 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            448 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            494 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            508 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            528 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            541 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            551 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (551 === $m) {
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
