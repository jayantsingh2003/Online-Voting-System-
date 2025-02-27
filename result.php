<?php
	
	include 'includes/conn.php';

	ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$sql = "SELECT * FROM result";
$query = $conn->query($sql);
while($row=$query->fetch_assoc()){
    $is_declared=$row['is_declared'];
    if($is_declared=='0'){
        header('location: index.php');
    }

    
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-light shadow">
      <div class="container-fluid">
        <a class="navbar-brand company-logo ms-4" href="index.php">
          <img src="images/logo.png" alt="Company Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a
                class="nav-link active custom-nav-link"
                aria-current="page"
                href="index.php"
                >Home</a
              >
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

    <!-- Two-column section starts here -->
    <section class="container my-5 info-section custom-section">
      <div class="row align-items-center">
        <!-- First Column: Information -->
        <div class="col-lg-12 col-md-12 text-section mb-4 mb-lg-0">
          <h2 style="text-align: center;">Result</h2>
          
<?php 
$sql = "SELECT * FROM candidates";
$query = $conn->query($sql);
while($row=$query->fetch_assoc()){
    $cand_id=$row['id'];

    $sql2="SELECT * FROM votes WHERE candidate_id=$cand_id";
    $query2=$conn->query($sql2);
    $count=$query2->num_rows;

    echo "<table class='table table-bordered' > 
    <tr>
    <th> Candidate Name</th>
    <th> Total Votes</th>
    </tr>
    <tr>
    <td>".$row['firstname']."</td>
    <td>".$count."</td>
    
    </table>";
}
?>
         
        </div>

        <!-- Second Column: Image -->

       
      </div>
    </section>

    
    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container text-center">
        <p>&copy; 2024 One Vote. All Rights Reserved.</p>
        <p>Follow us on:</p>
        <a href="#" class="text-white me-3">Facebook</a>
        <a href="#" class="text-white me-3">Twitter</a>
        <a href="#" class="text-white">Instagram</a>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
