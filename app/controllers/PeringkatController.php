<?php

class PeringkatController extends \Phalcon\Mvc\Controller
{
	public function indexAction(){
		$this->view->title = "Outbox - ";
		$this->view->selectmenu	= "outbox";
		$user=Users::find();
		foreach($user as $u){
			echo $u->pungutan;
		}
	}
}
