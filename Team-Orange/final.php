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
          <!-- Total score -->
          <p class="final-score">Final Score: <span> <?php echo $_SESSION['score']; ?></span></p>
          <a href="index.php" class="start">Back to Main Page</a>      
      </div>
    </div>


  
</body>
</html>