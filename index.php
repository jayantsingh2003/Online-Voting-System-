<?php
	
	include 'includes/conn.php';

	ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$sql = "SELECT * FROM result";
$query = $conn->query($sql);
while($row=$query->fetch_assoc()){
    $is_declared=$row['is_declared'];

    
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One Vote</title>
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

            <?php 
            if($is_declared=='1'):
              ?>
<a
                class="nav-link active custom-nav-link"
                aria-current="page"
                href="result.php"
                >Result</a
              >
<?php
            endif;
            ?>
          </ul>
          <!-- Custom hover underline effect for Sign In and Sign Up -->
          <div class="d-flex flex-column flex-lg-row align-items-center ms-3">
            <a
              class="custom-link mb-2 mb-lg-0 me-lg-3"
              href="login_form.php"
              >Voter Login</a
            >
            <a class="custom-link"  href="admin/index.php"
              >Admin Login</a
            >

           
           
          </div>
        </div>
      </div>
    </nav>

    <!-- Two-column section starts here -->
    <section class="container my-5 info-section custom-section">
      <div class="row align-items-center">
        <!-- First Column: Information -->
        <div class="col-lg-6 col-md-12 text-section mb-4 mb-lg-0">
          <h2>Welcome to One Vote</h2>
          <p>
            One Vote is a platform designed to make your voice heard.
            Participate in elections, cast your vote, and make a difference in
            your community. Voting is not just a right, it's a responsibility!
          </p>
          <p>
            Sign up now to join our community and take part in shaping the
            future.
          </p>
          <!-- Slogan -->
          <p class="slogan">
            ~
            <strong style="color: #0586fe"
              >"Your Vote, Your Voice: Shape the Future Today!"</strong
            >
          </p>
        </div>

        <!-- Second Column: Image -->

        <div class="col-lg-6 col-md-12 image-section">
          <img
            src="images/onevote.png"
            alt="Voting Image"
            class="img-fluid rounded shadow"
          />
        </div>
      </div>
    </section>

    <!-- Current Election News Section -->
    <section class="container my-5">
      <h2 class="text-center mb-4">Current Election News</h2>
      <div class="row">
        <!-- News Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="images/news1.jpeg"
              class="card-img-top"
              alt="Election Update"
            />
            <div class="card-body">
              <h5 class="card-title">Election Update: New Polls Open</h5>
              <p class="card-text">
                The latest polls are now open for the upcoming elections. Check
                your local listings to find out where to vote!
              </p>
              <a href="news1.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- News Card 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="images/news2.webp"
              class="card-img-top"
              alt="Candidates Debate"
            />
            <div class="card-body">
              <h5 class="card-title">Candidates Debate Scheduled</h5>
              <p class="card-text">
                Don't miss the upcoming candidates' debate. Join us for an
                engaging discussion on the key issues.
              </p>
              <a href="news2.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- News Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img
              src="images/news2.jpeg"
              class="card-img-top"
              alt="Voting Registration"
            />
            <div class="card-body">
              <h5 class="card-title">Voting Registration Deadlines</h5>
              <p class="card-text">
                Make sure you're registered to vote! Find out the deadlines for
                your state.
              </p>
              <a href="news3.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
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
