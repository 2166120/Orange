<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
  //Random questions
  $number = (int) $_GET['n'];
  $number = rand(1, 15);
  //Questions
  $query = "SELECT * FROM questions WHERE  question_number = $number";
  $result = $mysqli->query($query) or die($mysqli->error.___Line___);
  $question = $result->fetch_assoc();
  $query = "SELECT * FROM choices WHERE  question_number = $number";
  $choices = $mysqli->query($query) or die($mysqli->error.___Line___);
  //number of questions
  $query = "SELECT * FROM `choices` WHERE question_number = '1'";
  $results = $mysqli->query($query) or die($mysqli->error.___Line___);
  $total = $results->num_rows;
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
      <div class="container">
      	<div class="quiz-container">
	      	<p> SCORE: <bold><?php echo $_SESSION['score'] ?> </bold></p>
	        <div class="current">Question </div> 
	        <p class="question">
	          <?php echo $question['text']; ?>
	        </p>
	        <form method="post" action="process.php">
	          <ul class="choices">
	            <?php while($row = $choices->fetch_assoc()): ?>
	              <li><input name="choice" type="radio" value="<?php echo $row['id'] ?>" /><?php echo $row['text']; ?></li>
	            <?php endwhile; ?>
	          </ul>
	          <input type="submit" name = "submit" value="Submit" />
	          <input type="hidden" name="number" value="<?php echo $number; ?>" />
         </div>

  
	    <section class="learning-button">
	      <div class="caption">
	        <a class="btn toggle-btn" href="index.php">Go Back</a>
	      </div>
	    </section>
  </div>

</body>
</html>