<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'header.php';?>
		<?php include 'rezultate_populare.php';?>
	</head>
  <body role="document">
	<?php include 'menu.php';?>
	<div class="container" role="main">
		<div class="jumbotron">
			<h1>Rezultate</h1>
			<p>Rezultate concursuri de casa Bridge Club Iasi si Arhiva 2004-2014.</p>
			<p><a id="br_rezultate_info_button" role="button" class="btn btn-lg btn-default" href="#" onClick="hide('br_rezultate_arhiva');toggle('br_rezultate_info');"><?php echo gmdate("Y-m-d", $newstFileDate);?></a><a role="button" id ="br_rezultate_arhiva_button" class="btn btn-lg btn-default" href="#" onClick="hide('br_rezultate_info'); toggle('br_rezultate_arhiva');">Arhiva</a></p>	
		</div>
		<div id="br_rezultate_info" class="well" style="display: none">
				<?php readfile('arhiva/' . $newstFile);?>
		</div>		
			<div id="br_rezultate_arhiva" class="well" style="display: none">
			<div class="row">
					<div class="col-md-4">
						
							<?php
								foreach($archive as $contestDate => $contestFile){
									echo "<a role=\"button\" class=\"btn btn-lg btn-default\" href=\"#\" onClick=\"showContest('". $contestFile ."');\">" . gmdate("Y-m-d", $contestDate) ."</a>";
								}
							?>
					</div>
					<div class="col-md-8">
						<div id="br_rezultate_contest" style="display: none">
						
						</div>		
					</div>
				</div>
			</div>
		</div>
				
		
		
		
	</div>

	<?php include 'footer.php';?>
	
  </body>
</html>
