<?php 
	require('conn.php');
	session_start();
		if((isset($_POST['mail']) && $_POST['password'] !=''))
		{    
			$email = trim($_POST['mail']);
			$password = trim($_POST['password']);
			$sqlEmail = "SELECT * FROM register WHERE mail = '".$email."'";
			$rs = mysqli_query($conn,$sqlEmail);
			$numRows = mysqli_num_rows($rs);
			
			if($numRows  == 1)
			{ 
				$row = mysqli_fetch_assoc($rs);
				if($password==$row['password'])
				{
					$_SESSION['mail'] = $row['mail'];
					$_SESSION['name'] = $row['fname'];
					$_SESSION['phno'] = $row['phone'];
                    $_SESSION['pwd']=$row['password'];
					$role=$row['role'];
					if($role==2){
					    header('location:unac.php');
					    exit;
					}
					else if($role==1)
					{
						header('location:admin/admin_dashboard.php');
					}
					else{ 
						header('location:user_dashboard.html');
					exit;
					}
				}
				else
				{   
					$errorMsg =  "Wrong Email Or Password";
				}
			}
			else
			{    
				$errorMsg =  "No User Found";
			}
		}
	
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/log.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" onclick="onclick">
  <form action="" method="POST">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <h2><img src="img/logo3.png" width="150" height="70"></h2>
    <input type="email" placeholder="mail" name="mail"/>
    <input type="password" placeholder="password" name="password"/>
    <input type="submit" name="submit" value="SingIn">
    <h2>&nbsp;</h2>
  </div></form>
</div>
<!-- partial -->
  <script src='https://codepen.io/banik/pen/3f837b2f0085b5125112fc455941ea94.js'></script>
</body>
</html>
