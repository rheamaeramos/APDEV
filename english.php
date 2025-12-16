<?php
// Subject-specific settings
$subject_name = "English Grammar & Vocabulary Quiz";
$accent_color = "#17a2b8"; // Teal/Cyan (Modern & Professional)
$secondary_color = "#ffc107"; // Yellow/Gold
$background_color = "#f4f7f6"; // Light Grayish Blue
$success_color = "#28a745"; // Green for Success

// Define questions (20 questions per difficulty)
$questions = [
    'easy' => [
        // Basic Vocabulary, Simple Grammar (Nouns, Verbs, Simple Tenses)
        ["What is the opposite of 'hot'?", "Cold", ["Warm","Hot","Cold","Cool"]],
        ["Which word is a Noun (person, place, thing, or idea)?","Dog", ["Run","Beautiful","Dog","Quick"]],
        ["Fill in the blank: I ___ happy.", "am", ["is","are","am","be"]],
        ["Choose the correct Plural form of 'cat'.", "Cats", ["Cat's","Caties","Cats","Catss"]],
        ["Which word is an Adjective (describes a noun)?", "Tall", ["Jump","Quickly","Tall","He"]],
        ["The Past Tense of 'eat' is ___.", "Ate", ["Eat","Eated","Ate","Eaten"]],
        ["What is the synonym of 'big'?", "Large", ["Small","Tiny","Large","Short"]],
        ["Identify the Verb (action word) in the sentence: 'The bird sings.'", "Sings", ["The","Bird","Sings","Quietly"]],
        ["Fill in the blank: She ___ to the store yesterday.", "went", ["go","goes","went","going"]],
        ["What is the opposite of 'up'?", "Down", ["Over","Under","Down","Inside"]],
        ["Which is a Pronoun (replaces a noun)?", "They", ["Book","Loudly","They","Write"]],
        ["The abbreviation 'Dr.' stands for:", "Doctor", ["Drive","Doctor","Due","Door"]],
        ["What is the correct way to write 'two plus three'?", "Five", ["Too","Fore","Five","Six"]],
        ["Which sentence uses the correct Article?", "A dog is barking.", ["An dog is barking.","A dog is barking.","The dogs is barking.","Dog is barking."]],
        ["What is the opposite of 'day'?", "Night", ["Morning","Evening","Night","Afternoon"]],
        ["Fill in the blank: This is ___ apple.", "an", ["a","an","the","some"]],
        ["Which word is spelled correctly?", "Friend", ["Frend","Friend","Frind","Freind"]],
        ["The plural of 'box' is:", "Boxes", ["Boxs","Box's","Boxes","Boxies"]],
        ["What part of speech is 'quickly'?", "Adverb", ["Noun","Verb","Adverb","Adjective"]],
        ["Choose the correct contraction for 'do not'.", "Don't", ["Donot","Do'nt","Don't","Doesn't"]],
    ],
    'medium' => [
        // Spelling, Synonyms/Antonyms, Comparative/Superlative, Conjunctions
        ["Choose the correct spelling:", "Accommodate", ["Acommodate","Accomodate","Accommodate","Acommadate"]],
        ["Synonym of 'happy'?", "Joyful", ["Sad","Angry","Joyful","Tired"]],
        ["Antonym of 'big'?", "Small", ["Large","Small","Tall","High"]],
        ["Which word correctly completes the sentence: 'She is ___ than her brother.'", "Taller", ["Tall","Tallest","Taller","More tall"]],
        ["Identify the Conjunction in: 'I like apples but not bananas.'", "But", ["I","Like","But","Not"]],
        ["The Superlative form of 'good' is:", "Best", ["Better","Gooder","Goodest","Best"]],
        ["Choose the correct spelling:", "Separate", ["Seperate","Separate","Seprate","Separatte"]],
        ["What is the synonym of 'difficult'?", "Challenging", ["Easy","Simple","Challenging","Fast"]],
        ["Fill in the blank: 'I waited ___ the rain stopped.'", "until", ["but","unless","until","so"]],
        ["Which sentence is in the Past Progressive Tense?", "He was reading a book.", ["He read a book.","He reads a book.","He was reading a book.","He has read a book."]],
        ["Antonym of 'brave'?", "Cowardly", ["Courageous","Bold","Cowardly","Strong"]],
        ["Choose the correct spelling:", "Definitely", ["Definately","Definitely","Definitly","Defenetely"]],
        ["Identify the Preposition in: 'The book is on the table.'", "On", ["The","Book","Is","On"]],
        ["Fill in the blank: 'Neither John ___ Mary came.'", "nor", ["or","and","nor","but"]],
        ["What is the synonym of 'wealthy'?", "Rich", ["Poor","Rich","Thin","Weak"]],
        ["Which is the correct possessive form of 'child'?", "Child's", ["Childrens","Childs'","Child's","Children's"]],
        ["What does 'adieu' mean?", "Goodbye", ["Hello","Welcome","Goodbye","Thank You"]],
        ["Choose the correct spelling:", "Calendar", ["Calender","Calendar","Calandar","Calandar"]],
        ["The Past Participle of 'break' is:", "Broken", ["Broke","Breakd","Broken","Breakened"]],
        ["Fill in the blank: 'The cat jumped ___ the fence.'", "over", ["at","in","over","by"]],
    ],
    'hard' => [
        // Complex Grammar, Idioms, Phrasal Verbs, Advanced Vocabulary
        ["What is a Conjunction?", "A word that joins clauses", ["A verb","A word that joins clauses","A noun","An adjective"]],
        ["Identify the Adverb of Manner in: 'She runs quickly.'", "Quickly", ["She","Runs","Quickly","None"]],
        ["Which sentence uses the correct Present Perfect Tense?", "I have eaten.", ["I has eaten.","I have eaten.","I haved eaten.","I has eat."]],
        ["What does the idiom 'Break a leg' mean?", "Good luck", ["To get injured","To start running","Good luck","To be clumsy"]],
        ["Which of the following is a Subordinating Conjunction?", "Although", ["And","But","Although","For"]],
        ["Identify the Gerund in the sentence: 'Swimming is my favorite hobby.'", "Swimming", ["Is","My","Favorite","Swimming"]],
        ["Synonym of 'ephemeral'?", "Transient", ["Permanent","Lasting","Transient","Immortal"]],
        ["Choose the correct sentence using a Phrasal Verb.", "She looked up the word.", ["She looked the word up.","She looked up the word.","She look up the word.","She look the word up."]],
        ["What is the Antonym of 'ambiguous'?", "Clear", ["Vague","Confusing","Clear","Obscure"]],
        ["The proper structure for a sentence using Conditional Type 2 is:", "If + Past Simple, would + base verb", ["If + Present Simple, will + base verb","If + Past Simple, would + base verb","If + Past Perfect, would have + past participle","If + Present Simple, would + base verb"]],
        ["Choose the sentence that correctly uses the word 'affect' (verb).", "The weather affects my mood.", ["The weather affects my mood.","The affect of the drug was strong.","The affect on him was noticeable.","He has a pleasant affect."]],
        ["Which word is a Heteronym of 'lead' (metal)?", "Lead (to guide)", ["Lead (pencil)","Lead (to guide)","Led","Leaded"]],
        ["What does the idiom 'Bite the bullet' mean?", "To face a difficult situation", ["To eat fast","To speak softly","To face a difficult situation","To argue strongly"]],
        ["Identify the sentence in Passive Voice.", "The letter was written by Tom.", ["Tom wrote the letter.","The letter was written by Tom.","Tom is writing the letter.","Tom has written the letter."]],
        ["Antonym of 'meticulous'?", "Careless", ["Careful","Detailed","Careless","Precise"]],
        ["Which is the correct spelling for a word meaning 'unforeseen problem'?", "Quandary", ["Quandery","Quandary","Quanderry","Quandarie"]],
        ["Fill in the blank: 'He offered to ___ my dog while I was away.' (Phrasal Verb)", "look after", ["look up","look after","look down","look out"]],
        ["The term 'Oxymoron' involves:", "Contradictory terms", ["Exaggeration","Contradictory terms","Comparison using 'like' or 'as'","Repetition of consonant sounds"]],
        ["What is the synonym of 'ubiquitous'?", "Everywhere", ["Rare","Everywhere","Ancient","Future"]],
        ["Identify the Dangling Modifier:", "After walking for hours, the car was a welcome sight.", ["After walking for hours, the car was a welcome sight.","Walking quickly, I reached the park.","The dog, running fast, chased the ball.","Having finished the report, the coffee was needed."]],
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
<title>🇬🇧 <?php echo $subject_name; ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* VARIABLES */
    :root {
        --accent: <?php echo $accent_color; ?>;
        --secondary: <?php echo $secondary_color; ?>;
        --bg-color: <?php echo $background_color; ?>;
        --hover-color: #0f6674; /* Darker accent */
        --success: <?php echo $success_color; ?>;
    }

    /* GENERAL STYLES */
    body { 
        font-family: 'Poppins', sans-serif; 
        background: var(--bg-color); 
        margin: 0; 
        padding: 0; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        min-height: 100vh; 
        color: #343a40;
    }
    .container { 
        max-width: 650px; 
        width: 90%; 
        background: white; 
        padding: 40px; 
        margin: 40px auto; 
        border-radius: 15px; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
    }
    h1 {
        text-align: center;
        color: var(--accent);
        margin-bottom: 5px;
        font-weight: 800;
        font-size: 2.2em;
    }
    h2 {
        text-align: center;
        color: var(--secondary);
        margin-top: 5px;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 1.2em;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--bg-color);
    }
    
    /* BUTTONS AND INPUTS */
    select, .btn { 
        width: 100%; 
        padding: 15px; 
        margin-top: 15px; 
        border-radius: 10px; 
        font-size: 17px; 
        font-weight: 600;
        transition: all 0.3s ease; 
    }
    .btn { 
        background: var(--accent); 
        color: white; 
        border: none; 
        cursor: pointer; 
        text-decoration: none; 
        display: block; 
        text-align: center; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn:hover { 
        background: var(--hover-color); 
        transform: translateY(-2px);
    }
    .start-btn {
        background: var(--secondary);
        color: #343a40;
    }
    .start-btn:hover {
        background: #e6b000;
    }
    .back-btn { 
        background: var(--success) !important; 
    }
    .back-btn:hover {
        background: #1e7e34 !important;
    }

    /* QUIZ ELEMENTS */
    .question { 
        font-weight: 700; 
        margin-top: 25px; 
        color: #212529; 
        font-size: 1.25em; 
        padding: 10px;
        background: #fcfcfc;
        border-radius: 8px;
        border-left: 5px solid var(--accent);
    }
    
    .choice-label { 
        margin-top: 10px; 
        display: flex; 
        align-items: center; 
        cursor: pointer; 
        padding: 12px 15px; 
        border-radius: 8px; 
        transition: background 0.2s, border 0.2s; 
        border: 1px solid #dee2e6;
        background: #ffffff;
    }
    .choice-label:hover { 
        background: #f0f8ff; 
        border-color: var(--accent);
    }
    input[type='radio'] { 
        margin-right: 15px; 
        width: 18px;
        height: 18px;
        accent-color: var(--accent);
    }
    
    /* RESULT BOX */
    .result { 
        margin-top: 35px; 
        padding: 30px; 
        background: #e6fcf6; 
        border-radius: 10px; 
        border: 2px solid var(--success); 
        text-align: center; 
    }
    .result b { 
        font-size: 2em; 
        color: var(--success); 
        display: block; 
        margin-bottom: 10px; 
        font-weight: 800;
    }
    h3 { 
        color: var(--accent); 
        border-bottom: 2px solid var(--accent); 
        padding-bottom: 8px; 
        margin-top: 30px; 
        font-weight: 700;
        text-align: left;
        font-size: 1.4em;
    }
    .correct-answer-list p {
        background: #fff;
        padding: 8px 15px;
        margin-bottom: 8px;
        border-radius: 6px;
        border-left: 3px solid var(--success);
        text-align: left;
    }
    .correct-answer-list b {
        color: var(--success);
    }

    /* SELECT DIFFICULTY STYLES */
    .difficulty-select {
        margin-bottom: 25px;
        border: 2px solid var(--secondary);
        border-radius: 10px;
        padding: 15px;
    }
    .difficulty-select label {
        font-weight: 700;
        font-size: 1.1em;
        color: var(--secondary);
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="container">
<h1><i class="fas fa-book-open"></i> <?php echo $subject_name; ?></h1>
<h2>Select a difficulty level to start the quiz.</h2>

<form method="GET" style="<?php echo isset($_GET['level']) ? 'display:none;' : ''; ?>">
    <div class="difficulty-select">
        <label for="level">Select Difficulty Level:</label>
        <select name="level" id="level" required>
            <option value="">-- Choose Difficulty --</option>
            <option value="easy">Easy (20 Questions)</option>
            <option value="medium">Medium (20 Questions)</option>
            <option value="hard">Hard (20 Questions)</option>
        </select>
        <button type="submit" class="btn start-btn">Start Quiz</button>
    </div>
</form>

<?php
if(isset($_GET['level']) || isset($_POST['submit'])){
    $level = $_GET['level'] ?? $_POST['level'];
    $current_questions = $questions[$level] ?? [];

    if(!isset($_POST['submit'])){
        // Display Quiz Form
        echo "<form method='POST'>";
        echo "<h3>Level: " . ucfirst($level) . " (" . count($current_questions) . " Questions)</h3>";
        
        foreach($current_questions as $i=>$q){
            echo "<p class='question'>".($i+1).". ".$q[0]."</p>";
            
            // Randomize choices
            $choices = $q[2];
            shuffle($choices);
            
            foreach($choices as $c){
                $choice_value = htmlspecialchars($c);
                echo "<label class='choice-label'><input type='radio' name='q$i' value='$choice_value' required> $c</label>";
            }
        }
        echo "<input type='hidden' name='level' value='$level'>";
        echo "<button name='submit' class='btn' style='margin-top:30px;'>Submit Answers</button></form>";
        
    } else {
        // Display Results
        $score = 0;
        $total_questions = count($current_questions);
        
        foreach($current_questions as $i=>$q){
            $correct_answer = htmlspecialchars($q[1]);
            // Check if the post variable is set and if the answer matches the correct answer
            if(isset($_POST["q$i"]) && htmlspecialchars($_POST["q$i"]) === $correct_answer) {
                $score++;
            }
        }
        
        // RESULT BOX
        echo "<div class='result'><b>$score / $total_questions</b><span>Your Score for " . ucfirst($level) . " Level!</span></div>";
        
        // CORRECT ANSWERS LIST
        echo "<h3><i class='fas fa-check-circle'></i> Correct Answers:</h3>";
        echo "<div class='correct-answer-list'>";
        foreach($current_questions as $i=>$q){
            echo "<p>".($i+1).". The answer is: <b>".$q[1]."</b></p>";
        }
        echo "</div>";
        
        // NAVIGATION BUTTONS
        echo '<a href="'.$_SERVER['PHP_SELF'].'?level='.$level.'" class="btn back-btn" style="margin-top:20px;">Take Another Quiz ('.$level.')</a>';
        echo '<a href="index.php" class="btn" style="background:'.$accent_color.'; margin-top:10px;">Back to Home</a>';
    }
}
?>
</div>
</body>
</html>