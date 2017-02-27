<?php
defined('_JEXEC') or die("Access Denied");

echo JTEXT::_('COM_MYCOMP_WELCOME');

jimport('joomla.application.component.controller');

//Creating controller Instance

	//$controller= new mycompController()
	//= in joomla terms
$controller= JController::getInstance('MyComp');

//execute task
$controller->execute(JRequest::getCmd('task'));

//if redirect set
$controller->redirect();

/**

