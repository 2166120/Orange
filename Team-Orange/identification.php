<?php include 'db.php'; ?>
<?php session_start() ?>
<?php
    // Kaye Cariño
    // Get total questions
    $query = "SELECT COUNT(question_number) as 'total' FROM `questions` WHERE q_group =4";
    $results = $mysqli->query($query) or die($mysqli->error.___Line___);
    $row = $results->fetch_assoc();
    $total = $row['total'];   
    $_SESSION['total'] = $total;
    $_SESSION['score'] = 0;
    $_SESSION['quiz'] = 4;
?>
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
    <div id="intro">
      <div class="test-container">
        <h2>Directions: Read each statement or question carefully and identify the answer.</h2>
        <ul class="list-quiz">
          <li class="odd wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><strong>Number of Questions: </strong> <?php echo $total; ?></li>
          <li class="even wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms"><strong>Type: </strong> Identification</li>
        </ul>
        <a href="qIdentification.php?n=36" class="start">Start Quiz</a>
      </div>
    <section class="learning-button">
      <div class="caption">
        <a class="btn toggle-btn" href="index.php">Go Back</a>
      </div>
    </section>
  </div>



</body>
</html>