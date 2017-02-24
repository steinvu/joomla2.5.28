<?php
defined('_JEXEC') or die('Access denied');

jimport('joomla.application.component.controller');

Class MyCompController extends JController{

	function display(){	//will be called if no task is found
		echo "default display! No task given!";
		}
		
		
	function create(){
		echo "create function called";
		}
		
	function delete(){

		$id=JRequest::getInt('id');
		echo "you want to delete $id?";
		
	}
}