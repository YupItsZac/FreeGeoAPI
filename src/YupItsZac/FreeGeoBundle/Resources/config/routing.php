<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

$collection = new RouteCollection();

//web Routes

$collection->add('free_geo_homepage', new Route('/', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:index',
)));

$collection->add('free_geo_status', new Route('/status', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:statusCheck',
	'pageTitle' => 'Service Status'
)));

$collection->add('free_geo_app_register', new Route('/apps/register', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:appRegister'
)));

$collection->add('free_geo_documentation', new Route('/docs', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
	'action' => 'index.docs',
	'dir' => 'Docs',
	'pageTitle' => 'Documentation'
)));

$collection->add('free_geo_authenticate', new Route('/docs/authenticate', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'authenticate',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Authenticate'
)));

$collection->add('free_geo_authenticate_session', new Route('/docs/authenticate/session', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'authenticate',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Authenticate'
)));

$collection->add('free_geo_reset', new Route('/docs/reset-api-keys', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'resetkeys',
    'dir' => 'Docs'
)));

$collection->add('free_geo_find_near', new Route('/docs/requests/find-near', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnear',
    'dir' => 'Docs'
)));

$collection->add('free_geo_find_near_airports', new Route('/docs/requests/find-near/airports', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearairport',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Airports'
)));

$collection->add('free_geo_find_near_cities', new Route('/docs/requests/find-near/cities', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearcities',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Cities'
)));

$collection->add('free_geo_find_near_ports', new Route('/docs/requests/find-near/ports', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearports',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Ports'
)));

$collection->add('free_geo_find_near_lakes', new Route('/docs/requests/find-near/lakes', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearlakes',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Lakes'
)));

$collection->add('free_geo_find_near_roads', new Route('/docs/requests/find-near/roads', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearroads',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Roads'
)));

$collection->add('free_geo_find_near_railroads', new Route('/docs/requests/find-near/railroads', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'findnearrailroads',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Nearest Railroads'
)));

$collection->add('free_geo_detect_time_zone', new Route('/docs/requests/detect/timezone', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'detecttimezone',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Timezone Detection'
)));

$collection->add('free_geo_calculate_distance', new Route('/docs/requests/calculate/distance', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'calculatedistance',
    'dir' => 'Docs',
	'pageTitle' => 'Docs - Distance Calculation'
)));

$collection->add('free_geo_todo_high', new Route('/to-do/priority-high', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'high',
    'dir' => 'Todo'
)));

$collection->add('free_geo_todo_medium', new Route('/to-do/priority-medium', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'medium',
    'dir' => 'Todo'
)));

$collection->add('free_geo_todo_low', new Route('/to-do/priority-low', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'low',
    'dir' => 'Todo'
)));

$collection->add('free_geo_contribute', new Route('/contribute', array(
    '_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
    'action' => 'index',
    'dir' => 'Contribute'
)));

$collection->add('free_geo_app_conversion', new Route('/conversion/apps', array(
		'_controller' => 'YupItsZacFreeGeoBundle:Web:staticRender',
		'action' => 'convert.app',
		'dir' => 'Docs',
		'pageTitle' => 'Docs - App Conversion'
)));


//Developer account routes

$collection->add('free_geo_developer_dashboard', new Route('/developer/dashboard', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:dashboard',
	'pageTitle' => 'Developer Dashboard'
)));

$collection->add('free_geo_developer_app_register', new Route('/developer/app/register', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:appRegister',
	'pageTitle' => 'Application Registration'
)));

$collection->add('free_geo_developer_app_settings', new Route('/developer/app/settings/{appHash}', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:appSettings',
	'actionType' => 'settings',
	'pageTitle' => 'Application Settings'
)));

$collection->add('free_geo_developer_app_keyset_refresh', new Route('/developer/app/keyset/refresh/{appHash}', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:appSettings',
	'actionType' => 'refresh'
)));

$collection->add('free_geo_developer_app_delete', new Route('/developer/app/delete/{appHash}', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:deleteApp'
)));

$collection->add('free_geo_developer_app_converter', new Route('/developer/tool/app/converter', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Developer:convertApp',
	'pageTitle' => 'App Conversion Tool'
)));

//Login routes

$collection->add('free_geo_developer_login', new Route('/login', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Security:login',
	'pageTitle' => 'Developer Login'
)));

$collection->add('login_check', new Route('/login_check', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Security:loginCheck'
)));

$collection->add('free_geo_developer_logout', new Route('/logout', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Security:logout'
)));

//Registration routes

$collection->add('free_geo_developer_register', new Route('/register', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Registration:register',
	'pageTitle' => 'Developer Registration'
)));

$collection->add('free_geo_registration_completed', new Route('/registration/completed', array(
	'_controller' => 'YupItsZacFreeGeoBundle:Registration:complete',
	'pageTitle' => 'Registration Completed'
)));

return $collection;
