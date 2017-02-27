<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);

defined('_JEXEC') or die('access denied');

jimport ('joomla.application.component.controller');

class MyCompController extends JController{

	function display(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolbarHelper::Title('Default title!','mycomp.png');
		echo JText::_('COM_MYCOMP_WELCOME');
	}
	
	function create(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/backend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/backend_createtask.js');
		JToolbarHelper::Title('Create task title!','createtask.png');
		echo '<div id="welcome">'. JText::_('COM_MYCOMP_TASK_CREATE') .'</div>';
	}
	
	function delete(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolbarHelper::Title('Delete task title!','deletetask.png');
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}

	function listtask(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolbarHelper::Title('List task title!','listtask.png');
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}	
	
	function help(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/mycomp.css');
		JToolbarHelper::Title('Help task title!','helptask.png');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is help task <input type="text">';
	}
		
}