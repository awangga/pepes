<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Pepes : Pengawasan Pelayanan Pencatatan Sipil">
	    <meta name="author" content="Rolly Maulana Awangga">
	<title>{{ title }} Aplikasi Pengawasan Pelayanan Pencatatan Sipil</title>
		{{ stylesheet_link("css/bootstrap.min.css") }}
		{{ stylesheet_link("css/simple-sidebar.css") }}
		{{ stylesheet_link("font-awesome-4.3.0/css/font-awesome.min.css") }}
		{{ javascript_include("js/jquery-1.11.2.min.js") }}
		{{ javascript_include("js/bootstrap.min.js") }}

		{{ stylesheet_link("css/bootstrap-multiselect.css") }}
		{{ javascript_include("js/bootstrap-multiselect.js") }}
		{{ javascript_include("highchart/highchart.js") }}
		{{ javascript_include("highchart/exporting.js") }}

		{{ javascript_include("jquery.validate.js") }}
		{{ javascript_include("additional-methods.min.js") }}
    </head>

    <body>
			<nav class="navbar navbar-default no-margin">
		    <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header fixed-brand">
		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
		                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		                    </button>
							{{ link_to('','&lt;/p&gt; pepes', 'class': 'navbar-brand') }}
		                     
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
		            	<li {% if selectmenu == "comments" %}class="active"{% endif %}>
							{{ link_to('send/group','<span class="fa-stack fa-lg pull-left"><i class="fa fa-comments fa-stack-1x "></i></span>Laporkan') }}
		                </li>
		                <li {% if selectmenu == "outbox" %}class="active"{% endif %}>
							{{ link_to('peringkat','<span class="fa-stack fa-lg pull-left"><i class="fa fa-external-link fa-stack-1x "></i></span>Peringkat') }}
		                </li>
		                <li {% if selectmenu == "sentitems" %}class="active"{% endif %}>
							{{ link_to('terbaik','<span class="fa-stack fa-lg pull-left"><i class="fa fa-check fa-stack-1x "></i></span>Terbaik') }}
		                </li>
		                <li {% if selectmenu == "errors" %}class="active"{% endif %}>
							{{ link_to('terburuk','<span class="fa-stack fa-lg pull-left"><i class="fa fa-close fa-stack-1x "></i></span>Terburuk') }}
		                </li>
		                <li {% if selectmenu == "about" %}class="active"{% endif %}>
							{{ link_to('about','<span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>Tentang') }}
		                </li>
		            </ul>
		        </div><!-- /#sidebar-wrapper -->
		        <!-- Page Content -->
		        <div id="page-content-wrapper">
		            <div class="container-fluid xyz">
		                <div class="row">
		                    <div class="col-lg-12">
        {{ content() }}
													</div>
								                </div>
								            </div>
								        </div>
								        <!-- /#page-content-wrapper -->

								    </div>
								    <!-- /#wrapper -->
								    <!-- jQuery -->

								{{ javascript_include("js/sidebar_menu.js") }}
    </body>
</html>
