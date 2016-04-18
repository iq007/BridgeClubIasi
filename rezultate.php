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
			Clasament 2016 - Updated 2016-04-17 - <a href="https://drive.google.com/file/d/0B8ekIUhV__dNelZndDdleHhiNE0/view?ts=570ca593" target="_blank">Link sursa</a>
			</br></br>
			<pre>
				Loc	ID	Nume	P.E.
				1	5	Filimon Adrian		1224
				2	74	Barbir Gabi		917
				3	1	Zavloschi Adrian		844
				4	2	Olteanu Romeo		844
				5	6	Matoianu Luigi		768
				6	11	Rosu Ovidiu		728
				7	7	Chipail Gheorghe		702
				8	16	Gradinaru Vasile		675
				9	9	Andarache Temistocle	667
				10	55	Furtuna Florin		645
				11	70	Constantinescu Razvan	643
				12	81	Ceia Titus		643
				13	22	Stefan Iancu		607
				14	135	Rugina Andrei		464
				15	12	Bordei Vasile		384
				16	3	Nutescu Bogdan		379
				17	68	Panaite Tiberiu		345
				18	4	Piroi Andrei		322
				19	20	Filimon Irina		271
				20	77	Kristo Robert		264
				21	78	Bogdan Ionescu		264
				22	10	Loghin Ionica		236
				23	36	Chitovanu Ovidiu		224
				24	14	Iorgu Droin		213
				25	32	Prisecaru Teodor 	178
				26	126	Alexandrescu Ciresica	165
				27	76	Eva Razvan		140
				28	73	Cristian Chertic		132
				29	35	Sfichi Roxana		132
				30	56	Hary Goldemberg		109
				31	66	Paraschiv Danuta		91
				32	100	Toderica Paula		72
				33	17	Simiuc Liviu		40
				34	19	Boboc Andreea		26
			</pre>

		</div>
	</div>



	<?php include 'footer.php';?>
	
  </body>
</html>
