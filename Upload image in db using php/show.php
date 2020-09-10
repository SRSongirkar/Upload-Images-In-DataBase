
<center>
<h1> Submitted Data </h1>
<?php

								$con=mysqli_connect("localhost","root","","testing");
								
								$sql="describe test";
								$q_display="select * from test";
								
								$re=mysqli_query($con,$sql);
								$query_display=mysqli_query($con,$q_display);
		
								
								
								
	echo"<table border=70 >
	<tr>
	
	</tr>";
	echo"<tr>";
	while($col=mysqli_fetch_array($re))
	{
		
		
			echo"<td><b>".$col["Field"]."</b></td>";
		
		
	}
	echo"</tr>";
								
								
							
										
								
								
								while($res=mysqli_fetch_array($query_display))
								{
												echo"<tr>";

									?>
											
												<td><?php echo $res['id']?></td>
												
												<td><?php echo $res['fname']?></td>
												
												<td><?php echo $res['addr']?></td>
												
												<td><?php echo $res['cont']?></td>
												
												<td><img src="<?php echo $res['pic']?>"style="height:100px; width:100px;"></td>
											 
				

									<?php
								echo"</tr>";
								}
						?>
		
					
				</table>							
				</center>