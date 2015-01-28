<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'principal'));
	Router::connect('/contacto', array('controller' => 'pages', 'action' => 'contacto'));
	Router::connect('/quienes-somos', array('controller' => 'pages', 'action' => 'quienes_somos'));
	Router::connect('/perfil-ingeniero', array('controller' => 'pages', 'action' => 'perfil_ingeniero'));
	Router::connect('/malla-curricular', array('controller' => 'pages', 'action' => 'malla_curricular'));
	Router::connect('/admision-y-becas', array('controller' => 'pages', 'action' => 'admision_y_becas'));
	Router::connect('/estudiantes', array('controller' => 'pages', 'action' => 'estudiantes'));
	Router::connect('/alumni', array('controller' => 'pages', 'action' => 'alumni'));
	Router::connect('/convenios', array('controller' => 'pages', 'action' => 'convenios'));
	Router::connect('/magister-ingenieria-industrial', array('controller' => 'pages', 'action' => 'magister_ingenieria_industrial'));
	Router::connect('/magister-gestion-industrial', array('controller' => 'pages', 'action' => 'magister_gestion_industrial'));
	
	Router::connect('/noticias', array('controller' => 'pages', 'action' => 'noticias'));
	Router::connect('/academicos/*', array('controller' => 'users', 'action' => 'academicos'));
	Router::connect('/academico/*', array('controller' => 'users', 'action' => 'academico'));
	Router::connect('/funcionarios', array('controller' => 'pages', 'action' => 'funcionarios'));
	
	
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/dashboard', array('controller' => 'users', 'action' => 'dashboard'));
	Router::connect('/admin', array('controller' => 'users', 'action' => 'dashboard'));
	// Router::connect('/:controller/:action/*');
	// Router::connect('/:controller/*');
	// Router::connect('/pages/:action/*');
	Router::connect('/dii/*', array('controller' => 'dii', 'action' => 'analize'));
	Router::connect('/event/*', array('controller' => 'events', 'action' => 'event'));
	Router::connect('/notice/*', array('controller' => 'posts', 'action' => 'notice'));
	Router::connect('/notices/*', array('controller' => 'posts', 'action' => 'notices'));
	
	Router::connect('/gallery/*', array('controller' => 'galleries', 'action' => 'gallery'));
	Router::connect('/see_galleries', array('controller' => 'galleries', 'action' => 'galleries'));
	// Router::connect('/*', array('controller' => 'pages', 'action' => 'analize'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	// Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
