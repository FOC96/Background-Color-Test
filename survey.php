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
           <p>What did you enjoy most/prefer: reading with the dark background or with the light one?</p>

						<p class="rangeLegend darkLegend" id="darkThemeLabel">Dark Theme</p>
						<p class="rangeLegend neitherLegend" id="neitherLabel">Neither</p>
						<p class="rangeLegend lightLegend" id="lightThemeLabel">Light Theme</p>

						<input type="range" name="preference" min="-5" max="5" value="0" id="preferenceRange" oninput="showRangeResult()">

						<input type="text" name="" value="Neither" id="resultInput" disabled>
<br>
            <button type="button" name="button" onclick="change()">Submit</button>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('end.php');
    }
</script>
