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
         <h1>BACS 383 Test</h1>
           <h4>One last question</h4>
            <p></p>
           <p>What did you enjoy most/prefer: reading with the dark background or with the light one?</p>
            <input type="radio" name="theme" id="LightBack">
            <label for="LightBack">Light Background (white background, black text)</label>
            <br>
            <input type="radio" name="theme" id="DarkBack">
            <label for="DarkBack">Dark Background (black background, white text)</label>
            <br>
<br>
            <button type="button" name="button" onclick="change()">Submit</button>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('end.html');
    }
</script>
