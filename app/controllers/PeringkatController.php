<?php

class PeringkatController extends \Phalcon\Mvc\Controller
{
	public function indexAction(){
		$this->view->title = "Peringkat ";
		$this->view->selectmenu	= "outbox";
		$user=Users::find(
				array(
						"sort"  => array(
								"pungutan" => 1
						),
						"limit" => 5
				)
		);
		$this->view->response=$user;
	}
}
