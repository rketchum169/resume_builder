<html>
	<body>
		<!-- This is the top page information --!>
		<?php
			echo "<br />";
			echo "{$_POST["name"]} <br />";
			echo "{$_POST["number"]} <br />";
			echo "{$_POST["email"]} <br />";
			echo "{$_POST["web"]} <br />";
			echo "{$_POST["education"]} <br />";
			echo "<br />";
			var_dump($_POST);
		?>
		<!-- This is the top page information --!>	
	<h2>Experience</h2>
		<?php
			echo "{$_POST["position1"]} <br />";
			echo "{$_POST["start_date1"]} <br />";
			echo "{$_POST["end_date1"]} <br />";
			echo "{$_POST["duties1"]} <br />";
			echo "<br />";
			
			echo "{$_POST["position2"]} <br />";
			echo "{$_POST["start_date2"]} <br />";
	    echo "{$_POST["end_date2"]} <br />";  
      echo "{$_POST["duties2"]} <br />";	
			echo "<br />";

			echo "{$_POST["position3"]} <br />";
	    echo "{$_POST["start_date3"]} <br />";       
		  echo "{$_POST["end_date3"]} <br />";          
		  echo "{$_POST["duties3"]} <br />";
      echo "<br />";

			echo "{$_POST["position4"]} <br />";
			echo "{$_POST["start_date4"]} <br />";       
			echo "{$_POST["end_date4"]} <br />";          
			echo "{$_POST["duties4"]} <br />";
			echo "<br />";
		?>
	</body> 
</html>

