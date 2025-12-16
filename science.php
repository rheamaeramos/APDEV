<?php
// PHP Configuration: Define 20 questions for each difficulty level
$questions = [
    'easy' => [
        // 1. Basic Biology & Earth Science
        ["What is the main source of energy for the Earth?", "Sun", ["Moon","Stars","Sun","Wind"]],
        ["Which human organ is responsible for pumping blood?", "Heart", ["Lungs","Brain","Heart","Liver"]],
        ["What process do plants use to make their own food?", "Photosynthesis", ["Respiration","Transpiration","Photosynthesis","Digestion"]],
        ["What is the standard unit for measuring length in the metric system?", "Meter", ["Kilogram","Liter","Meter","Mile"]],
        ["What gas do humans exhale when they breathe out?", "Carbon Dioxide", ["Oxygen","Nitrogen","Carbon Dioxide","Hydrogen"]],
        
        // 6. Simple Physics & Chemistry
        ["At what temperature does pure water boil (at sea level)?", "100°C", ["50°C","100°C","0°C","212°C"]],
        ["Which part of an atom carries a positive charge?", "Proton", ["Electron","Neutron","Proton","Nucleus"]],
        ["What force keeps us on the ground?", "Gravity", ["Magnetism","Friction","Tension","Gravity"]],
        ["Which planet is known as the 'Morning Star' or 'Evening Star'?", "Venus", ["Mars","Mercury","Venus","Jupiter"]],
        ["What is the chemical symbol for water?", "H₂O", ["CO₂","O₂","H₂O","NaCl"]],

        // 11. Simple Classification & Environment
        ["Is a mushroom a plant or a fungus?", "Fungus", ["Plant","Animal","Fungus","Bacteria"]],
        ["Which type of rock is formed from cooled magma or lava?", "Igneous", ["Sedimentary","Metamorphic","Igneous","Shale"]],
        ["What is the largest animal on Earth?", "Blue Whale", ["Elephant","Giraffe","Blue Whale","Great White Shark"]],
        ["What is the chemical symbol for Oxygen?", "O", ["O₂","Ox","O","Oxy"]],
        ["Which is the smallest planet in our solar system?", "Mercury", ["Mars","Mercury","Venus","Pluto"]],
        
        // 16. Miscellaneous
        ["What is the freezing point of water in Fahrenheit?", "32°F", ["0°F","32°F","212°F","100°F"]],
        ["Which gas makes up most of the Earth's atmosphere?", "Nitrogen", ["Oxygen","Carbon Dioxide","Nitrogen","Argon"]],
        ["What color is reflected by a red object?", "Red", ["Blue","Green","Black","Red"]],
        ["Which layer of the Earth do we live on?", "Crust", ["Mantle","Core","Crust","Atmosphere"]],
        ["What is the common term for Dihydrogen Monoxide?", "Water", ["Salt","Sugar","Water","Vinegar"]],
    ],
    'medium' => [
        // 1. Cell Biology & Advanced Chemistry
        ["What part of the cell controls all cell activities?", "Nucleus", ["Cytoplasm","Mitochondria","Ribosome","Nucleus"]],
        ["What is the pH level of a neutral substance?", "7", ["0","14","7","1"]],
        ["Which noble gas is often used in advertising signs for illumination?", "Neon", ["Argon","Helium","Neon","Xenon"]],
        ["What type of chemical bond involves the sharing of electron pairs?", "Covalent", ["Ionic","Metallic","Covalent","Hydrogen"]],
        ["What is the protective layer around Earth that shields us from solar radiation?", "Ozone Layer", ["Troposphere","Ozone Layer","Stratosphere","Ionosphere"]],

        // 6. Human Body & Physiology
        ["The strongest bone in the human body is the:", "Femur", ["Tibia","Humerus","Femur","Skull"]],
        ["What is the term for the total number of protons in an atom's nucleus?", "Atomic Number", ["Mass Number","Atomic Weight","Atomic Number","Isotope Number"]],
        ["What kind of eclipse occurs when the Earth passes between the Sun and Moon?", "Lunar Eclipse", ["Solar Eclipse","Lunar Eclipse","Partial Eclipse","Total Eclipse"]],
        ["Who formulated the three laws of motion and the law of universal gravitation?", "Isaac Newton", ["Galileo Galilei","Albert Einstein","Isaac Newton","Nicolaus Copernicus"]],
        ["Which nutrient is the body's primary source of quick energy?", "Carbohydrates", ["Fats","Proteins","Vitamins","Carbohydrates"]],

        // 11. Waves & Sound
        ["Sound travels fastest through which medium?", "Solids", ["Vacuum","Gases","Liquids","Solids"]],
        ["What is the common name for the substance Calcium Carbonate?", "Chalk/Limestone", ["Table Salt","Baking Soda","Chalk/Limestone","Vinegar"]],
        ["Which blood type is considered the 'universal donor'?", "O Negative", ["A Positive","AB Positive","O Negative","B Negative"]],
        ["In genetics, what is the observable trait resulting from a gene combination?", "Phenotype", ["Genotype","Allele","Phenotype","Chromosome"]],
        ["What term describes a species that no longer exists?", "Extinct", ["Endangered","Extinct","Evolved","Native"]],

        // 16. Space & Geology
        ["What is the name of our galaxy?", "Milky Way", ["Andromeda","Triangulum","Milky Way","Whirlpool"]],
        ["The measure of the acidity or basicity of a solution is the:", "pH Scale", ["Metric Scale","Tidal Scale","pH Scale","Richer Scale"]],
        ["Which type of chemical reaction releases heat energy?", "Exothermic", ["Endothermic","Catalytic","Exothermic","Synthesis"]],
        ["What is the name of the fault line that runs through California and is responsible for many earthquakes?", "San Andreas Fault", ["Ring of Fire","Mid-Atlantic Ridge","San Andreas Fault","Himalayan Fault"]],
        ["Which element has the chemical symbol K?", "Potassium", ["Krypton","Potassium","Kryptonite","Kadium"]],
    ],
    'hard' => [
        // 1. Advanced Physics & Chemistry
        ["The smallest unit of an element that retains its properties is the:", "Atom", ["Molecule","Compound","Atom","Ion"]],
        ["What is the name of the theoretical particle that travels faster than the speed of light?", "Tachyon", ["Neutrino","Higgs Boson","Tachyon","Quark"]],
        ["What is the chemical formula for sulfuric acid?", "H₂SO₄", ["HCl","NaOH","H₂SO₄","HNO₃"]],
        ["Which law states that energy cannot be created or destroyed, only changed?", "First Law of Thermodynamics", ["Law of Conservation of Mass","First Law of Thermodynamics","Law of Inertia","Second Law of Motion"]],
        ["What is the phenomenon where light bends as it passes from one medium to another?", "Refraction", ["Reflection","Diffraction","Refraction","Polarization"]],

        // 6. Genetics & Molecular Biology
        ["What enzyme is responsible for 'unzipping' the DNA double helix during replication?", "Helicase", ["Polymerase","Ligase","Helicase","Primase"]],
        ["Who co-discovered the structure of the DNA molecule in 1953?", "Watson and Crick", ["Mendel","Darwin","Watson and Crick","Franklin"]],
        ["What is the end product of glycolysis?", "Pyruvate", ["Glucose","Lactate","Pyruvate","ATP"]],
        ["Which type of RNA carries amino acids to the ribosome?", "tRNA", ["mRNA","tRNA","rRNA","snRNA"]],
        ["What term describes the process of a cell engulfing a solid particle?", "Phagocytosis", ["Pinocytosis","Exocytosis","Phagocytosis","Osmosis"]],

        // 11. Astronomy & Space
        ["What is the boundary beyond which no light can escape a black hole?", "Event Horizon", ["Singularity","Ergosphere","Event Horizon","Accretion Disk"]],
        ["Which type of star is the final stage for stars with mass similar to the Sun?", "White Dwarf", ["Red Giant","Neutron Star","White Dwarf","Black Hole"]],
        ["What theory explains the origin and evolution of the universe from a singular point?", "Big Bang Theory", ["Steady State Theory","Inflationary Theory","Big Bang Theory","Nebular Hypothesis"]],
        ["What is the collective term for the four inner, rocky planets?", "Terrestrial Planets", ["Gas Giants","Jovian Planets","Terrestrial Planets","Icy Worlds"]],
        ["What unit measures the distance light travels in one year?", "Light-Year", ["Astronomical Unit","Parsec","Light-Year","Kilometer"]],

        // 16. Geosciences & Ecology
        ["What is the scale used to measure the intensity of an earthquake?", "Richter Scale", ["Mercalli Scale","Mohs Scale","Richter Scale","Beaufort Scale"]],
        ["Which biome is characterized by permafrost and low-growing vegetation?", "Tundra", ["Taiga","Savanna","Tundra","Desert"]],
        ["What element is a major component of diamonds and graphite?", "Carbon", ["Silicon","Oxygen","Carbon","Nitrogen"]],
        ["The process where tectonic plates sink beneath another plate is called:", "Subduction", ["Convergence","Divergence","Subduction","Transformation"]],
        ["What type of chemical is a substance that accepts electrons in a redox reaction?", "Oxidizing Agent", ["Reducing Agent","Catalyst","Oxidizing Agent","Buffer"]],
    ],
];

// Design Variables
$primary_color = "#007bff"; // Science Blue
$accent_color = "#28a745"; // Success Green
$background_light = "#f4f6f9";
$text_dark = "#343a40";
?>
<!DOCTYPE html>
<html>
<head>
<title>🧪 Science Quiz (20 Q)</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
/* Design based on the previous creative version */
:root {
    --primary-color: <?php echo $primary_color; ?>; 
    --accent-color: <?php echo $accent_color; ?>; 
    --background-light: <?php echo $background_light; ?>;
    --text-dark: <?php echo $text_dark; ?>;
}

body {
    font-family: 'Poppins', sans-serif;
    background: var(--background-light);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start; 
    min-height: 100vh;
}

.container {
    max-width: 650px; /* Wider frame for 20 questions */
    width: 90%;
    background: white;
    padding: 35px;
    margin: 40px auto;
    border-radius: 15px; 
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15); /* Stronger shadow */
}

h2 {
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 25px;
    font-weight: 800;
    font-size: 2em;
}

/* --- Start Form Styles --- */
.start-form-container {
    padding: 25px;
    border: 2px solid var(--primary-color);
    border-radius: 12px;
    background: #e9f7ff; /* Lighter blue background */
    margin-bottom: 30px;
}
.start-form-container label {
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 8px;
    display: block;
    font-size: 1.1em;
}

select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ced4da;
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    background-color: white;
    margin-bottom: 15px;
    font-size: 1em;
}

/* --- Quiz Question Styles --- */
.level-header {
    text-align: center;
    font-weight: 700;
    color: var(--accent-color);
    border-bottom: 2px solid var(--accent-color);
    padding-bottom: 10px;
    margin-bottom: 20px;
    font-size: 1.5em;
}

.question {
    font-weight: 700;
    font-size: 1.05em;
    color: var(--text-dark);
    margin-top: 25px;
    margin-bottom: 10px;
    padding: 8px 10px;
    background: #fafafa;
    border-radius: 6px;
    border-left: 4px solid var(--primary-color);
}

.option-label {
    display: flex;
    align-items: center;
    margin: 8px 0;
    padding: 12px 15px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.2s, border-color 0.2s;
    font-size: 0.95em;
}

.option-label:hover {
    background-color: #f0f8ff; 
    border-color: var(--primary-color);
}

.option-label input[type="radio"] {
    margin-right: 15px;
    width: 18px;
    height: 18px;
    accent-color: var(--primary-color);
}

/* --- Buttons --- */
.btn {
    width: 100%;
    padding: 14px;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-top: 30px;
    font-size: 1.1em;
    font-weight: 700;
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.btn:hover {
    transform: translateY(-2px);
}

.submit-btn {
    background: var(--accent-color); 
}
.submit-btn:hover {
    background: #1e7e34;
}

.back-btn {
    background: var(--primary-color); 
    margin-top: 15px;
    text-decoration: none;
    display: block;
    text-align: center;
}
.back-btn:hover {
    background: #0056b3;
}

/* --- Result Section --- */
.result {
    margin-top: 30px;
    padding: 25px;
    background: #e6fcf6; /* Light green background */
    color: #155724;
    border: 2px solid var(--accent-color);
    border-radius: 10px;
    font-size: 1.3em;
    text-align: center;
    font-weight: 800;
}
.result-details h3 {
    color: var(--primary-color);
    border-bottom: 1px dashed #ced4da;
    padding-bottom: 5px;
    margin-top: 30px;
    font-size: 1.2em;
    font-weight: 700;
}
.result-details p {
    margin: 10px 0;
    padding: 8px 12px;
    border-left: 3px solid #dee2e6;
    border-radius: 4px;
    background: #ffffff;
    font-size: 0.95em;
}
.result-details .correct {
    font-weight: 600;
    color: var(--accent-color);
}
.result-details .incorrect {
    color: #dc3545; /* Red for incorrect */
}

</style>
</head>
<body>
<div class="container">
<h2><i class="fas fa-flask"></i> Science Quiz - 20 Questions</h2>

<?php
// PHP Logic to handle the Quiz flow

if(isset($_GET['level']) && !isset($_POST['submit'])){
    // --- 1. Display Quiz Questions ---
    $level = $_GET['level'];
    $current_questions = $questions[$level] ?? [];
    
    echo "<form method='POST'>";
    echo "<p class='level-header'>Level: " . strtoupper($level) . " (20 Questions)</p>";
    
    foreach($current_questions as $i=>$q){
        // Question display
        echo "<p class='question'>".($i+1).". ".$q[0]."</p>";
        
        // Randomize options
        $options = $q[2];
        shuffle($options); 
        
        // Options display
        foreach($options as $c){
            echo "<label class='option-label'><input type='radio' name='q$i' value='".htmlspecialchars($c)."' required> $c</label>";
        }
    }
    // Hidden field to pass the level upon submission
    echo "<input type='hidden' name='level' value='".htmlspecialchars($level)."'>"; 
    echo "<button type='submit' name='submit' class='btn submit-btn'><i class='fas fa-paper-plane'></i> Submit Answers</button></form>";

} elseif(isset($_POST['submit'])) {
    // --- 2. Display Results ---
    $level = $_POST['level'] ?? 'easy';
    $current_questions = $questions[$level] ?? [];
    $score = 0;
    $total_questions = count($current_questions);
    
    // Calculate Score
    foreach($current_questions as $i=>$q){
        $correct_answer = $q[1];
        $user_answer = $_POST["q$i"] ?? null;
        if($user_answer == $correct_answer) {
            $score++;
        }
    }

    // Result Box
    echo "<div class='result'><i class='fas fa-trophy'></i> Final Score: $score / $total_questions</div>";
    
    // Correct Answers Details
    echo "<div class='result-details'>";
    echo "<h3><i class='fas fa-check-circle'></i> Correct Answers:</h3>";
    foreach($current_questions as $i=>$q) {
        $correct_answer = $q[1];
        $user_answer = $_POST["q$i"] ?? 'N/A';
        $is_correct = ($user_answer == $correct_answer);
        
        $icon = $is_correct ? '<i class="fas fa-check" style="color: var(--accent-color);"></i>' : '<i class="fas fa-times" style="color: #dc3545;"></i>';
        $class = $is_correct ? 'correct' : 'incorrect';

        echo "<p class='$class'>".($i+1).". <b>".$q[0]."</b><br> $icon Correct Answer: <b>".$correct_answer."</b> (Your choice: ".$user_answer.")</p>";
    }
    echo "</div>";

    // Back to Home Button
    echo '<a href="'.$_SERVER['PHP_SELF'].'" class="btn back-btn"><i class="fas fa-home"></i> Start New Quiz</a>';

} else {
    // --- 3. Display Difficulty Selection Form (Initial Load) ---
    ?>
    <div class="start-form-container">
        <form method="GET">
            <label for="level-select"><i class="fas fa-cogs"></i> Select Difficulty:</label>
            <select name="level" id="level-select" required>
                <option value="">-- Choose Level --</option>
                <option value="easy">Easy (20 Questions)</option>
                <option value="medium">Medium (20 Questions)</option>
                <option value="hard">Hard (20 Questions)</option>
            </select>
            <button type="submit" class="btn submit-btn"><i class="fas fa-bolt"></i> Start Quiz</button>
        </form>
    </div>
    <?php
}
?>
</div>
</body>
</html>