<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $declare=$_POST['declare'];

    $sql = "UPDATE result SET is_declared=$declare";
		if($conn->query($sql)){
            if($declare=='0'){
                $_SESSION['success'] = 'Result Declaration Disabled';
            }else{
                $_SESSION['success'] = 'Result Declared Successfully';
            }
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

        //header('location: declare_result.php');
}
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#F1E9D2 " >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>
       Declare Result
     </b> </h1>
      <ol class="breadcrumb" style="color:black ; font-size: 17px; font-family:Times">
        <li><a href="#"><i class="fa fa-dashboard" ></i> Home</a></li>
        <li class="active" style="color:black ; font-size: 17px; font-family:Times" >Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">

      <div class="col-xs-12">
        <?php
$sql = "SELECT * FROM result";
$query = $conn->query($sql);
while($row=$query->fetch_assoc()){
    $is_declared=$row['is_declared'];

    if($is_declared=='0'){
        echo"Current Status: Result Declaration is Disabled";
    }else{
        echo "Current Status: Result is Already Declared";
    }
}

?>
<br>
      </div>
      
        <div class="col-xs-12" style="margin-top: 40px">
          <form action="declare_result.php" method="POST">
            <select name="declare" id="" style=" background-color: #A6AEBF; border: none; border-radius: 4px; font-size: 16px; padding: 8px; margin-left: 10px; ">
                <option value="1">Enable</option>
                <option value="0">Disable</option>
            </select>
            <input type="submit" name="submit" value="Submit" style=" background-color: #A8CD89; border: none; border-radius: 4px; font-size: 16px; padding: 8px; margin-left: 20px; ">
          </form>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/candidates_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
