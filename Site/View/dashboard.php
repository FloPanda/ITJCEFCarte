<html>

	<!-- side left, its part to menu on left-->
	<div id="navside" class="side-left" data-collapse="navbar">
		<!--<form class="form-inline search-module" action="?" method="post">
			<div class="input-append input-append-inline">
				<input name="search" class="input-block-level" type="text" placeholder="Type to search" />
				<button class="btn bg-cyan" type="button">
					<i class="aweso-search"></i>
				</button>
			</div>
		</form>-->
		<!--nav, this structure create with nav (find the bootstrap doc about .nav list) -->
		<ul class="nav nav-list">

			<?php
				if(isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin']==1)
				{
					echo('
						<li class="dropdown-list">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown-list">Panel Admin</a>
							<ul class="dropdown-menu">
								<li><a href="../View/add_user.php">Ajout Utilisateur</a></li>
								<li><a href="../View/add_event.php">Ajout Evenement</a></li>
								<li><a href="../View/add_commission.php">Ajout Commission</a></li>
								<li><a href="../Controller/statistiques.php">Statistiques</a></li>
								<!--<li><a href="../Controller/user_profil.php">page test</a></li>
								<li><a href="../Controller/event_detailled.php">page test</a></li>
								<li><a href="../Controller/commission_detailled.php">page test</a></li>-->
							</ul>
						</li>
						');
				}
			?>

			<li><a href="../View/trombinoscope.php">Trombinoscope</a></li>
			<li><a href="../View/events_trombinoscope.php">Events</a></li>
			<li><a href="../View/commissions_trombinoscope.php">Commissions</a></li>
			
		</ul><!-- /nav -->
	</div><!-- /side left-->
</html>