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
			there I started to use Stored Procedure to INSERT data to the database
			$sql = 'BEGIN POSITIONS_NEW(:position); END;';
			</pre>
		</div>
		
		<form method="post" action="position_new_sp.php">
			<div class="form-group">
				<label for="position">Position:</label>
				<input type="text" class="form-control" id="position" name="position" placeholder="Enter position (job title)" >
			</div>	
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php
		// need to read about this, but for now it does the job
		// error_reporting(E_ALL ^ E_WARNING); 
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			$message = "";
			// get POST values, probably need to sanitize (clean up, check what user entered)
			$position = $_POST['position'];
			// sql statement to execute
			//$sql = "INSERT INTO C##Kestas.POSITIONS2(position) VALUES(:position)";
			$sql = 'BEGIN C##Kestas.POSITIONS_NEW(:position, :message); END;';
			// Prepares an Oracle statement for execution
			// Returns a statement handle on success, or FALSE on error. 
			$stid = oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':POSITION', $position, 64);
			oci_bind_by_name($stid, ':message', $message, 500);
			//Returns TRUE on success or FALSE on failure. 
			$res = oci_execute($stid);
			$error_msg = "oci_execute returned false";
			if (false === $res) {
				echo $message;
				echo "oci_execute returned false<br>";
				$e = oci_error($stid);
				//trigger_error(htmlentities($e['message']), E_USER_ERROR);
				print "<hr>";
				print htmlentities($e['message']);
				print "\n<pre>\n";
				print htmlentities($e['sqltext']);
				printf("\n%".($e['offset']+1)."s", "^");
				print  "\n</pre>\n";				
			} else {
				echo $message;
				//echo "Record inserted successfully";
			};
			
			oci_free_statement($stid);			
		}
		?>		
		
		</div>		
		
	</div>	
	
</body>
</html>

<?php
	
oci_close($conn)
?>