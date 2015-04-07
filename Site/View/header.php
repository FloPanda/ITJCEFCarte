<!-- start header-->
<header class="header">
	<!-- start navbar, this navbar on top -->
	<div id="navbar-top" class="navbar navbar-cyan">
		<!-- navbar inner-->
		<div class="navbar-inner">
			<!-- container-->
			<div class="container">
				
				<!--this btn-navbar contains the menu on the side-left, will be seen on portrait tablet and less. -->
				<a class="btn btn-navbar help-inline" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<!-- Your brand here, images or text -->
				<a class="brand" href="index.html">
					<!-- just a sample brand, replace with your own -->
					<i class="aweso-th-large"></i> JCEF 
				</a>
				
				<!-- Un-collapse nav -->
				<div class="nav-uncollapse">
					<!-- pull left menu-->
					<ul class="nav pull-left hidden-phone">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="aweso-plus-sign aweso-large"></i> &nbsp;Create <i class="aweso-angle-down"></i>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="#">Page</a></li>
								<li><a tabindex="-1" href="#">Post</a></li>
								<li><a tabindex="-1" href="#">User</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#">Task</a></li>
								<li><a tabindex="-1" href="#">Create Something</a></li>
							</ul>
						</li>
					</ul><!--/pull left menu-->

					<!-- pull right menu-->
					<ul class="nav pull-right">
						<!-- notification -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<div class="label">3</div>
								<i class="aweso-bell-alt"></i>
							</a>
							<ul class="dropdown-menu dropdown-extend" role="menu" aria-labelledby="dropdownMenu">
								<li class="dropdown-header">You have 4 new notofications</li>
								<li>
									<a tabindex="-1" href="#">
										<div class="media">
											<div class="pull-left">
												<img class="media-object" data-src="holder.js/32x32">
											</div>
											<div class="media-body">
												<h4 class="media-heading"><small class="pull-right">Just Now</small> Update version</h4>
												<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque...</p>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a tabindex="-1" href="#">
										<div class="media">
											<div class="pull-left">
												<img class="media-object" data-src="holder.js/32x32">
											</div>
											<div class="media-body">
												<h4 class="media-heading"><small class="pull-right">5 minutes</small> Jane Smith</h4>
												<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit...</p>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a tabindex="-1" href="#">
										<div class="media">
											<div class="pull-left">
												<img class="media-object" data-src="holder.js/32x32">
											</div>
											<div class="media-body">
												<h4 class="media-heading"><small class="pull-right">3 hours</small> New comment</h4>
												<p>Tellus ac cursus commodo, tortor mauris condimentum nibh...</p>
											</div>
										</div>
									</a>
								</li>
								<li class="dropdown-footer">
									<a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i> See all notifications</a>
								</li>
							</ul>
						</li><!-- /notification -->
						
					   
						
						<!-- settings -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="aweso-cog"></i>
							</a>
							<ul class="dropdown-menu dropdown-extend" data-dropdown="no-propagation" role="menu" aria-labelledby="dropdownMenu">
								<li class="dropdown-header">General settings</li>
								
								<li>
									<div class="setting-list">
										<div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
										<div class="content">Fixed Header</div>
										<div class="checker">
											<div class="checkbox-slide bg-silver help-block">
												<input class="input-fx" type="checkbox" id="header-mode" name="header-mode" />
												<label for="header-mode"></label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="setting-list">
										<div class="icon"><i class="aweso-2x aweso-pushpin"></i></div>
										<div class="content">Fixed Sidebar</div>
										<div class="checker">
											<div class="checkbox-slide bg-silver help-block">
												<input class="input-fx" type="checkbox" id="sidebar-mode" name="sidebar-mode"  />
												<label for="sidebar-mode"></label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="setting-list">
										<div class="icon"><i class="aweso-2x color-silver aweso-sign-blank"></i></div>
										<div class="content">Light theme</div>
										<div class="checker">
											<div class="checkbox-slide bg-silver help-block">
												<input class="input-fx" type="radio" value="light" id="theme-light" name="theme-mode" checked />
												<label for="theme-light"></label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="setting-list">
										<div class="icon"><i class="aweso-2x aweso-sign-blank"></i></div>
										<div class="content">Dark theme</div>
										<div class="checker">
											<div class="checkbox-slide bg-silver help-block">
												<input class="input-fx" type="radio" value="dark" id="theme-dark" name="theme-mode" />
												<label for="theme-dark"></label>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="setting-list">
										<div class="icon"><i class="aweso-2x aweso-tint"></i></div>
										<div class="content">Syncronize</div>
										<div class="checker">
											<div class="checkbox-slide bg-silver help-block">
												<input class="input-fx" type="checkbox" id="syncronize-theme" name="syncronize-theme" checked />
												<label for="syncronize-theme"></label>
											</div>
										</div>
									</div>
								</li>
								<li class="syncronize">
									<div class="setting-list">
										<div class="themes-label">Theme colors</div>
										<div class="themes-choice">
											<a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
											<a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
											<a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
											<a href="#violet" data-theme="violet" class="bg-violet"></a>
											<a href="#lime" data-theme="lime" class="bg-lime"></a>
											<a href="#green" data-theme="green" class="bg-green"></a>
											<a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
											<a href="#teal" data-theme="teal" class="bg-teal"></a>
											<a href="#pink" data-theme="pink" class="bg-pink"></a>
											<a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
											<a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
											<a href="#red" data-theme="red" class="bg-red"></a>
											<a href="#orange" data-theme="orange" class="bg-orange"></a>
											<a href="#amber" data-theme="amber" class="bg-amber"></a>
											<a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
											<a href="#brown" data-theme="brown" class="bg-brown"></a>
											<a href="#olive" data-theme="olive" class="bg-olive"></a>
											<a href="#steel" data-theme="steel" class="bg-steel"></a>
											<a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
											<a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
											<a href="#black" data-theme="inverse" class="bg-black"></a>
											<a href="#silver" data-theme="silver" class="bg-silver"></a>
										</div>
									</div>
								</li>
								<li class="unsyncronize hide">
									<div class="setting-list">
										<div class="themes-label">Navbar colors</div>
										<div class="themes-choice themes-navbar">
											<a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
											<a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
											<a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
											<a href="#violet" data-theme="violet" class="bg-violet"></a>
											<a href="#lime" data-theme="lime" class="bg-lime"></a>
											<a href="#green" data-theme="green" class="bg-green"></a>
											<a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
											<a href="#teal" data-theme="teal" class="bg-teal"></a>
											<a href="#pink" data-theme="pink" class="bg-pink"></a>
											<a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
											<a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
											<a href="#red" data-theme="red" class="bg-red"></a>
											<a href="#orange" data-theme="orange" class="bg-orange"></a>
											<a href="#amber" data-theme="amber" class="bg-amber"></a>
											<a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
											<a href="#brown" data-theme="brown" class="bg-brown"></a>
											<a href="#olive" data-theme="olive" class="bg-olive"></a>
											<a href="#steel" data-theme="steel" class="bg-steel"></a>
											<a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
											<a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
											<a href="#black" data-theme="inverse" class="bg-black"></a>
											<a href="#silver" data-theme="silver" class="bg-silver"></a>
										</div>
									</div>
								</li>
								<li class="unsyncronize hide">
									<div class="setting-list">
										<div class="themes-label">Sidebar colors</div>
										<div class="themes-choice themes-sidebar">
											<a href="#cyan" data-theme="cyan" class="bg-cyan"></a>
											<a href="#cobalt" data-theme="cobalt" class="bg-cobalt"></a>
											<a href="#indigo" data-theme="indigo" class="bg-indigo"></a>
											<a href="#violet" data-theme="violet" class="bg-violet"></a>
											<a href="#lime" data-theme="lime" class="bg-lime"></a>
											<a href="#green" data-theme="green" class="bg-green"></a>
											<a href="#emerald" data-theme="emerald" class="bg-emerald"></a>
											<a href="#teal" data-theme="teal" class="bg-teal"></a>
											<a href="#pink" data-theme="pink" class="bg-pink"></a>
											<a href="#magenta" data-theme="magenta" class="bg-magenta"></a>
											<a href="#crimson" data-theme="crimson" class="bg-crimson"></a>
											<a href="#red" data-theme="red" class="bg-red"></a>
											<a href="#orange" data-theme="orange" class="bg-orange"></a>
											<a href="#amber" data-theme="amber" class="bg-amber"></a>
											<a href="#yellow" data-theme="yellow" class="bg-yellow"></a>
											<a href="#brown" data-theme="brown" class="bg-brown"></a>
											<a href="#olive" data-theme="olive" class="bg-olive"></a>
											<a href="#steel" data-theme="steel" class="bg-steel"></a>
											<a href="#mauve" data-theme="mauve" class="bg-mauve"></a>
											<a href="#taupe" data-theme="taupe" class="bg-taupe"></a>
											<a href="#black" data-theme="inverse" class="bg-black"></a>
											<a href="#silver" data-theme="silver" class="bg-silver"></a>
										</div>
									</div>
								</li>
								<li class="dropdown-footer">
									<a tabindex="-1" href="#"><i class="aweso-angle-right pull-right"></i>Settings page</a>
								</li>
							</ul>
						</li><!-- /settings -->
						
						
						
						<!-- account -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								
									
								<?php
								
									if (isset($_POST))
									{
										if(!empty($_POST))
										{
										$uname=$_POST['uname'];
										
										$link = mysqli_connect('localhost','root','',"jcef-bdd"); 
										$chaine="SELECT * FROM user WHERE user_name='".$uname."'";
										$sql=mysqli_query($link,$chaine);

										
										while($row = mysqli_fetch_array($sql))
										{
											print $row['user_name']." - ".$row['user_password'];
										}
										
										}	
										
									}
									else
									{
										echo "charlie";
									}
								?>
								
								<script>
								if(localStorage.getItem('username')===null)
								{
									document.write("Invite");
								}
								else 
								{
									var username = localStorage.username;
									document.write("Bonjour,".username);
								}
								</script>
								
								<i class="aweso-angle-down"></i>
								
								
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							
								<script>
								if(localStorage.getItem('username')===null)
								{
									document.write("<li><a tabindex='-1' href='#'>Login</a></li>");
								}
								else 
								{
									var username = localStorage.username;
									document.write("<li><a tabindex='-1' href='#'>P</a></li><li class='divider'></li><li><a tabindex='-1' href='page-login.html'>Logout</a></li>");
								}
								</script>
							
								
							</ul>
						</li><!-- /account -->
					</ul><!--/pull right menu-->
				</div><!-- /uncollapse nav -->
				
				<!-- Everything you want hidden at 940px or less, leave it blank! (this use when side-left collapse) -->
				<div id="navbar-collapse" class="nav-collapse collapse hidden-desktop"></div>
				
			</div><!--/container-->
		</div><!--/navbar-inner-->
		
	</div> <!--/ navbar-->
</header> <!--/ end header-->