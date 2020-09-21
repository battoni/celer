<nav class="navbar topnav cl_topnav" role="navigation" aria-label="main navigation">

	<div class="navbar-brand">

		<a class="navbar-item" href="./">
			<!-- Add your logo here -->
		</a>

		<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainNav">

			<span class="topnav-burger" aria-hidden="true"></span>
			<span class="topnav-burger" aria-hidden="true"></span>
			<span class="topnav-burger" aria-hidden="true"></span>
			
		</a>

	</div>

	<div id="mainNav" class="navbar-menu">

		<div class="navbar-start"></div>

		<div class="navbar-end">

			<a class="navbar-item <?php if(constant('page') == 'index') echo "active"; ?>" href="/">Home</a>
			
		</div>

	</div>
	
</nav>
