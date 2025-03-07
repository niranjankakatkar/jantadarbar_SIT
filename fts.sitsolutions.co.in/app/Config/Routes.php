<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/'                                                , 'Home::index');
$routes->match(['get','post'],'/logout'                         , 'Home::logout');
$routes->match(['get','post'],'/signIn'                         , 'Login\LoginController::signIn');
$routes->match(['get','post'],'/adminDashboard'                 , 'Dashboard\DashboardController::adminDashboard');


$routes->match(['get','post'],'/Department'                     , 'Master\MasterController::Department');
$routes->match(['get','post'],'/AddDepartment'                  , 'Master\MasterController::AddDepartment');
$routes->match(['get','post'],'/store_dept'                     , 'Master\MasterController::store_dept');
$routes->match(['get','post'],'/updateDept'                     , 'Master\MasterController::updateDept');
$routes->match(['get','post'],'/deleteRec'                      , 'Master\MasterController::deleteRec');

$routes->match(['get','post'],'/Role'                           , 'Master\MasterController::Role');
$routes->match(['get','post'],'/AddRole'                        , 'Master\MasterController::AddRole');
$routes->match(['get','post'],'/store_role'                     , 'Master\MasterController::store_role');
$routes->match(['get','post'],'/updateRole'                     , 'Master\MasterController::updateRole');

$routes->match(['get','post'],'/Designation'                    , 'Master\MasterController::Designation');
$routes->match(['get','post'],'/AddDesig'                       , 'Master\MasterController::AddDesignation');
$routes->match(['get','post'],'/store_desig'                    , 'Master\MasterController::store_desig');
$routes->match(['get','post'],'/updateDesig'                    , 'Master\MasterController::updateDesig');

$routes->match(['get','post'],'/RejectionReason'                , 'Master\MasterController::RejectionReason');
$routes->match(['get','post'],'/AddRejectReason'                , 'Master\MasterController::AddRejectReason');
$routes->match(['get','post'],'/store_rejection_reason'         , 'Master\MasterController::store_rejection_reason');
$routes->match(['get','post'],'/updateRejectionReason'          , 'Master\MasterController::updateRejectionReason');

$routes->match(['get','post'],'/Employee'                       , 'Master\EmployeeController::Employee');
$routes->match(['get','post'],'/AddEmployee'                    , 'Master\EmployeeController::AddEmployee');
$routes->match(['get','post'],'/store_emp'                      , 'Master\EmployeeController::store_emp');
$routes->match(['get','post'],'/updateEmployee'                 , 'Master\EmployeeController::updateEmployee');

$routes->match(['get','post'],'/Vibhag'                         , 'Master\VibhagController::Vibhag');
$routes->match(['get','post'],'/AddVibhag'                      , 'Master\VibhagController::AddVibhag');
$routes->match(['get','post'],'/store_vibhag'                   , 'Master\VibhagController::store_vibhag');
$routes->match(['get','post'],'/updateVibhag'                   , 'Master\VibhagController::updateVibhag');

$routes->match(['get','post'],'/File'                           , 'File\FileController::File');
$routes->match(['get','post'],'/AddFile'                        , 'File\FileController::AddFile');
$routes->match(['get','post'],'/store_file'                     , 'File\FileController::store_file');
$routes->match(['get','post'],'/updateFile'                     , 'File\FileController::updateFile');
