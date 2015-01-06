<?php

include 'config.php';


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $sitetitle ?></title>
    <script src="<?php echo $siteurl ?>/js/jquery.js"></script>
    <script src="<?php echo $siteurl ?>/js/bootstrap.min.js"></script>
    <link href="<?php echo $siteurl ?>/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $siteurl ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="<?php echo $siteurl ?>/js/html5shiv.js"></script>
      <script src="<?php echo $siteurl ?>/js/respond.min.js"></script>
    <![endif]-->
    <style>body {padding-top:60px;}
	.navbar .btn-warning span {
	    padding-right:10px;
	}
    </style>
  </head>
  <body>
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=636925102985266&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menutopo">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Copa Santiago</a>
    </div>

    <div class="collapse navbar-collapse" id="menutopo">
      <ul class="nav navbar-nav navbar-right" style="padding-right:20px;">
        <a href="http://www.nova99.com.br/player/player.php" class="btn btn-warning navbar-btn"><span class="glyphicon glyphicon-headphones"></span> Ouvir a Nova 99</a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <header class="header row">
  <div class="col-md-4">
  <img src="http://4.bp.blogspot.com/-AbfeE4SL3c4/UlG4x-FlI0I/AAAAAAAA7W4/s5OVRQ8ocIo/s1600/logo.jpg">
  </div>
  <div class="col-md-8">
 
  Copa Santiago
  </div>
  </header>
  
  	<div class="row global">
  		<div class="col-md-6 grupos">
		  	<h1>Grupo A</h1>
			<div class="table-responsive"><table class="table table-striped grupoa">
		           <thead>
			      <tr>
			         <th class="time">Time</th>
			         <th></th>
			         <th class="pontos">P</th>
			         <th class="jogos">J</th>
			         <th class="vitorias">V</th>
			         <th class="empates">E</th>
			         <th class="golspro">GP</th>
			         <th class="golscontra">GC</th>
			         <th class="saldogols">SG</th>
			      </tr>
			   </thead>
			   <tbody>
			     <?php
		
				$sql = "SELECT * FROM `times` WHERE `grupo` LIKE 'a' LIMIT 0 , 30";
				
				$query = mysql_query($sql);
		
				while($sql = mysql_fetch_array($query)){
					$time = $sql["time"];
					$logo = $sql["logo"];
					$id = $sql["id"];
					utf8_encode($time);
					echo '<tr><td>';
					echo '<img src="'.$logo.'" alt="'.$time.'" style="width:50px;"></td><td>';
					echo $time;
					echo '</td>';
					
						$pontos = 0;
						
						$jogo = 0;
						
						$vitorias = 0;
					
						$empate = 0;
						
						$golspro = 0;
						
						$golscontra = 0;
					
						$sqlinterno1 = "SELECT * FROM `jogos` WHERE `time1` LIKE '".$id."'";
				
						$queryinterno1 = mysql_query($sqlinterno1);
				
						while($sqlinterno1 = mysql_fetch_array($queryinterno1)){
					
							$pontos1 = $sqlinterno1["pontos1"];
							
							$pro1 = $sqlinterno1["pro1"];
							
							$contra1 = $sqlinterno1["contra1"];
						
							$pontos = $pontos1+$pontos;
							
							$golspro = $pro1+$golspro;
							
							$golscontra = $contra1+$golscontra;
							
							if($pontos1 == '3'){$vitorias++;}else if($pontos1 == '1'){$empate++;};
							
							//$jogo++;
						
						}
						//
						
						$sqlinterno2 = "SELECT * FROM `jogos` WHERE `time2` LIKE '".$id."'";
				
						$queryinterno2 = mysql_query($sqlinterno2);
				
						while($sqlinterno2 = mysql_fetch_array($queryinterno2)){
					
							$pontos2 = $sqlinterno2["pontos2"];
						
							$pro2 = $sqlinterno2["pro2"];
						
							$pontos = $pontos2+$pontos;
							
							$contra2 = $sqlinterno2["contra2"];
							
							$golspro = $pro2+$golspro;
							
							$golscontra = $contra2+$golscontra;
							
							if($pontos2 == '3'){$vitorias++;}else if($pontos2 == '1'){$empate++;};
							
							//$jogo++;
						
						}
						
						$sqlinterno21 = "SELECT * FROM `jogos` WHERE `time1` LIKE '".$id."' AND `aconteceu` =1";
				
						$queryinterno21 = mysql_query($sqlinterno21);
				
						while($sqlinternodata21 = mysql_fetch_array($queryinterno21)){
						
						$jogo++;
						
						}
						
						$sqlinterno22 = "SELECT * FROM `jogos` WHERE `time2` LIKE '".$id."' AND `aconteceu` =1";
				
						$queryinterno22 = mysql_query($sqlinterno22);
				
						while($sqlinternodata22 = mysql_fetch_array($queryinterno22)){
						
						$jogo++;
						
						}
						
					echo '<td>'.$pontos.'</td>';
					
					echo '<td>'.$jogo.'</td>';
					
					echo '<td>'.$vitorias.'</td>';
					
					echo '<td>'.$empate.'</td>';
					
					echo '<td>'.$golspro.'</td>';
					
					echo '<td>'.$golscontra.'</td>';
					
					$saldogol = $golspro - $golscontra;
					
					echo '<td>'.$saldogol.'</td>';					
					
					echo '</tr>';
				}
			     ?>
			   </tbody>
			 </table></div>
			 <h1>Grupo B</h1>
			 	<div class="table-responsive"><table class="table table-striped grupob">
		           <thead>
			      <tr>
			         <th class="time">Time</th>
			         <th></th>
			         <th class="pontos">P</th>
			         <th class="jogos">J</th>
			         <th class="vitorias">V</th>
			         <th class="empates">E</th>
			         <th class="golspro">GP</th>
			         <th class="golscontra">GC</th>
			         <th class="saldogols">SG</th>
			      </tr>
			   </thead>
			   <tbody>
			     
			     <?php
		
				$sql = "SELECT * FROM `times` WHERE `grupo` LIKE 'b' LIMIT 0 , 30";
				
				$query = mysql_query($sql);
				
				while($sql = mysql_fetch_array($query)){
					$time = $sql["time"];
					$id = $sql["id"];
					$logo = $sql["logo"];
					utf8_encode($time);
					echo '<tr><td>';
					echo '<img src="'.$logo.'" alt="'.$time.'" style="width:50px;"></td><td>';
					echo $time;
					
					echo '</td>';
					
					
						$pontos = 0;
						
						$jogo = 0;
						
						$vitorias = 0;
					
						$empate = 0;
						
						$golspro = 0;
						
						$golscontra = 0;
					
						$sqlinterno1 = "SELECT * FROM `jogos` WHERE `time1` LIKE '".$id."'";
				
						$queryinterno1 = mysql_query($sqlinterno1);
				
						while($sqlinterno1 = mysql_fetch_array($queryinterno1)){
					
							$pontos1 = $sqlinterno1["pontos1"];
							
							$pro1 = $sqlinterno1["pro1"];
							
							$contra1 = $sqlinterno1["contra1"];
						
							$pontos = $pontos1+$pontos;
							
							$golspro = $pro1+$golspro;
							
							$golscontra = $contra1+$golscontra;
							
							if($pontos1 == '3'){$vitorias++;}else if($pontos1 == '1'){$empate++;};
							
							//$jogo++;
						
						}
						//
						
						$sqlinterno2 = "SELECT * FROM `jogos` WHERE `time2` LIKE '".$id."'";
				
						$queryinterno2 = mysql_query($sqlinterno2);
				
						while($sqlinterno2 = mysql_fetch_array($queryinterno2)){
					
							$pontos2 = $sqlinterno2["pontos2"];
						
							$pro2 = $sqlinterno2["pro2"];
						
							$pontos = $pontos2+$pontos;
							
							$contra2 = $sqlinterno2["contra2"];
							
							$golspro = $pro2+$golspro;
							
							$golscontra = $contra2+$golscontra;
							
							if($pontos2 == '3'){$vitorias++;}else if($pontos2 == '1'){$empate++;};
							
							//$jogo++;
						
						}
						
												
						$sqlinterno21 = "SELECT * FROM `jogos` WHERE `time1` LIKE '".$id."' AND `aconteceu` =1";
				
						$queryinterno21 = mysql_query($sqlinterno21);
				
						while($sqlinternodata21 = mysql_fetch_array($queryinterno21)){
						
						$jogo++;
						
						}
						
						$sqlinterno22 = "SELECT * FROM `jogos` WHERE `time2` LIKE '".$id."' AND `aconteceu` =1";
				
						$queryinterno22 = mysql_query($sqlinterno22);
				
						while($sqlinternodata22 = mysql_fetch_array($queryinterno22)){
						
						$jogo++;
						
						}
						
					echo '<td>'.$pontos.'</td>';
					
					echo '<td>'.$jogo.'</td>';
					
					echo '<td>'.$vitorias.'</td>';
					
					echo '<td>'.$empate.'</td>';
					
					echo '<td>'.$golspro.'</td>';
					
					echo '<td>'.$golscontra.'</td>';
					
					$saldogol = $golspro - $golscontra;
					
					echo '<td>'.$saldogol.'</td>';
					
					echo '</tr>';
				}
			     ?>
			     
			   </tbody>
			 </table></div>
			 
			 <h1>Artilheiros</h1>
			 
			 <div class="list-group">

			 		<?php $sql = "SELECT * FROM `artilheiro` ORDER BY `gols` DESC";
				
					$query = mysql_query($sql);
				
					while($sqldata = mysql_fetch_array($query)){

						$sqlinterno = "SELECT * FROM `times` WHERE `id` LIKE '".$sqldata['time']."'";
				
						$queryinterno = mysql_query($sqlinterno);
				
						$sqlinternod = mysql_fetch_array($queryinterno);
						$timename = $sqlinternod["time"];
							
						echo '<li class="list-group-item"><span class="badge">'.$sqldata['gols'].' Gols</span><b>'.$sqldata['artilheiro'].'</b> - '.$timename.'</li>';

					} ?>
			</div>

			 <?php /* <div class="table-responsive"><table class="table table-striped">
			        <thead>
			          <tr>
			            <th>Artilheiro</th>
			            <th>Time</th>
			            <th style="text-align:center;">Gols</th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php
			        		
			        		
			        		$sql = "SELECT * FROM `artilheiro` ORDER BY `gols` DESC  ";
				
						$query = mysql_query($sql);
				
						while($sqldata = mysql_fetch_array($query)){
						
						$artilheiro = $sqldata["artilheiro"];
						
						$time = $sqldata["time"];
					
						$gols = $sqldata["gols"];
						
							
							$sqlinterno = "SELECT * FROM `times` WHERE `id` LIKE '".$time."'";
				
							$queryinterno = mysql_query($sqlinterno);
				
							while($sqlinternod = mysql_fetch_array($queryinterno)){
					
							$timename = $sqlinternod["time"];
							
							
					
							}
					
						echo '<tr>';
					
						echo '<td>'.$artilheiro.'</td>';
						
						echo '<td>'.$timename.'</td>';
						
						echo '<td class="gols" style="text-align:center;">'.$gols.'</td>';
							
						echo '</tr>';
						
						}	
						?>		    
			        </tbody>
			      </table></div> */ ?>
			      
			  <div id="comentario">
			  
			  
			  
			  </div>
				
		</div>
		<div class="col-md-6 jogos">
			<h1>Jogos</h1>
			<div class="table-responsive"><table class="table table-striped">
			        <tbody>
			        
			    <?php
		
				$sql = "SELECT * FROM `jogos` ORDER BY `quando` ASC ";
				
				$query = mysql_query($sql);
		
				while($sql = mysql_fetch_array($query)){
					$time1 = $sql["time1"];
					$tipo = $sql["tipo"];
					$time2 = $sql["time2"];
					$gol1 = $sql["gol1"];
					$hora = $sql["hora"];
					$gol2 = $sql["gol2"];
					$quando = $sql["quando"];
					$aconteceu = $sql["aconteceu"];
					
					
						$sqltime1data = "SELECT * FROM `times` WHERE `id` =".$time1." LIMIT 0 , 1";
				
						$querytime1data = mysql_query($sqltime1data);
		
						$sqltime1datainfo = mysql_fetch_array($querytime1data);
					
						$logotime1 = $sqltime1datainfo["logo"];
						
						$nametime1 = $sqltime1datainfo["time"];
						
						
						$sqltime2data = "SELECT * FROM `times` WHERE `id` =".$time2." LIMIT 0 , 1";
				
						$querytime2data = mysql_query($sqltime2data);
		
						$sqltime2datainfo = mysql_fetch_array($querytime2data);
					
						$logotime2 = $sqltime2datainfo["logo"];
						
						$nametime2 = $sqltime2datainfo["time"];
					
					echo '<tr class="'.$tipo.'">';
					
					echo '<td><img src="'.$logotime1.'" style="height:50px;"></td>';
					
					echo '<td>'.$nametime1.'</td>';
					
					if($aconteceu == '0'){echo '<td><span class="label label-danger">-</span></td>';}else{echo '<td><span class="label label-success">'.$gol1.'</span></td>';};
					
					echo '<td><b> - </b></td>';
					
					if($aconteceu == '0'){echo '<td><span class="label label-danger">-</span></td>';}else{echo '<td><span class="label label-success">'.$gol2.'</span></td>';};
					
					echo '<td>'.$nametime2.'</td>';
					
					echo '<td><img src="'.$logotime2.'" style="height:50px;"></td>';
					
					
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
					
					echo '</tr>';
				
				}
			     ?>
			        </tbody>
			      </table></div>

			    <h1>Comentários</h1>

				<div class="comments" style="width:100%;background:#fff;padding:20px;"><div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

		</div>
	</div>
	<script src="<?php echo $siteurl ?>/js/tabela.js"></script>
	<script>
	$('.grupoa .pontos').tooltip({placement:'top',title:'Pontos'})
	$('.grupoa .jogos').tooltip({placement:'top',title:'Jogos'})
	$('.grupoa .vitorias').tooltip({placement:'top',title:'Vitórias'})
	$('.grupoa .empates').tooltip({placement:'top',title:'Empates'})
	$('.grupoa .golspro').tooltip({placement:'top',title:'Gols Pró'})
	$('.grupoa .golscontra').tooltip({placement:'top',title:'Gols Contra'})
	$('.grupoa .saldogols').tooltip({placement:'top',title:'Saldo de gols'})
	$('.grupob .pontos').tooltip({placement:'top',title:'Pontos'})
	$('.grupob .jogos').tooltip({placement:'top',title:'Jogos'})
	$('.grupob .vitorias').tooltip({placement:'top',title:'Vitórias'})
	$('.grupob .empates').tooltip({placement:'top',title:'Empates'})
	$('.grupob .golspro').tooltip({placement:'top',title:'Gols Pró'})
	$('.grupob .golscontra').tooltip({placement:'top',title:'Gols Contra'})
	$('.grupob .saldogols').tooltip({placement:'top',title:'Saldo de gols'})
	</script>
   </body>
</html>
<?php mysql_close($conecta); ?>
