<?php
	require 'connection.php';

	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);

	date_default_timezone_set('America/Denver');

	if(isset($_POST['sendButton'])){
		$name = $_POST['firstNameInput'];
		$gender = $_POST['genderSelect'];

		$date = new DateTime();
		$date->getTimestamp();

		$timeID = $date->format('Y-m-d H:i:s');

		$insertQuery = "INSERT INTO test(firstName, gender, timeStampTag) VALUES ('{$name}', '{$gender}', '{$timeID}');";

		if ($name != "" && $gender != "") {

			session_start();
			$_SESSION["name"] = $name;
			$_SESSION["gender"] = $gender;
			$_SESSION["timeID"] = $timeID;

			mysqli_query($connection, $insertQuery);

			header('Location: text1.php');
		}
	}
 ?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="css/magic.css">
	<script src="js/magic.js"></script>
  <title>Welcome</title>
</head>

<body class="lightTheme" id="ArticleBody">

   <main>

        <form method="POST" id="mainForm" action="index.php">
           <h1>BACS 383 Experiment</h1>
           <h4>About you</h4>

           <input type="text" name="firstNameInput" placeholder="First Name or Alias (e.g. 'Jane', 'John')" onkeyup="checkAble()" id="nameInput">

            <label for="genderSelect" id="genderLabel">Gender: </label>

            <select name="genderSelect" id="genderSelect" onchange="checkAble()">
              <option value="noValue" disabled selected>Select an option</option>
              <option value="F">Female</option>
              <option value="M">Male</option>
              <option value="O">Other</option>
            </select>

            <input type="submit" value="Start Test" onclick="change()" name="sendButton" disabled class="disabledButton" id="submitStart">
        </form>

   </main>

</body>
</html>
