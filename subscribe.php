<?php
  include 'conn.php';

   $errors = array();
// contact user
if (isset($_POST['Submit'])) {
  // receive all input values from the form
  $Email = $_POST['Email'];
  
	$query2 = "INSERT INTO subscription(Email) 
	                VALUES ('".$Email."')";

	if (mysqli_query($conn,$query2)) {
		echo "
			<script type='text/javascript'>
			alert('success');
			document.location.href='index.php'
			</script>
		";
		
	}
	else{
		echo mysqli_error($conn);
	}
}
?>
//mysql://
b81c5e2446b4c6
:
b7885781
@
us-cdbr-east-02.cleardb.com
/heroku_d41bddadc81bbfe?reconnect=true