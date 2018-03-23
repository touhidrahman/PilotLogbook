<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-radius: 0px;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url();?>"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;PILOT LOGBOOK</a>
		</div>
		<div class="navbar-collapse collapse">
		      
			<ul class="nav navbar-nav navbar-right">

				<li><a href="<?php echo site_url(); ?>">Add New</a>
				<li><a href="<?php echo site_url('view'); ?>">View Logbook</a>
				<li><a href="<?php echo site_url('search'); ?>">Search</a>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php echo (isset($_SESSION['name']))? $_SESSION['name'] : "<span class='glyphicon glyphicon-cog'></span>"; ?> <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<?php /* PRO FEATURE
						<li><a href="<?php echo site_url('account/changePassword');?>">Change Password</a></li>
						*/
                        ?>
						
						<li><a href="<?php echo site_url('help');?>">Donate & ask UserID</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo site_url('account/logout');?>">Logout</a></li>
					</ul></li>
			</ul>

		</div>
		<!--/.nav-collapse -->
	</div>
</div>