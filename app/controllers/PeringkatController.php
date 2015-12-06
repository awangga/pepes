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
		$lama=Users::find(
				array(
						"sort"  => array(
								"lama" => 1
						),
						"limit" => 5
				)
		);
		$this->view->response=$user;
		$this->view->lama=$lama;
	}
	public function addAction(){
		for($a=1;$a<=5;$a++){
			$user = new Users();
			$user->nik="21232".$a;
			$user->num="asdcasd".$a;
			$user->tingkat="KELURAHAN";
			$user->namalokasi="cibeunying".$a;
			$user->dok="KTP";
			$user->lama=25+$a;
			$user->pungutan=100000*$a;
			$user->save();
		}
		echo "ok";
	}
}
