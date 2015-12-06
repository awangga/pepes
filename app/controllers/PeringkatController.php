<?php

class PeringkatController extends \Phalcon\Mvc\Controller
{
	public function indexAction(){
		$this->view->title = "Outbox - ";
		$this->view->selectmenu	= "outbox";
		$user=Users::find(
				array(
					array(
						"sort"=>array(
							"pungutan"=>1
						),
						"limit"=>5
					)
		));
		foreach($user as $u){
			echo $u->pungutan."<br>";
		}
	}
}
