<!DOCTYPE html>
	<html>
	<head>
		<title>Users</title>
	</head>
	<body>
		<h1>List Of All Users in BD</h1>
		<table border="1">
			<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>last Name</td>
				</tr>
			</thead>
			<tbody>
				<?php
					include ('conexion.php');
					$query=mysqli_query($conecta,"SELECT * FROM user");
					while ($registro=mysqli_fetch_array($query)) {
				echo '
					<tr>
						<td>'.$registro['idUser'].'</td>
						<td>'.$registro['nameuser'].'</td>
						<td>'.$registro['lastname'].'</td>
					</tr>
				';	
					}//end of while
				?>
			</tbody>
		</table>
		<h2>Add New User</h2>
		<form action="addUser.php" method="POST">
			<label>Id User</label><br>
			<input type="text" name="Id"><br>
			<label>Name User</label><br>
			<input type="text" name="Name"><br>
			<label>Last Name User</label><br>
			<input type="text" name="LastName">
			<br><input type="submit" name="boton">
		</form>
	</body>
</html>