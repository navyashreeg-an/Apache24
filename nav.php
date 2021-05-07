<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration | PHP</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

 
<body>



<div>
	<?php
	if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        
        echo $firstname . " " . $lastname . " , " . $email . " , " . $phonenumber ;

        $sql ="INSERT INTO form (firstname, lastname, email, phonenumber ) VALUES(?,?,?,?)"; 
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber]);
        
        }
	?>	
</div>

<div>
	<form action="nav.php" method="post">
		<div class="container">

                <div class="row">
	        <div class="col-sm-3">
		<h1>Student Registration</h1>
		<p>Fill up the form </p>
                <hr class="mb-3">
		<label for="firstname"><b>First Name</b></label>
		<input class="form-control" type="text" name="firstname" required>

		<label for="lastname"><b>Last Name</b></label>
		<input class="form-control" type="text" name="lastname" required>

		<label for="email"><b>Email Address</b></label>
		<input class="form-control" type="email" name="email" required>

		<label for="phonenumber"><b>Phone Number</b></label>
		<input class="form-control" type="text"name="phonenumber" required>
                
                <hr class="mb-3">
	        <input class="btn btn-primary" type="submit"  name="create" value="Save">
			
		</div>
          </div>
     </div>
	</form>
</div>

</body>
</html>