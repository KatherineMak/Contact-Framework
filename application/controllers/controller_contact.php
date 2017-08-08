<?php

class Controller_Contact extends Controller
{
	function __construct()
	{
		$this->view = new View();
	}
	
	function action_list()
	{	
		$model = new Model_Contact();
		$list = $model->loadList();
		$this->view->generate('list_view.php', 'template_view.php',$list);				
	}
	
	function action_add()
	{	
		$this->view->generate('add_view.php', 'template_view.php');
	}
	
	function action_edit()
	{	
		$model = new Model_Contact();
		$load = $model->load($contacts);
		$this->view->generate('edit_view.php', 'template_view.php',$load);
	}
	
	function action_delete()
	{	
		$model = new Model_Contact();
		$delete = $model->delete($_GET['id']);
		$list = $model->loadList();
		$this->view->generate('list_view.php', 'template_view.php',$list);
	}
	
	function action_save()
	{	
		$model = new Model_Contact();
		$save = $model->add($_POST);
		$list = $model->loadList();
		$this->view->generate('list_view.php', 'template_view.php',$list);	
	}
}