<?php
defined('_JEXEC') or die('access denied');

jimport ('joomla.application.component.controller');

class MyCompController extends JController{

	function display(){
		echo JText::_('COM_MYCOMP_WELCOME');
	}
	
	function create(){
		echo JText::_('COM_MYCOMP_TASK_CREATE');
	}
	
	function delete(){
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}

	function listtask(){
		echo JText::_('COM_MYCOMP_TASK_LISTTASK');
	}	
	
	function help(){
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is help task <input type="text">';
	}
		
}