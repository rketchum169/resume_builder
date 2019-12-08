<html>
	<style>
		body {
			margin-left: 10%;
			font-family: "Arial";
		}	
		hr {
			width: 50%;
			height: 2px;
			color: #000000;
			
		}	
	</style>

	<body>
		<!-- This is the top page information --!>
		<br>
		<h1><?php	echo "{$_POST["name"]} <br />"; ?></h1>
		<hr align="left">
		<hr>
		<h5>
			<?php
			echo "{$_POST["number"]} <br />";
			echo "{$_POST["email"]} <br />";
			echo "{$_POST["web"]} <br />";
			echo "{$_POST["education"]} <br />";
			?>
		</h5>
		<!-- This is the start of Experience information --!>	
	<h2>Experience</h2>
	<hr align="left">
	<h3><?php	echo "{$_POST["position1"]} | {$_POST["start_date1"]} - {$_POST["end_date1"]}"; ?></h3>
			<h5>
				<?php
					echo "• {$_POST["duties1_1"]} <br />";
					echo "• {$_POST["duties1_2"]} <br />";
					echo "• {$_POST["duties1_3"]} <br />";
				?>
			</h5>
<br>
		<h3><?php	 echo "{$_POST["position2"]} | {$_POST["start_date2"]} - {$_POST["end_date2"]}"; ?></h3>
		<h5>
				<?php 
					echo "• {$_POST["duties2_1"]} <br />";
					echo "• {$_POST["duties2_2"]} <br />";
					echo "• {$_POST["duties2_3"]} <br />";	
				?>
		</h5>
<br>
		 <h3><?php echo "{$_POST["position3"]} | {$_POST["start_date3"]} - {$_POST["end_date3"]}"; ?> </h3>
		 <h5>
				<?php	
					echo "• {$_POST["duties3_1"]} <br />";
					echo "• {$_POST["duties3_2"]} <br />";
					echo "• {$_POST["duties3_3"]} <br />";
				?>
			</h5>
<br>
		<h3><?php echo "{$_POST["position4"]} | {$_POST["start_date4"]} - {$_POST["end_date4"]}"; ?></h3>
		<h5>
			<?php
				echo "• {$_POST["duties4_1"]} <br />";
				echo "• {$_POST["duties4_2"]} <br />";
				echo "• {$_POST["duties4_3"]} <br />";
			?>
		</h5>
<br>
		<?php
			var_dump($_POST);
		?>
	</body> 
</html>

