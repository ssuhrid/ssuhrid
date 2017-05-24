<?php

$con = mysqli_connect("localhost", "root", "ssuhrid", "test");

if($con)
	echo 'connected';
else
	echo 'error';	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>ssuhrid.com</title>
    <!-- CSS  -->
    <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
  <table border='1'>
  	<tr>
  	<th>Enroll</th>
  	<th>Name</th>
  	<th>Attendence</th>
  	</tr>

  	<?php

  		$result = $con->query("select * from test");

  		while( $record = $result->fetch_assoc() ){
  			echo '<tr><td>'.$record['enroll'].'</td>'.
  				'<td>'.$record['name'].'</td>'.
  				'<td>'.$record['attendance'].'</td></tr>';
  		}

  	?>

  </table>
</body>


</html>