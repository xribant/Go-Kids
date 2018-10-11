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
        'classroom_manager' => array(array(), array('_controller' => 'App\\Controller\\ClassroomController::classroomManager'), array(), array(array('text', '/admin/classroom/manager')), array(), array()),
        'register_classroom' => array(array(), array('_controller' => 'App\\Controller\\ClassroomController::registerClassroom'), array(), array(array('text', '/admin/classroom/register')), array(), array()),
        'edit_classroom' => array(array('id'), array('_controller' => 'App\\Controller\\ClassroomController::editClassroom'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/classroom/edit')), array(), array()),
        'delete_classroom' => array(array('id'), array('_controller' => 'App\\Controller\\ClassroomController::deleteClassroom'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/classroom/delete')), array(), array()),
        'pending_controles' => array(array(), array('_controller' => 'App\\Controller\\ControleController::controlesManager'), array(), array(array('text', '/controles/pending')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\CoreController::indexAction'), array(), array(array('text', '/')), array(), array()),
        'dc_manager' => array(array(), array('_controller' => 'App\\Controller\\DCController::DCManager'), array(), array(array('text', '/admin/DC/manager')), array(), array()),
        'register_domaine' => array(array(), array('_controller' => 'App\\Controller\\DCController::registerDomaine'), array(), array(array('text', '/admin/DC/domaine/register')), array(), array()),
        'register_competence' => array(array(), array('_controller' => 'App\\Controller\\DCController::registerCompetence'), array(), array(array('text', '/admin/DC/competence/register')), array(), array()),
        'edit_domaine' => array(array('id'), array('_controller' => 'App\\Controller\\DCController::editDomaine'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/domaine/edit')), array(), array()),
        'edit_competence' => array(array('id'), array('_controller' => 'App\\Controller\\DCController::editCompetence'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/competence/edit')), array(), array()),
        'delete_domaine' => array(array('id'), array('_controller' => 'App\\Controller\\DCController::deleteDomaine'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/domaine/delete')), array(), array()),
        'delete_competence' => array(array('id'), array('_controller' => 'App\\Controller\\DCController::deleteCompetence'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/competence/delete')), array(), array()),
        'mystudents_manager' => array(array(), array('_controller' => 'App\\Controller\\MyStudentsController::MyStudentsManager'), array(), array(array('text', '/mystudents')), array(), array()),
        'request_resetting' => array(array(), array('_controller' => 'App\\Controller\\ResettingController::request'), array(), array(array('text', '/renew-password/requete')), array(), array()),
        'resetting' => array(array('id', 'token'), array('_controller' => 'App\\Controller\\ResettingController::resetting'), array(), array(array('variable', '/', '[^/]++', 'token'), array('variable', '/', '[^/]++', 'id'), array('text', '/renew-password')), array(), array()),
        'security_login_form' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::loginAction'), array(), array(array('text', '/login')), array(), array()),
        'security_login_check' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::loginCheckAction'), array(), array(array('text', '/login_check')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'edit_student' => array(array('id'), array('_controller' => 'App\\Controller\\StudentController::editStudent'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/student/edit')), array(), array()),
        'edit_teacher' => array(array('id'), array('_controller' => 'App\\Controller\\TeacherController::editTeacher'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/teacher/edit')), array(), array()),
        'user_manager' => array(array(), array('_controller' => 'App\\Controller\\UserController::userManager'), array(), array(array('text', '/admin/user/manager')), array(), array()),
        'register_form' => array(array('usertype'), array('_controller' => 'App\\Controller\\UserController::registerForm'), array(), array(array('variable', '/', '[^/]++', 'usertype'), array('text', '/admin/user/register')), array(), array()),
        'edit_user' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::editUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/user/edit')), array(), array()),
        'enableDisable_user' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::enableDisableUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/user/disable')), array(), array()),
        'delete_user' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::deleteUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/user/delete')), array(), array()),
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
