<html>
 <style>
    body {
				 float: center;
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
 <h1>Welcome to the Resume Builder 3000</h1>
 <form action="/resume.php" method="POST">
	<h2>Contact</h2>
<hr align="left">
	 <label>Full Name:</label>
	 <input type="text" value="" name="name" />
	<br>
	 <label>Phone Number:</label>
	 <input type="tell" value="" name="number" />
  <br>
	 <label>Email:</label>
	 <input type="email" value="" name="email" />
  <br>
	 <label>Github URL:</label>
	 <input type="url" value="" name="web" />
 <br>
 <label>Highest Level of Education:</label>
	 <select type="text" name="education" form="education">
		<option value="Highschool">Highschool</option>
		<option value="G.E.D.">G.E.D.</option>
		<option value="Associates">Associates</option>
		<option value="Bachelors">Bachelors</option>
		<option value="Masters">Masters</option>
		<option value="Ph.D.">Ph.D.</option>
	 </select>
 <br>
<h2>Experience</h2>
<hr align="left">
	 <!–– This the first experience ––>
			<label>Positgion</label>
			<input type="text" value="" name="position1" />
			<label>Start Date</label>
			<input type="date" value="" name="start_date1" />
			<label>End Date</label>
			<input type="date" value="" name="end_date1" />
		<br>
			<label>Responsibilities</label>
		<br>
			<textarea name="duties1_1"></textarea>
		<br>
			<textarea name="duties1_2"></textarea>
		<br>
			<textarea name="duties1_3"></textarea> 
		<br>
 <!–– This the second experience ––>
		 <label>Position</label>
		 <input type="text" value="" name="position2" />
		 <label>Start Date</label>
		 <input type="date" value="" name="start_date2" />
		 <label>End Date</label>
		 <input type="date" value="" name="end_date2" />
		<br>
			<label>Responsibilities</label>
		<br>
			<textarea name="duties2_1"></textarea>
		<br>
			<textarea name="duties2_2"></textarea>
		<br>
			<textarea name="duties2_3"></textarea>
 <br>
 <!–– This the third experience ––>
		 <label>Position</label>
		 <input type="text" value="" name="position3" />
		 <label>Start Date</label>
		 <input type="date" value="" name="start_date3" />
		 <label>End Date</label>
		 <input type="date" value="" name="end_date3" />
		<br>
			<label>Responsibilities</label>
		<br>
			<textarea name="duties3_1"></textarea>
		<br>
			<textarea name="duties3_2"></textarea>
		<br>
			<textarea name="duties3_3"></textarea>
 <br>
 <!–– This the fourth experience ––>
		 <label>Position</label>
		 <input type="text" value="" name="position4" />
		 <label>Start Date</label>
		 <input type="date" value="" name="start_date4" />
		 <label>End Date</label>
		 <input type="date" value="" name="end_date4" />
		<br>
			<label>Responsibilities</label>
		<br>
			<textarea name="duties4_1"></textarea>
		<br>
			<textarea name="duties4_2"></textarea>
		<br>
			<textarea name="duties4_3"></textarea>
 <br>
<hr align="left">
 <!–– Submit Button ––>
 <input type="submit" value="Submit" />
 </form>
 </body>
</html>
