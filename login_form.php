<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background-color: #FBAB7E;
background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
"> 
<div class="login-box" style="background-color:#a69f8b ;color:white ; font-size: 22px; font-family:Times; border: 2px solid black; padding:10px; border-radius: 10px; height: 450px; width: 400px ">
  	<div class="login-logo" style="background-color:#a69f8b ;color:white ; font-size: 22px; font-family:Times  ">
		<br>
  		<b> ONLINE VOTING SYSTEM</b>
  	</div>
  
  	<div class="login-box-body" style="background-color:#a69f8b ;color:white ; font-size: 22px; font-family:Times" >
    	<p class="login-box-msg" style="color:black ; font-size: 17px; font-family:Times; " >Sign in to start your voting session</p><br>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required style="border-radius: 4px;">
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div><br>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required style="border-radius: 4px;">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div><br>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-curve" style="background-color: #D4EBF8 ;color:black ; font-size: 12px; font-family:Times" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
				<div class="col-xs-4">
          			

					<a class="btn btn-primary btn-block btn-curve" style="background-color: #D4EBF8;color:black ; font-size: 12px; font-family:Times; margin-left:110px;" href="register.php"><i class="fa fa-sign-in"></i> Sign Up</a>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>