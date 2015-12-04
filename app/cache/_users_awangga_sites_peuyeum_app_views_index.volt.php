<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="SWIM : SMS Gateway Web Service Interface Module">
	    <meta name="author" content="Rolly Maulana Awangga">
	<title><?php echo $title; ?> SMS Gateway Web Service Interface Module</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>
		<?php echo $this->tag->stylesheetLink('font-awesome-4.3.0/css/font-awesome.min.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/jquery-1.11.2.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>

		<?php echo $this->tag->stylesheetLink('css/bootstrap-multiselect.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap-multiselect.js'); ?>
    </head>

    <body>
			<nav class="navbar navbar-default no-margin">
		    <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header fixed-brand">
		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
		                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		                    </button>
							<?php echo $this->tag->linkTo(array('', '<i class="fa fa-rocket fa-4"></i> peuyeum', 'class' => 'navbar-brand')); ?>
		                     
		                </div><!-- navbar-header-->

		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                            <ul class="nav navbar-nav">
		                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
		                            </ul>
		                </div><!-- bs-example-navbar-collapse-1 -->
		    </nav>
		    <div id="wrapper">
		        <!-- Sidebar -->
		        <div id="sidebar-wrapper">
		            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

		                <li <?php if ($selectmenu == 'messaging') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope-o fa-stack-1x "></i></span>Messaging</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'mgroups') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('send/groups', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-check-square-o fa-stack-1x "></i></span>Multi Groups')); ?>
								</li>
								<li <?php if ($selectmenu == 'mgroup') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('send/group', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>Group')); ?>
								</li>
		                        <li <?php if ($selectmenu == 'mpersonal') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('send/personal', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>Personal')); ?>
								</li>
		                    	</ul>
		                </li>
		            	<li <?php if ($selectmenu == 'comments') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('comments', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x "></i></span>Comments')); ?>
		                </li>
		                <li <?php if ($selectmenu == 'outbox') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('outbox', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-external-link fa-stack-1x "></i></span>Outbox')); ?>
		                </li>
		                <li <?php if ($selectmenu == 'sentitems') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('sentitems', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-check fa-stack-1x "></i></span>Sent Items')); ?>
		                </li>
		                <li <?php if ($selectmenu == 'errors') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('errors', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-close fa-stack-1x "></i></span>Errors')); ?>
		                </li>
		                <li <?php if ($selectmenu == 'about') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('about', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>About')); ?>
		                </li>
		            </ul>
		        </div><!-- /#sidebar-wrapper -->
		        <!-- Page Content -->
		        <div id="page-content-wrapper">
		            <div class="container-fluid xyz">
		                <div class="row">
		                    <div class="col-lg-12">
        <?php echo $this->getContent(); ?>
													</div>
								                </div>
								            </div>
								        </div>
								        <!-- /#page-content-wrapper -->

								    </div>
								    <!-- /#wrapper -->
								    <!-- jQuery -->

								<?php echo $this->tag->javascriptInclude('js/sidebar_menu.js'); ?>
    </body>
</html>
