<?php

class AboutController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "About - ";
		$this->view->breadcrumb=array('Home','About');
		$this->view->selectmenu	= "about";
    }

}

