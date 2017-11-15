<?php
	session_start();
	$name = $_SESSION["name"];
	$timeID = $_SESSION["timeID"];
	$gender = $_SESSION["gender"];

	date_default_timezone_set('America/Denver');

	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);


	$connection = mysqli_connect('localhost', 'root', '', 'bacs383');

	if (!$connection) {
		echo "No se pudo llevar a cabo la conexión.";
	}

	if (isset($_POST['text1Done'])) {
//GET THE TIMER FROM HTML BY JS

		$updateText1 = "UPDATE test SET timeArticle1={$difference} WHERE firstName = '{$_SESSION["name"]}' AND timeStampTag='{$_SESSION['timeID']}' AND gender='{$_SESSION['gender']}';";

		mysqli_query($connection, $updateText1);

		header('Location: text1Q.php');
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

    <body id="ArticleBody">

       <main>
            <h1>5 Reasons to Learn a Second Language</h1>
            <p>Lau, L. (n.d.). <i>5 Reasons to Lean a Second Language.</i> https://lizzielau.com/learn-a-second-language/</p>

            <p>Speaking more than one language is an advantage in many aspects of life. Though most of us study a second language in high school, we rarely learn enough of the language to actually carry on a conversation. It’s usually more a matter of memorizing enough to pass tests and fulfill a required elective.</p>

            <p>I lived in Mexico, Honduras, and Guatemala for 13 years and the first thing I did when I arrived in Mexico was sign up for some conversational Spanish lessons. I was working on a yacht, so I asked for really specific conversations. Instead of, “Una cerveza por favor.” I needed to be able to say, “Donde puedo conseguir papel de lijo grana ochenta.” Where can I buy 80 grit sandpaper?</p>

            <p>Now that I’m back living in Canada and rarely have the opportunity to practice my spanish, I watch a lot of Netflix programming in Spanish to keep it up. That way, when we organized a family trip to Loreto, my spanish wasn’t rusty.  I also like to use Duolingo to work on my Spanish grammar.</p>

            <p>Here are five reasons to invest the time and energy learning to communicate fluently in another language.</p>

            <h2>1. Build Brain Power</h2>

            <p>In a study at University College London, the brains of 105 people were studied. 80 of these people were bilingual. Their findings were that grey matter is altered and improved by learning another language, just as muscles are built by exercise.</p>

            <p>Learning a language is mentally challenging, and has been proven to increase students’ intellectual agility. Being bilingual increases intellect by structurally changing the brain, especially when the second language is learned at an early age.</p>

            <h2>2. Open Career Oportunities</h2>

            <p>English may still be the most common language in international business, but more people speak both Spanish and Mandarin worldwide. Most businesses that are international need people who fluently speak local languages. In the United States it is great to have Spanish on your resume because about 37 million people speak Spanish as their first language. Over half of them live in California, Texas, and Florida. That is an enormous group of people who need customer service in Spanish.</p>

            <h2>3. Elevate Your English Skills</h2>

            <p>When you only speak one language you have no basis for comparison when it comes to grammar. Studying a language makes a student much more aware of our native tongue. When we learn new grammar rules we are forced to go over our own grammar so that we can understand the differences by comparison. All the parts of speech and sentence structure that we take for granted every day must be reevaluated so that we clearly understand it all. Most people who study a new language find that they become more aware of grammatical errors, and begin to communicate more precisely in English.</p>

            <h2>4. Be a Better Traveler</h2>

            <p>I promise you, raising your voice and yelling at someone who doesn’t understand you will not help the situation. Traveling in a country where you can communicate with locals means you will have a much better experience. You will have a better understanding of local culture, and will be welcomed by people who are normally wary of tourists.</p>

            <p>Friends of mine from South Africa who crewed on a yacht for a Mexican family got to spend summers on the coast of France. They found that when they were shopping for the yacht they were often treated rudely because they didn’t speak much French.  They got in the habit of immediately asking if the salesperson spoke Spanish, and if they did, great, if they didn’t they more often than not switched gracefully to English. It was the effort to communicate that was rewarded. The salesperson was grateful that they didn’t just start bellowing in English, trying to be understood.</p>

            <p>Being bilingual gives you an opportunity to infiltrate, and experience a place like a local. Traveling is expensive, so it makes sense to get the most out of your experience. Instead of returning home with the same photographs every other tourist has ever taken, you’ll have a deeper understanding of, and connection to, the place you visited.</p>

            <h2>5. Expand Your Global Reach</h2>

            <p>During my travels I’ve made lifelong friends, some of whom don’t speak much or any English. Being able to communicate with people in other languages makes me more acutely aware that I’m part of a global community. Having Skype and Facebook means that even when I can’t travel to catch up with my far-flung friends, I can still stay in touch. It also means that I’m always learning, because invariably someone will post something that I don’t understand, because it is a phrase I’ve never heard or something colloquial. At times like that, I am grateful to google because in seconds I can translate the joke and reply.</p>
						<form action="text1.php" method="POST" class="invisibleForm">
							<input type="submit" name="text1Done" value="Done">
						</form>

       </main>

    </body>
</html>
