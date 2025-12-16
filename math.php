<?php
// Subject-specific settings
$subject_name = "Math Challenge";
$accent_color = "#3a86ff"; // Modern Blue
$secondary_color = "#8338ec"; // Purple
$background_color = "#f4f7f6"; // Light Grayish Blue
$success_color = "#06d6a0"; // Green for Success

// Define questions (20 questions per difficulty)
$questions = [
    'easy' => [
        ["5 + 3 = ?", "8", ["6","7","8","9"]],
        ["10 - 4 = ?", "6", ["5","6","7","8"]],
        ["3 × 2 = ?", "6", ["5","6","7","8"]],
        ["1 + 9 = ?", "10", ["9","10","11","12"]],
        ["7 - 2 = ?", "5", ["3","4","5","6"]],
        ["4 × 1 = ?", "4", ["1","2","3","4"]],
        ["12 ÷ 6 = ?", "2", ["1","2","3","4"]],
        ["8 + 0 = ?", "8", ["0","8","16","1"]],
        ["20 - 10 = ?", "10", ["5","10","15","20"]],
        ["5 × 5 = ?", "25", ["15","20","25","30"]],
        ["10 ÷ 2 = ?", "5", ["2","4","5","8"]],
        ["15 - 8 = ?", "7", ["6","7","8","9"]],
        ["4 + 6 = ?", "10", ["8","9","10","12"]],
        ["2 × 9 = ?", "18", ["16","17","18","19"]],
        ["30 ÷ 3 = ?", "10", ["5","10","15","30"]],
        ["11 - 5 = ?", "6", ["4","5","6","7"]],
        ["7 + 7 = ?", "14", ["12","13","14","15"]],
        ["1 × 10 = ?", "10", ["1","5","10","20"]],
        ["40 ÷ 4 = ?", "10", ["8","9","10","12"]],
        ["9 - 1 = ?", "8", ["7","8","9","10"]],
    ],
    'medium' => [
        ["12 × 3 = ?", "36", ["32","36","39","30"]],
        ["45 ÷ 5 = ?", "9", ["7","9","8","10"]],
        ["15 + 27 = ?", "42", ["40","42","43","44"]],
        ["(8 + 4) × 2 = ?", "24", ["16","20","24","32"]],
        ["90 ÷ 10 = ?", "9", ["8","9","10","11"]],
        ["100 - 35 = ?", "65", ["55","60","65","70"]],
        ["Area of rectangle sides 5 & 6?", "30", ["25","30","36","11"]],
        ["Convert 1/4 to decimal", "0.25", ["0.15","0.20","0.25","0.40"]],
        ["20% of 50?", "10", ["5","10","15","20"]],
        ["10^2 = ?", "100", ["10","20","50","100"]],
        ["6 × 8 - 3 = ?", "45", ["42","45","48","51"]],
        ["1/2 + 1/4 = ?", "3/4", ["1/2","2/4","3/4","1"]],
        ["If \$x+5=12\$, what is \$x\$?", "7", ["5","7","8","17"]], 
        ["1/3 of 30?", "10", ["3","5","10","15"]],
        ["$4^3 = $?", "64", ["12","32","64","16"]],
        ["3.5 × 2?", "7", ["6.5","7","7.5","8"]],
        ["Perimeter of square side 4?", "16", ["4","8","12","16"]],
        ["50 - (10 × 2)?", "30", ["30","40","60","80"]],
        ["0.75 × 100?", "75", ["7.5","75","750","0.75"]],
        ["3 × 3 × 3?", "27", ["9","18","27","36"]],
    ],
    'hard' => [
        ["(15 × 2) - 7 = ?", "23", ["22","23","24","21"]],
        ["$\sqrt{144} = $?", "12", ["10","11","12","14"]],
        ["25 × 4 = ?", "100", ["90","100","110","120"]],
        ["Simplify 2/4 + 1/2", "1", ["1/2","3/4","1","1 1/2"]],
        ["If \$3x=21\$, what is \$x\$?", "7", ["3","7","9","11"]], // Fixed line 60, 67 (depende sa line count)
        ["$13^2 = $?", "169", ["144","169","196","121"]],
        ["Volume of cube side 3?", "27", ["9","18","27","36"]],
        ["Next number: 1,4,9,16...?", "25", ["20","25","30","36"]],
        ["Slope of \$y=3x-5\$?", "3", ["3","-5","0","1"]], 
        ["\$\pi\$ rounded to 2 decimals?", "3.14", ["3.1","3.14","3.141","3.15"]], 
        ["What is 150% of 60?", "90", ["60","75","90","100"]],
        ["\$2x + 10 = 30\$, find \$x\$?", "10", ["5","10","15","20"]], 
        ["Distance between (2, 3) and (2, 7)?", "4", ["3","4","5","6"]],
        ["$5!$ (5 factorial) is equal to?", "120", ["25","50","100","120"]],
        ["Area of circle radius 1? (Use \$\pi\$)", "$\pi$", ["1","2$\pi$","$\pi$","$2$"]], 
        ["$99 \times 11 = $?", "1089", ["1099","999","1089","1100"]],
        ["Sum of angles in a triangle?", "180°", ["90°","180°","360°","100°"]],
        ["Solve for \$y\$: \$y^2 = 49\$", "\$\pm 7\$", ["7","14","$\pm 7$","49"]], 
        ["Convert 1/8 to percent", "12.5%", ["8%","12.5%","15%","25%"]],
        ["1/2 + 1/3 simplified?", "5/6", ["2/5","3/6","5/6","1"]],
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
<title>🔢 <?php echo $subject_name; ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* VARIABLES */
    :root {
        --accent: <?php echo $accent_color; ?>;
        --secondary: <?php echo $secondary_color; ?>;
        --bg-color: <?php echo $background_color; ?>;
        --hover-color: #344cb1; /* Darker accent */
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
    .back-btn { 
        background: var(--secondary); 
    }
    .back-btn:hover {
        background: #5e28a9;
    }
    .home-btn { 
        background: var(--success) !important; 
    }
    .home-btn:hover {
        background: #04aa80 !important;
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
        background: #e9ecef; 
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
<h1><i class="fas fa-calculator"></i> <?php echo $subject_name; ?></h1>
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
        <button type="submit" class="btn">Start Quiz</button>
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
                // Note: Gumagamit ng htmlspecialchars() para maiwasan ang isyu sa pagpasa ng values tulad ng fractions (e.g., 1/2)
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
            // Gamit din ang htmlspecialchars() para sa comparison
            $correct_answer = htmlspecialchars($q[1]);
            if(isset($_POST["q$i"]) && $_POST["q$i"] === $correct_answer) {
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
        echo '<a href="'.$_SERVER['PHP_SELF'].'" class="btn back-btn">Take Another Quiz</a>';
        echo '<a href="index.php" class="btn home-btn">Back to Home</a>';
    }
}
?>
</div>
</body>
</html>