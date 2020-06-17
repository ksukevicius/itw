<?php
require 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IT World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include 'includes/menu.php';
	?>
	<div class="container">
		<div class="jumbotron my-3">
			<pre>
				there is the list of it positions I have in my Oracle database
			</pre>
		</div>
		

		<?php
			$error_msg = "";
			// sql statement to execute
			$sql = "SELECT * FROM C##Kestas.POSITIONS2 ORDER BY INSERT_DATE DESC";
			// Prepares an Oracle statement for execution
			// Returns a statement handle on success, or FALSE on error. 
			$stid = oci_parse($conn, $sql);
			
			//Returns TRUE on success or FALSE on failure. 
			if (false === oci_execute($stid)) {
				$error_msg = oci_error($command);
			};

		?>
		
		<div>
			<?php echo $error_msg ?>
		</div>
		
		<table class='table table-striped'>
		<thead>
			<th>ID</th>
			<th>Position Name</th>
			<th>Insert date</th>
		</thead>
		<tbody>
		
		<?php
		while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
			echo "<tr>\n";
			echo "<td>" . $row['ID'] ."</td>";
			echo "<td>" . $row['POSITION'] ."</td>";
			echo "<td>" . $row['INSERT_DATE'] ."</td>";
			echo "</tr>\n";
		}
		?>
		
		</tbody>
		</table>
		
	</div>	
	
</body>
</html>

<?php
oci_free_statement($stid);
oci_close($conn)
?>