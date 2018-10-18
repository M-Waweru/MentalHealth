<!DOCTYPE html>
<html>
<head>
	<title>Doctor's page</title>
</head>
<body>
	<h3>Doctor's Profile</h3>
	<h4>Patient Applications</h4>
	<table>
		<thead>
			<?php 
			echo "<tr>";
			foreach ($data[0] as $key => $value) {
				echo "<td>".$key."</td>";
			}
			echo "</tr>";
			?>
		</thead>
		<tbody>
			<?php 
			$rowcount = sizeof($data);

			for ($i=0;$i<$rowcount;++$i){
				echo "<tr>";
				foreach ($data[$i] as $key => $value) {
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>