<?php
defined('_JEXEC') or die('Access denied');

jimport('joomla.application.component.controller');

Class MyCompController extends JController{

	function display(){	//will be called if no task is found
		echo "default display! No task given!";
		}
		
		
	function create(){
		$doc=JFactory::getdocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/frontend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/frontend_createtask.js');
		echo '<div id="Welcome">create function called</div>';
		}
		
	function delete(){
		$app=JFactory::getApplication();
		$id=JRequest::getInt('id');
		echo "you want to delete $id?";
		$app->close();
	}
}