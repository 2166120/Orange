<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
	//Arvin Dagang & Kaye Cariño
	// Check to see if score is set_error_handler
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

		// Get total questions

		$qgrp = $_SESSION['quiz'];

		$query = "SELECT MAX(question_number) as 'total' FROM `questions` WHERE q_group =$qgrp";
		$results = $mysqli->query($query) or die($mysqli->error.___Line___);
		$row = $results->fetch_assoc();
		$total = $row['total'];	
		// Bryn Edades & Camille Poyaoan
		//Get correct choice
		$query = "SELECT * FROM `choices` 
		WHERE question_number = $number AND is_correct = 1";
		//Get result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		//Get row	
		$row = $result->fetch_assoc();
		//Set correct choice
		$correct_choice = $row['id'];
		//Compare		
		if($correct_choice == $selected_choice){
			$sess_score = $_SESSION['score'];
			$sess_score += 1;			
			$_SESSION['score'] = $sess_score;			
		}

		//Arvin Dagang & Bryn Edades
		if(!isset($_SESSION['counter'])) {
		    $_SESSION['counter'] = 0;
		}

		// if button is pressed, increment counter
		if(isset($_POST['submit'])) {
    		++$_SESSION['counter'];
    	}
    

		if($_SESSION['counter'] == 10) {
			 $_SESSION['counter'] = 0;
				header("Location: final.php");
				exit();
		} else {
			if ($_SESSION['quiz'] == 1) {
				header("Location: qMultipleChoice.php?n=".$next);	
			}else if($_SESSION['quiz'] == 2) {
 				header("Location: qTrueFalse.php?n=".$next);			
			// }else if ($_SESSION['quiz'] == 4) {
				// header("Location: qFillBlank.php?n=".$next);	
			}
		}
	}
	// if(isset($_POST['submit'])){
	// 	$number = $_POST['number'];
	// 	$choice = $mysqli->real_escape_string($_POST['choice']);

	// 	$sql = "SELECT * FROM `choices` 
	// 	WHERE question_number = $number AND is_correct = 1";

	// 	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	// 	$row = $result->fetch_assoc();
		
	// 	$correct_choice = $row['id'];

	// 	if($correct_choice == $choice){
	// 		$sess_score = $_SESSION['score'];
	// 		$sess_score += 1;			
	// 		$_SESSION['score'] = $sess_score;			
	// 	}
	// }