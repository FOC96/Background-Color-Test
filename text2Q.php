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
            <p>1. Would you buy the new Apple TV?</p>
            <input type="radio" name="Hello" id="Yes">
            <label for="Yes">Yes</label>
            <br>
            <input type="radio" name="Hello" id="No">
            <label for="No">No</label>
            <br>

            <br><br>
            <p>2. Explain the reason of your previous answer</p>
            <textarea placeholder="Because..."></textarea>
<br>
            <button type="button" name="button" onclick="change()">Next</button>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('survey.html');
    }
</script>
