<?php

include 'header.php';

echo '

<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Time</th>
      <th style="text-align:center;">Logo</th>
      <th>Slug</th>
      <th>Grupo</th>
      <th>Abreviação</th>
      <th>Apagar</th>
    </tr>
  </thead>';
		
	$sql = "SELECT * FROM `times`";

	$query = mysql_query($sql);

	while($sql = mysql_fetch_array($query)){
	
		$id = $sql["id"];
		$time = $sql["time"];
		$logo = $sql["logo"];
		$slug = $sql["slug"];
		$grupo = $sql["grupo"];
		$abr = $sql["abr"];
		
		echo "<tr>";
		
		echo '<td>'.$id.'</td>';
		echo '<td>'.$time.'</td>';
		echo '<td style="text-align:center;"><img style="height:50px;" src="'.$logo.'" alt="'.$time.'"></td>';
		echo '<td>'.$slug.'</td>';
		echo '<td>'.$grupo.'</td>';
		echo '<td>'.$abr.'</td>';
		echo '<td><a href="'.$siteurl.'/restrito/timesdel.php?id='.$id.'" class="btn btn-danger">Apagar</a></td>';
		
		echo '</tr>';
	}
    
echo '  </tbody>
</table>

</div>



';

include 'footer.php';

?>