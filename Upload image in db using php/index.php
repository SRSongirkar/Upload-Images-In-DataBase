<html>		
	<body>		
		<center><h2><i style="color:orange">Enter Your Details Here:></i></h2></center>
	     <center>   <form method="POST" action="upload.php" enctype="multipart/form-data">
	        	<table style="border:10px solid skyblue">
		            <tr><th>FirstName:</th><td><input type="text" id="clientname" name="fname"><br><br></td></tr>
		            <tr><th>Enter Shop Address:-</th>
                    <td><textarea rows="2" cols="10" name="addr"placeholder="Enter Your Address"style="margin: 0px; width: 168px; height: 33px;"></textarea><br></td></tr>
		            <tr><th>Contact-No:</th><td><input type="text" id="contact" name="cont"><br><br></td></tr>
		            
                   <!-- <tr><th>Select City:</th>
                    <td><select>
                    <option value="" selected="selected"  name="city"disabled="disabled" placeholder="Select your City"></option>
                    <option value="1">Jalgaon</option>
					<option value="1">Bhusawal</option>
					<option value="1">Nashik</option>
					<option value="1">Pune</option>
					<option value="1">Mumbai West</option>
					<option value="1">Mubai East</option><br>

                   </select></td></tr>-->
				   <tr><th>Upload your pic:</th>
					<td><input type="file" name="file"placeholder="Enter Your Pic" /></td></th>
	            </table>
	            <input type="submit" value="submit" class="btn btn-primary" name="submit">
	        </form>
			
			<form method="POST" action="Show.php">
					 <input type="submit" value="View Data" class="btn btn-primary" name="show">
			</form></center>
			
			
	</body>
</html>	