<?php

include 'header.php';

echo '

<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th>Artilheiro</th>
      <th>Time</th>
      <th>Gols</th>
      <th></th>
    </tr>
  </thead>';
		
	$sql = "SELECT * FROM `artilheiro`";

	$query = mysql_query($sql);

	while($sql = mysql_fetch_array($query)){
	
		$artilheiro = $sql["artilheiro"];
		$time = $sql["time"];
		$gols = $sql["gols"];
		$id = $sql["id"];
		
		echo "<tr>";
		
		echo '<td>'.$artilheiro.'</td>';
		echo '<td>'.$time.'</td>';
		echo '<td>'.$gols.'</td>';
		echo '<td><a class="btn btn-danger" title="Excluir" href="'.$siteurl.'/restrito/artilheirosdel.php?id='.$id.'">Excluir</a></td>';
		echo '<td><a class="btn btn-warning" title="Editar" href="'.$siteurl.'/restrito/artilheirosedit.php?id='.$id.'">Editar</a></td>';
		
		
		echo '</tr>';
	}
    
echo '  </tbody>
</table>

</div>



';

include 'footer.php';

?>