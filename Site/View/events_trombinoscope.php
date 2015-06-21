<!DOCTYPE html>
<html>

<?php
	include 'header.php';
	include 'head.html';
	include 'dashboard.php';
?>
<body>
	<section class="section-content">
		<div class="content">

		<!-- content page -->
		<article class="content-page">
			<!-- main page, you're application here -->
			<div class="main-page">
				<div class="content-inner">

						<div class="container-fluid">
							<h1 class="modal-title" align=center>Evenements</h1>
							<div class="row-fluid">
								<div class="span8"><center>
<?php
	include '..\Controller\events_trombinoscope.php';
?>

					</center>
								</div>
							</div>
						</div>


					</div>
				</div>
			</article>



	    </div>
	</section>
	<!-- /end section content-->	
</body>
<?php
	include 'footer.html';
?>
</html>