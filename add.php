<?php
	$itm = $_GET["itm"];
	$Q = $_GET["Q"];
	$con = mysqli_connect('localhost','root','','pickup');
	$q = "Select * from items where iname = '$itm'";
	$rs = mysqli_query($con,$q);
	while($row=mysqli_fetch_array($rs))
	{
		
		echo "<tr>
				<td> $row[iname] </td>
				<td> $Q </td>
				<td> $row[msp] </td>
				<td> ".$Q*$row["msp"]." </td>
			  </tr>";
	}
	// Query works if direclty used as form action instead of onclick	
?>
