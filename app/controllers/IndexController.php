<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->title = "Home";
		$this->view->breadcrumb=array('Home','About');
		$this->view->selectmenu	= "home";
    }

}

