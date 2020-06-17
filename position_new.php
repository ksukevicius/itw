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
			there I want to implement form to enter IT job titles / positions
			using Oracle 12c database
			</pre>
		</div>
		
		<form method="post" action="position_new.php">
			<div class="form-group">
				<label for="position">Position:</label>
				<input type="text" class="form-control" id="position" name="position" placeholder="Enter position (job title)" >
			</div>	
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "<hr>";
			echo "Form was submitted";
			echo "<hr>";
			//htmlentities - need to check when it's needed
			echo "There is the information in global variable \$_POST";
			echo "<hr>";
			echo '<pre>'; print_r($_POST); echo '</pre>';
			
			// get POST values, probably need to sanitize (clean up, check what user entered)
			$position = $_POST['position'];
			// sql statement to execute
			$sql = "INSERT INTO C##Kestas.POSITIONS2(position) VALUES(:position)";
			// Prepares an Oracle statement for execution
			// Returns a statement handle on success, or FALSE on error. 
			$stid = oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':POSITION', $position);
			//Returns TRUE on success or FALSE on failure. 
			$res = oci_execute($stid);
			oci_free_statement($stid);			
		}
		?>		
		
	</div>	
	
</body>
</html>

<?php
oci_close($conn)
?>