<?php
	session_start();
	$name = $_SESSION["name"];
	$timeID = $_SESSION["timeID"];
	$gender = $_SESSION["gender"];

	date_default_timezone_set('America/Denver');

	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);

	require 'connection.php';

	if (isset($_POST['submitFQ'])) {
		$pref = $_POST['preference'];
		$prefTheme = "N";

		if ($pref > 0) {
			$prefTheme = "L";
		} elseif ($pref < 0) {
			$pref = $pref*-1;
			$prefTheme = "D";
		} else {
			$prefTheme = "N";
		}

		$updateTheme = "UPDATE test SET prefTheme = '{$prefTheme}', prefStrength = '{$pref}' WHERE firstName = '{$_SESSION["name"]}' AND timeStampTag='{$_SESSION['timeID']}' AND gender='{$_SESSION['gender']}';";

		mysqli_query($connection, $updateTheme);

		header('Location: end.php');
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
				<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="css/magic.css">
				<script src="js/magic.js" charset="utf-8"></script>
        <title>5 Reasons to Learn a Second Language</title>
    </head>
    <body id="QuestionsBody">

       <main>
         <h1>BACS 383 Test</h1>
           <h4>One last question</h4>
            <p></p>
						<form action="survey.php" method="POST">
							<p>What did you enjoy most/prefer: reading with the dark background or with the light one?</p>

	 						<p class="rangeLegend darkLegend" id="darkThemeLabel">Dark Theme</p>
	 						<p class="rangeLegend neitherLegend" id="neitherLabel">Neither</p>
	 						<p class="rangeLegend lightLegend" id="lightThemeLabel">Light Theme</p>

	 						<input type="range" name="preference" min="-5" max="5" value="0" id="preferenceRange" oninput="showRangeResult()">

	 						<input type="text" name="" value="Neither" id="resultInput" disabled>
	 						<br>
	            <input type="submit" name="submitFQ" id="submitFQ" class="disabledButton" disabled value="Submit">
						</form>
       </main>

    </body>
</html>
