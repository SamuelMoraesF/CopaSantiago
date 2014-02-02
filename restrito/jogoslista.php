<?php

include 'header.php';

echo '

<div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th style="text-align:center;"></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th style="text-align:center;"></th>
      <th>Data</th>
      <th>Hora</th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>';
		
	$sql = "SELECT * FROM `jogos` ORDER BY `quando` ASC ";

	$query = mysql_query($sql);

	while($sql = mysql_fetch_array($query)){
	
		$id = $sql["id"];
	
		$time1 = $sql["time1"];
		
		$quando = $sql["quando"];
		
		$tipo = $sql["tipo"];
		
		if($tipo == '0'){$tipo = 'Normal';}
		else if($tipo == '4'){$tipo = 'Quartas-de-final';}
		else if($tipo == '2'){$tipo = 'Semifinal';}
		else if($tipo == '1'){$tipo = 'Final';}
		
		$time2 = $sql["time2"];
		
		$aconteceu = $sql["aconteceu"];
		
		$gol1 = $sql["gol1"];
		
		$hora = $sql["hora"];
		
		$gol2 = $sql["gol2"];

			$sqltime1 = "SELECT * FROM `times` WHERE `id` =".$time1." LIMIT 0 , 1";

			$querytime1 = mysql_query($sqltime1);
			
			$sqltime1 = mysql_fetch_array($querytime1);
			
			$logotime1 = $sqltime1["logo"];
			
			$nometime1 = $sqltime1["time"];
			
			$abrtime1 = $sqltime1["abr"];
					
		echo "<tr>";
		
		echo '<td>'.$id.'</td>';
		
		echo '<td style="text-align:center;"><img src="'.$logotime1.'" alt="'.$nometime1.'" style="height:50px;"></td>';
		
		echo '<td>'.$abrtime1.'</td>';
		
		if($aconteceu == '0'){
		
			echo '<td> - </td>';
		
		} else {
		
			echo '<td>'.$gol1.'</td>';
		
		}

		echo '<td><b>  - </b></td>';
		
		if($aconteceu == '0'){
		
			echo '<td> - </td>';
		
		} else {
		
			echo '<td>'.$gol2.'</td>';
		
		}
		
			$sqltime2 = "SELECT * FROM `times` WHERE `id` =".$time2." LIMIT 0 , 1";

			$querytime2 = mysql_query($sqltime2);
			
			$sqltime2 = mysql_fetch_array($querytime2);
			
			$logotime2 = $sqltime2["logo"];
			
			$nometime2 = $sqltime2["time"];
			
			$abrtime2 = $sqltime2["abr"];

		echo '<td>'.$abrtime2.'</td>';
		
		echo '<td style="text-align:center;"><img src="'.$logotime2.'" alt="'.$nometime2.'" style="height:50px;"></td>';

		echo '<td>';
		
		echo substr( $quando, 6, 8 );
		
		echo ' de ';
		
		
		$mes2 = substr( $quando, 4, 2 );
		
		if($mes2 == '1'){echo 'Janeiro';}
		else if($mes2 == '2'){echo 'Fevereiro';}
		else if($mes2 == '3'){echo 'Março';}
		else if($mes2 == '4'){echo 'Abril';}
		else if($mes2 == '5'){echo 'Maio';}
		else if($mes2 == '6'){echo 'Junho';}
		else if($mes2 == '7'){echo 'Julho';}
		else if($mes2 == '8'){echo 'Agosto';}
		else if($mes2 == '9'){echo 'Setembro';}
		else if($mes2 == '10'){echo 'Outubro';}
		else if($mes2 == '11'){echo 'Novembro';}
		else if($mes2 == '12'){echo 'Dezembro';}
		
		echo ' de ';
		
		echo substr( $quando, 0, 4 );
		
		echo '</td>';
		
		echo '<td>';
		
		$quantashoras = strlen($hora);
		
		if($quantashoras == '3') {
		
		echo substr( $hora, 0, 1 );
		
		echo ':';
		
		echo substr( $hora, 1, 2 );
		
		} else if($quantashoras == '4') {
				
		echo substr( $hora, 0, 2 );
		
		echo ':';
		
		echo substr( $hora, 2, 3 );
		
		}
		
		echo '</td>';		
		
		echo '<td>'.$tipo.'</td>';
		
		echo '<td><a class="btn btn-warning dropdown-toggle" href="'.$siteurl.'/restrito/jogoencerra.php?id='.$id.'">Inserir/Editar Placar</a></td>';
		
		echo '<td><a class="btn btn-danger dropdown-toggle" href="'.$siteurl.'/restrito/jogosdel.php?id='.$id.'">Excluir</a></td>';
		
		echo '<td><a class="btn btn-primary dropdown-toggle" href="'.$siteurl.'/restrito/jogosedit.php?acao=edit&id='.$id.'">Editar</a></td>';
		
		echo '</tr>';
	}
    
echo '  </tbody>
</table>

</div>



';

include 'footer.php';

?>