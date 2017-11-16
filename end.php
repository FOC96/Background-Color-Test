<?php
	session_destroy();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="css/magic.css">
        <title>BACS 383 Test</title>
    </head>
    <body id="QuestionsBody">

       <main>
           <h1>Thank you!</h1>
          <p></p>
           <p>You have successfully finished the test. We appreciate your participation.</p>
            <button type="button" name="button" onclick="change()">Start Over</button>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('index.php');
    }
</script>
