<?php
/**
 * Created by PhpStorm.
 * User: chandra
 * Date: 06/12/2015
 * Time: 20:30
 */
class TerburukController extends \Phalcon\Mvc\Controller
{
    public function indexAction(){
        $this->view->title = "Peringkat ";
        $this->view->selectmenu	= "outbox";
        $user=Users::find(
            array(
                "sort"  => array(
                    "pungutan" => -1
                ),
                "limit" => 5
            )
        );
        $lama=Users::find(
            array(
                "sort"  => array(
                    "lama" => -1
                ),
                "limit" => 5
            )
        );
        $this->view->response=$user;
        $this->view->lama=$lama;
    }
}