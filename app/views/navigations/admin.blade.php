
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--<a class="navbar-brand" href="#">Brand</a>-->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{URL::to('admin/manage_homepage')}}"><span class="glyphicon glyphicon-home" style="margin-right:10px;"></span>Homepage</a></li>

				<li><a href="{{URL::to('admin/manage_about')}}"><span class="glyphicon glyphicon-tag" style="margin-right:10px;"></span>About Us and Services</a></li>

				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close" style="color:#fff; margin-right:10px;"></span>Barang<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu"> 
						<li><a href=""><span class="glyphicon glyphicon-unchecked" style="margin-right:10px;"></span>View Stock</a></li> 
						<li><a href=""><span class="glyphicon glyphicon-collapse-down" style="margin-right:10px;"></span>View Restock History</a></li> 
						<li><a href=""><span class="glyphicon glyphicon-log-in" style="margin-right:10px;"></span>View Retur</a></li>
						<li><a href=""><span class="glyphicon glyphicon-new-window" style="margin-right:10px;"></span>View Obral</a></li>

					</ul>
				</li>-->

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-book" style="margin-right:10px;"></span>Showcases<span class="caret" style="margin-left:10px;"></span></a> 
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{URL::to('admin/manage_showcase_bg')}}"><span class="glyphicon glyphicon-book" style="margin-right:10px;"></span>Background</a></li>
						<li><a href="{{URL::to('admin/manage_showcase')}}"><span class="glyphicon glyphicon-book" style="margin-right:10px;"></span>Content</a></li>
					</ul>
				</li>
				<li><a href="{{URL::to('admin/manage_material')}}"><span class="glyphicon glyphicon-tags" style="margin-right:10px;"></span>Material</a></li> 
				<li><a href="{{URL::to('admin/manage_contact')}}"><span class="glyphicon glyphicon-phone-alt" style="margin-right:10px;"></span>Contacts</a></li>

				<li><a href="{{URL::to('admin/manage_user')}}"><span class="glyphicon glyphicon-user" style="margin-right:10px;"></span>Users</a></li>


			</ul>
			<span class="pull-right" id="f_clock" style="margin-right: 10px; line-height: 50px; "></span>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>