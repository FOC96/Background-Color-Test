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
            <p>1. Where has the author lived?</p>
            <input type="checkbox" name="Mexico" value="Mexico">
            <label for="Mexico">Mexico</label>
            <br>
            <input type="checkbox" name="Guatemala" value="Guatemala">
            <label for="Guatemala">Guatemala</label>
            <br>
            <input type="checkbox" name="Canada" value="Canada">
            <label for="Canada">Canada</label>
            <br>
            <input type="checkbox" name="Honduras" value="Honduras">
            <label for="Honduras">Honduras</label>
            <br>
            <input type="checkbox" name="Argentina" value="Argentina">
            <label for="Argentina">Argentina</label>
            <br>

            <br><br>
            <p>2. List the languages you can speak.</p>
            <textarea placeholder="English, Spanish, French..."></textarea>
<br>
            <button type="button" name="button" onclick="change()">Next Article</button>
       </main>

    </body>
</html>


<script>
    function change() {
        window.location.assign('text2.html');
    }
</script>
