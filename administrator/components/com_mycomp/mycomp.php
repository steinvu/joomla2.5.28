<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
defined('_JEXEC') or die("Access Denied");
jimport('joomla.application.component.controller');

//echo JTEXT::_('COM_MYCOMP_WELCOME');

$controller=JController::getInstance('MyComp');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
