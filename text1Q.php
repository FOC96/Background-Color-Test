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

	if (isset($_POST['submitA1Q'])) {
		$A1Q1 = $_POST['A1Q1'];
		$A1Q2 = $_POST['A1Q2'];
		$A1Q3 = $_POST['A1Q3'];
		$A1Q4 = $_POST['A1Q4'];

		if ($A1Q1 != "" && $A1Q2 != "" && $A1Q3 != "" && $A1Q4 != "") {
			$updateA1Q = "UPDATE test SET A1Q1='{$A1Q1}', A1Q2='{$A1Q2}', A1Q3='{$A1Q3}', A1Q4='{$A1Q4}' WHERE firstName = '{$_SESSION["name"]}' AND timeStampTag='{$_SESSION['timeID']}' AND gender='{$_SESSION['gender']}';";

			mysqli_query($connection, $updateA1Q);

			header('Location: text2.php');
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
        <title>5 Reasons to Learn a Second Language</title>
    </head>
    <body id="QuestionsBody">

       <main>
         <h1>5 Reasons to Learn a Second Language</h1>
          <h4>Questions</h4>

          <p>To evaluate this test, answer the following questions.</p>
					<br>
					<form action="text1Q.php" method="POST">
						<p>1. Which language did the author study?</p>
						<input type="radio" name="A1Q1" value="0" id="Q1_1">
						<label for="Q1_1">Mandarin</label>
						<br>
						<input type="radio" name="A1Q1" value="0" id="Q1_2">
						<label for="Q1_2">German</label>
						<br>
						<input type="radio" name="A1Q1" value="0" id="Q1_3">
						<label for="Q1_3">French</label>
						<br>
						<input type="radio" name="A1Q1" value="1" id="Q1_4">
						<label for="Q1_4">Spanish</label>
						<br>

						<br><br>
						<p>2. How many reasons did the author mention?</p>
						<input type="radio" name="A1Q2" value="0"  id="Q2_1">
						<label for="Q2_1">1</label>
						<br>
						<input type="radio" name="A1Q2" value="0"  id="Q2_2">
						<label for="Q2_2">3</label>
						<br>
						<input type="radio" name="A1Q2" value="1"  id="Q2_3">
						<label for="Q2_3">5</label>
						<br>
						<input type="radio" name="A1Q2" value="0"  id="Q2_4">
						<label for="Q2_4">7</label>
						<br>

						<br><br>
						<p>3. From the following options, select a reason which the author DID NOT mention.</p>
						<input type="radio" name="A1Q3" value="0"  id="Q3_1">
						<label for="Q3_1">Career opportunities</label>
						<br>
						<input type="radio" name="A1Q3" value="1"  id="Q3_2">
						<label for="Q3_2">Find love in foreign country</label>
						<br>
						<input type="radio" name="A1Q3" value="0"  id="Q3_3">
						<label for="Q3_3">Elevate your English skills</label>
						<br>
						<input type="radio" name="A1Q3" value="0"  id="Q3_4">
						<label for="Q3_4">Be a better traveler</label>
						<br>

						<br><br>
						<p>4. According to the article, for which of the following reasons does learning a second language assist in native language comprehension?</p>
						<input type="radio" name="A1Q4" value="0"  id="Q4_1">
						<label for="Q4_1">It forces the student to learn latin and other root languages.</label>
						<br>
						<input type="radio" name="A1Q4" value="1"  id="Q4_2">
						<label for="Q4_2">Assessing the grammar of a new language forces you to reflect on the grammar of your native language.</label>
						<br>
						<input type="radio" name="A1Q4" value="0"  id="Q4_3">
						<label for="Q4_3">Students of a new language are driven to analyze parts of speech of their native language.</label>
						<br>

						<input type="submit" name="submitA1Q" value="Next Article">
	          <!-- <button type="button" name="button" onclick="change()">Next Article</button> -->
					</form>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('text2.php');
    }
</script>
