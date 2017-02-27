<?php
defined('_JEXEC') or die('access denied');

jimport ('joomla.application.component.controller');

class MyCompController extends JController{

	function display(){
		JToolbarHelper::Title('Default title!');
		echo JText::_('COM_MYCOMP_WELCOME');
	}
	
	function create(){
		JToolbarHelper::Title('Create task title!');
		echo JText::_('COM_MYCOMP_TASK_CREATE');
	}
	
	function delete(){
		JToolbarHelper::Title('Delete task title!');
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}

	function listtask(){
		JToolbarHelper::Title('List task title!');
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}	
	
	function help(){
		JToolbarHelper::Title('Help task title!');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is help task <input type="text">';
	}
		
}