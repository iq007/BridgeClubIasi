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
			<p>Rezultate concursuri de casa Bridge Club Iasi si Arhiva 2004-2016.</p>
			<p>
				<a id="br_rezultate_info_button" role="button" class="btn btn-lg btn-default" href="#" onClick="hide([ 'br_rezultate_arhiva', 'br_clasament_an_curent']);toggle('br_rezultate_info');"><?php echo gmdate("Y-m-d", $newstFileDate);?></a>
				<a role="button" id ="br_rezultate_arhiva_button" class="btn btn-lg btn-default" href="#" onClick="hide(['br_rezultate_info', 'br_clasament_an_curent']); toggle('br_rezultate_arhiva');">Arhiva</a>
				<a role="button" id ="br_clasament_an_curent_button" class="btn btn-lg btn-default" href="#" onClick="hide(['br_rezultate_info', 'br_rezultate_arhiva' ]); toggle('br_clasament_an_curent');">Clasament Club Iasi 2016</a>

			</p>
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
		<div id="br_clasament_an_curent" class="well" style="display: none">
			Clasament 2016 - Updated 2016-05-17 - <a href="https://drive.google.com/file/d/0B8ekIUhV__dNWThSQ0VJc1p0RDQ/view?usp=sharing" target="_blank">Link sursa</a>
			</br></br>
			<div class="table-responsive">
				<table id="clasament">
					<thead>
					<tr>
						<th data-field="Loc">Loc</th>
						<th data-field="Nume">Nume</th>
						<th data-field="PE">P.E.</th>
					</tr>
					</thead>
				</table>
			</div>

			<script>
				$(document).ready(function(){
					$.ajax({ url: 'controllers/rezultateController.php',
						data: {action: 'clasament'},
						type: 'get',
						success: function(output) {
							var $table = $('#clasament');
							$table.bootstrapTable({data: JSON.parse(output)});
						}
					});
				});
			</script>

		</div>
	</div>



	<?php include 'footer.php';?>
	
  </body>
</html>
