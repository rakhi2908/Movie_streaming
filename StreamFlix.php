<?php
session_start();

$message = '';
if(isset($_SESSION['Account Created Successfully'])){
    $message = $_SESSION['Account Created Successfully'];
    unset($_SESSION['Account Created Successfully']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Streaming</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">StreamFlix</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Account</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section text-white text-center" style="background-image: url('movie-banner.jpg');">
    <div class="container">
      <h1 class="display-4">Stream Your Favorite Movies</h1>
      <p class="lead">Unlimited Movies, TV Shows & More</p>
      <a href="#" class="btn btn-primary btn-lg">Watch Now</a>
    </div>
  </section>

  <!--Display Account Creation Message-->
  <?php if(!empty($message)): ?>
    <div class="alert alert-info text-top">
        <?php echo $message; ?>
    </div>
    <?php endif; ?>

  <!-- Movie Grid -->
  <section class="movie-grid py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Movies</h2>
      <div class="row">
        <!-- Movie Card -->
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="Across-the-Spider-Verse.jpg" class="card-img-top" alt="Movie 1">
            <div class="card-body">
              <h5 class="card-title">Spider-Man: Across the Spider-Verse</h5>
              <a href="https://ww25.soap2day.day/spider-man-across-the-spider-verse-soap2day/" class="btn btn-primary">Watch Now</a>
            </div>
          </div>
        </div>
        <!-- Repeat movie cards for more movies -->
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="John wick.jpg" class="card-img-top" alt="Movie 2">
            <div class="card-body">
              <h5 class="card-title">John Wick Chapter 3</h5>
              <a href="https://ww25.soap2day.day/john-wick-chapter-3-parabellum-pya9z-soap2day/" class="btn btn-primary">Watch Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="fast-and-furious-9.jpg" class="card-img-top" alt="Movie 3">
            <div class="card-body">
              <h5 class="card-title">F9</h5>
              <a href="https://ww25.soap2day.day/f9-soap2day/" class="btn btn-primary">Watch Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="deadpoolAndwolverine.jpg" class="card-img-top" alt="Movie 4">
            <div class="card-body">
              <h5 class="card-title">Deadpool & Wolverine</h5>
              <a href="https://ww25.soap2day.day/deadpool-wolverine-soap2day/" class="btn btn-primary">Watch Now</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 StreamFlix. All Rights Reserved.</p>
    <div class="social-links">
      <a href="#" class="text-white me-3">Facebook</a>
      <a href="#" class="text-white me-3">Twitter</a>
      <a href="#" class="text-white">Instagram</a>
    </div>
  </footer>

  <!--Video section-->
  <div class="container">
    <!-- Video Player (Initially hidden) -->
    <video id="videoPlayer" width="100%" controls style="display: none;">
        <source src="your-video-file.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Watch Now Button -->
    <button id="watchNowBtn" class="btn">Watch Now</button>
</div>

   <!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Create Your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="config.php" method="post">
          <!-- Full Name -->
          <div class="mb-3">
            <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="FullName"required>
          </div>
          <!-- Email -->
          <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email ID" name="Email"required>
          </div>
          <!-- Password -->
          <div class="mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="Password"required>
          </div>
          <!-- Submit Button -->
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
   // Grab the Watch Now button and video player
   const watchNowBtn = document.getElementById('watchNowBtn');
    const videoPlayer = document.getElementById('videoPlayer');

    // Event listener for the Watch Now button
    watchNowBtn.addEventListener('click', function() {
        // Show the video player
        videoPlayer.style.display = 'block';

        // Play the video
        videoPlayer.play();

        // Optionally hide the button after clicking
        watchNowBtn.style.display = 'none';
    }); 
  </script>
</body>
</html>
