<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon2.png">
</head>
<body>
  	<div id="final-container-q">
      <div class="container">
        <h2>You're Done!</h2>
          <p>You have completed the quiz</p>
          <!-- Drev Assuncion -->
          <!-- Total score -->
          <p class="final-score">Final Score: <span> <?php echo $_SESSION['score']; ?></span></p>
          <a href="index.php" class="start">Back to Main Page</a>      
      </div>
    </div>
  <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center">
                <h2>Want to take another quiz?</h2>
                <p class="lead">Just click below</p>
            </div>
            </div>
            <div class="row blog-entries on-quiz text-center">
                <div class="col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <a href="acronym.php" class="blog-entry">
                    <img src="images/acronym.png" alt="Image placeholder">
                    <h2>Acronym</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <a href="trueFalse.php" class="blog-entry">
                    <img src="images/True-False_Logo.JPG" alt="Image placeholder">
                    <h2>True or False</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <a href="fillBlank.php" class="blog-entry">
                    <img src="images/fill-in-the-blanks.png" alt="Image placeholder">
                    <h2>Fill in the blank</h2>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 col-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <a href="multipleChoice.php" class="blog-entry">
                    <img src="images/php.png" alt="Image placeholder">
                    <h2>Multiple Choice</h2>
                    </a>
                </div>
            </div>
    <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>Copyright &copy; 2018 Group 1 9461A | Web Systems & Technologies</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>