<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type="text/css">
	td{
		text-align: center;
	}
</style>
</head>

<?php
		require "init.php";
		$result=mysqli_query($con,"SELECT * FROM dangerzone WHERE 1");
while($row=mysqli_fetch_array($result))
{
echo'<center><table style="width:90%;border-style: solid;border-width:3px;">
	<tr>
		<td>
			<tr>
				<td>
					Latitude:
				</td>
				<td>
					Longitude:
				</td>
				<td>
					Range:
				</td>
			</tr>
			<tr>
				<td>
					'.$row['latitude'].'
				</td>
				<td>
					'.$row['longitude'].'
				</td>
				<td>
					'.$row['radius'].'
				</td>
			</tr>
		</td>
	</tr>
	<tr>
		<td style="width:80%;"><b>Address:'.$row['address'].'</b></td>
	</tr>
	<tr>
		<td class="remove" id='.$row['dno'].'>REMOVE</td>
	</tr>
</table>
</center>';
}
?>

<script>
	$(".remove").click(function(){
		var this_id=$(this).attr("id");
		
		$.ajax({
			type:"POST",
			url:"remove_danger_zone.php",
			data:'dno='+this_id,
			cache:false,
			success:function(data){
				$("#list-content").load("listDangerZone.php");
			}//result fnction close
		});

	});
</script>