<!DOCTYPE html>
 <html>
 <body>
 <div name="top" align="center">
 	<img src="images/top.jpg" width="1500" height="150"/>
 </div>
 <div name="middle" align="center">
 <table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</tr>
			<?php
			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['codigo_servicio']?></td>
					<td><?php echo $row['nombre_servicio']?></td>
					<td><?php echo $row['descripcion_servicio']?></td>
					<td><img src="<?php echo $row['imagen_servicio']?>"/></td>
				</tr>
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
	 </div>
 <div name="bottom" align="center">
 	<img src="images/top.jpg" width="1500" height="150"/>
 </div>
  
 </body>