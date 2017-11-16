<?php
	session_start();
	$name = $_SESSION["name"];
	$timeID = $_SESSION["timeID"];
	$gender = $_SESSION["gender"];

	date_default_timezone_set('America/Denver');

	// error_reporting(E_ALL);
	// ini_set('display_errors', TRUE);

	$connection = mysqli_connect('localhost', 'root', '', 'bacs383');

	if (!$connection) {
		echo "No se pudo llevar a cabo la conexión.";
	}

	if (isset($_POST['submitA2Q'])) {
		$A2Q1 = $_POST['A2Q1'];
		$A2Q2 = $_POST['A2Q2'];
		$A2Q3 = $_POST['A2Q3'];
		$A2Q4 = $_POST['A2Q4'];

		if ($A2Q1 != "" && $A2Q2 != "" && $A2Q3 != "" && $A2Q4 != "") {
			$updateA2Q = "UPDATE test SET A2Q1='{$A2Q1}', A2Q2='{$A2Q2}', A2Q3='{$A2Q3}', A2Q4='{$A2Q4}' WHERE firstName = '{$_SESSION["name"]}' AND timeStampTag='{$_SESSION['timeID']}' AND gender='{$_SESSION['gender']}';";

			mysqli_query($connection, $updateA2Q);

			header('Location: survey.php');
		} else {
			echo "<script>alert('There are empty fields.');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="css/magic.css">
        <title>Can the Apple TV 4K be a cord-cutter's only streaming device?</title>
    </head>
    <body id="QuestionsBody" class="darkTheme">

       <main>
         <h1>Can the Apple TV 4K be a cord-cutter's only streaming device?</h1>
           <h4>Questions</h4>

           <p>To evaluate this test, answer the following questions.</p>
						<br>

						<form action="text2Q.php" method="POST">
							<p>1. Which device was tested by the author?</p>
							<input type="radio" name="A2Q1" value="0" id="Q1_1">
							<label for="Q1_1">Chromecast</label>
							<br>
							<input type="radio" name="A2Q1" value="1" id="Q1_2">
							<label for="Q1_2">Apple TV</label>
							<br>
							<input type="radio" name="A2Q1" value="0" id="Q1_3">
							<label for="Q1_3">Playstation 4</label>
							<br>
							<input type="radio" name="A2Q1" value="0" id="Q1_4">
							<label for="Q1_4">Xbox One</label>
							<br>

							<br><br>
							<p>2. The author mentioned he couldn't access the content from a movie provider. Which movie provider was it?</p>
							<input type="radio" name="A2Q2" value="0" id="Q2_1">
							<label for="Q2_1">Amazon</label>
							<br>
							<input type="radio" name="A2Q2" value="1" id="Q2_2">
							<label for="Q2_2">HBO</label>
							<br>
							<input type="radio" name="A2Q2" value="0" id="Q2_3">
							<label for="Q2_3">Netflix</label>
							<br>
							<input type="radio" name="A2Q2" value="0" id="Q2_4">
							<label for="Q2_4">iTunes</label>
							<br>

							<br><br>
							<p>3. How does the Apple TV handle content that is not to the same level of quality as its native Hi-Resolution quality?</p>
							<input type="radio" name="A2Q3" value="0" id="Q3_1">
							<label for="Q3_1">The software downgrades the streaming quality of its service.</label>
							<br>
							<input type="radio" name="A2Q3" value="1" id="Q3_2">
							<label for="Q3_2">This technology is not capable of displaying content that is of a lower resolution.</label>
							<br>
							<input type="radio" name="A2Q3" value="0" id="Q3_3">
							<label for="Q3_3">Apple TV converts the lower resolution content to his Hi-Resolution content.</label>
							<br>

							<br><br>
							<p>4. According to the author, what benefit does the Apple TV have compared to the Roku Ultra?</p>
							<input type="radio" name="A2Q4" value="0" id="Q4_1">
							<label for="Q4_1">Apple TV is more compatible with external streaming services.</label>
							<br>
							<input type="radio" name="A2Q4" value="1" id="Q4_2">
							<label for="Q4_2">Apple TV is more affordable than the Roku.</label>
							<br>
							<input type="radio" name="A2Q4" value="0" id="Q4_3">
							<label for="Q4_3">Apple TV has the most 4K releases through the iTunes store.</label>
							<br>


	            <input type="submit" name="submitA2Q" value="Next">
						</form>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('survey.php');
    }
</script>
