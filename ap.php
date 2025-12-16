<?php
// Subject-specific settings
$subject_name = "Araling Panlipunan Quiz";
$accent_color = "#007bff"; // Blue (Flag/Government theme)
$secondary_color = "#ffc107"; // Yellow/Gold (Sun theme)
$background_color = "#f4f7f6"; // Light Grayish Blue
$success_color = "#28a745"; // Green for Success

// Define questions (20 questions per difficulty)
$questions = [
    'easy' => [
        // Basic Facts, National Symbols, Heroes
        ["Sino ang unang Pangulo ng Pilipinas?", "Emilio Aguinaldo", ["Emilio Aguinaldo","Jose Rizal","Andres Bonifacio","Manuel Quezon"]],
        ["Pambansang Bayani ng Pilipinas?", "Jose Rizal", ["Jose Rizal","Lapu-Lapu","Andres Bonifacio","Ramon Magsaysay"]],
        ["Anong taon idineklara ang kalayaan ng Pilipinas?", "1898", ["1898","1946","1899","1901"]],
        ["Pambansang Bulaklak ng Pilipinas?", "Sampaguita", ["Sampaguita","Gumamela","Ilang-Ilang","Rosal"]],
        ["Sino ang namuno sa Sigaw sa Pugad Lawin?", "Andres Bonifacio", ["Emilio Aguinaldo","Andres Bonifacio","Jose Rizal","Antonio Luna"]],
        ["Pambansang Prutas ng Pilipinas?", "Mangga", ["Saging","Mangga","Durian","Papaya"]],
        ["Kasalukuyang tawag sa watawat ng Pilipinas?", "Pambansang Watawat", ["Bandila","Pambansang Watawat","Tricolor","Sagisag"]],
        ["Ilang bituin ang makikita sa watawat ng Pilipinas?", "Tatlo", ["Isa","Dalawa","Tatlo","Apat"]],
        ["Pambansang Hayop ng Pilipinas?", "Kalabaw", ["Tamaraw","Kalabaw","Agila","Baboy"]],
        ["Kailan ipinagdiriwang ang Araw ng Kalayaan?", "Hunyo 12", ["Mayo 1","Hunyo 12","Hulyo 4","Agosto 21"]],
        ["Pangunahing relihiyon sa Pilipinas?", "Kristiyanismo", ["Islam","Budismo","Hinduismo","Kristiyanismo"]],
        ["Ano ang pambansang ibon?", "Philippine Eagle", ["Maya","Philippine Eagle","Lawin","Kalaw"]],
        ["Sino ang 'Ama ng Wikang Pambansa'?", "Manuel L. Quezon", ["Jose Rizal","Manuel L. Quezon","Ferdinand Marcos","Sergio Osmeña"]],
        ["Kabisera ng Pilipinas?", "Maynila", ["Quezon City","Maynila","Davao City","Cebu City"]],
        ["Ilang rehiyon mayroon ang Pilipinas (sa kasalukuyan)?", "17", ["15","16","17","18"]],
        ["Pambansang Laro?", "Arnis", ["Basketball","Sipa","Arnis","Sepak Takraw"]],
        ["Pinakamalaking isla sa Pilipinas?", "Luzon", ["Visayas","Mindanao","Luzon","Palawan"]],
        ["Pinakamataas na bundok sa Pilipinas?", "Mt. Apo", ["Mt. Pinatubo","Mt. Apo","Mt. Pulag","Mt. Kanlaon"]],
        ["Pambansang Sining?", "Balagtasan", ["Pasyon","Balagtasan","Kundiman","Folk Dance"]],
        ["Ang kasaysayan ay pag-aaral ng mga pangyayari sa:", "Nakaraan", ["Hinaharap","Kasalukuyan","Nakaraan","Akin"]],
    ],
    'medium' => [
        // Historical Events, Geography, Branches of Government
        ["Petsa ng EDSA People Power Revolution?", "Pebrero 25, 1986", ["Enero 1, 1986","Pebrero 25, 1986","Disyembre 30, 1986","Setyembre 21, 1972"]],
        ["Anong bansa ang sumakop sa Pilipinas bago ang Estados Unidos?", "Espanya", ["Hapon","Tsina","Espanya","Portugal"]],
        ["Pangunahing export product ng Pilipinas?", "Elektroniks", ["Abaka","Elektroniks","Kape","Sapatos"]],
        ["Ilang sangay mayroon ang pamahalaan ng Pilipinas?", "Tatlo", ["Dalawa","Tatlo","Apat","Lima"]],
        ["Ang sangay ng pamahalaan na gumagawa ng batas?", "Lehislatibo", ["Ehekutibo","Hudikatura","Lehislatibo","Pederal"]],
        ["Ang sangay na nagpapatupad ng batas?", "Ehekutibo", ["Ehekutibo","Hudikatura","Lehislatibo","Pederal"]],
        ["Unang Pangulo ng Komonwelt ng Pilipinas?", "Manuel L. Quezon", ["Emilio Aguinaldo","Manuel L. Quezon","Jose P. Laurel","Sergio Osmeña"]],
        ["Sino ang 'Ina ng Katipunan'?", "Melchora Aquino", ["Gabriela Silang","Melchora Aquino","Teresa Magbanua","Gregoria de Jesus"]],
        ["Sino ang tinawag na 'Dakilang Lumpo'?", "Apolinario Mabini", ["Jose Rizal","Apolinario Mabini","Marcelo H. del Pilar","Juan Luna"]],
        ["Anong dagat ang nasa silangan ng Pilipinas?", "Philippine Sea", ["West Philippine Sea","Celebes Sea","Philippine Sea","South China Sea"]],
        ["Ang Pilipinas ay kabilang sa kontinente ng:", "Asya", ["Europa","Aprika","Asya","Amerika"]],
        ["Unang Pilipinong nagwagi ng Nobel Prize (equivalent)?", "Maria Ressa", ["Leah Salonga","Jose Rizal","Maria Ressa","Manny Pacquiao"]],
        ["Saan idineklara ang kalayaan ng Pilipinas?", "Kawit, Cavite", ["Malolos, Bulacan","Kawit, Cavite","Calamba, Laguna","Bacolod, Negros"]],
        ["Ang pinakamahabang ilog sa Pilipinas?", "Cagayan River", ["Pasig River","Rio Grande de Mindanao","Cagayan River","Agusan River"]],
        ["Anong ahensya ang responsable sa paggawa ng pera?", "Bangko Sentral ng Pilipinas", ["DOT","BSP","BIR","DTI"]],
        ["Sino ang nagtatag ng Katipunan?", "Andres Bonifacio", ["Emilio Aguinaldo","Andres Bonifacio","Apolinario Mabini","Graciano Lopez Jaena"]],
        ["Tawag sa batas militar na ipinatupad ni Marcos noong 1972?", "Batas Militar (Martial Law)", ["Bagong Lipunan","Batas Militar","Proklamasyon 1081","EDSA"]],
        ["Sino ang kasalukuyang Pangulo ng Pilipinas (sa kasalukuyan)?", "Ferdinand Marcos Jr.", ["Rodrigo Duterte","Benigno Aquino III","Ferdinand Marcos Jr.","Gloria Macapagal Arroyo"]],
        ["Kailan sinakop ng Hapon ang Pilipinas?", "1942", ["1941","1942","1945","1950"]],
        ["Ang pinakamaliit na isla sa Pilipinas na may sariling bayan?", "Batanes", ["Camiguin","Batanes","Coron","Siargao"]],
    ],
    'hard' => [
        // Complex History, Constitution, Socio-Political Issues
        ["Sino ang nagbigay ng pangalang 'Felipinas' sa Pilipinas?", "Ruy Lopez de Villalobos", ["Ferdinand Magellan","Miguel Lopez de Legazpi","Ruy Lopez de Villalobos","King Philip II"]],
        ["Ang Batas Tydings-McDuffie ay nagbigay daan sa pagtatatag ng:", "Komonwelt", ["Republika","Kolonya","Komonwelt","Federasyon"]],
        ["Tawag sa pananakop ng Amerikano matapos ang digmaan?", "Benevolent Assimilation", ["Manifest Destiny","Benevolent Assimilation","White Man's Burden","Filipinization"]],
        ["Anong Artikulo ng 1987 Konstitusyon ang tungkol sa Bill of Rights?", "Artikulo III", ["Artikulo II","Artikulo III","Artikulo V","Artikulo VIII"]],
        ["Sino ang nagpinta ng 'Spoliarium'?", "Juan Luna", ["Fernando Amorsolo","Juan Luna","Felix Resurreccion Hidalgo","Carlos Francisco"]],
        ["Anong tawag sa proseso ng pagbabago sa Konstitusyon?", "Charter Change", ["Constitutional Amendment","Referendum","Charter Change","Plebisito"]],
        ["Ang 'Balikatan' ay taunang joint military exercise sa pagitan ng Pilipinas at:", "United States", ["Japan","China","United States","Australia"]],
        ["Tawag sa pinakamaliit na yunit ng pamahalaan sa Pilipinas?", "Barangay", ["Purok","Barangay","Lalawigan","Munisipalidad"]],
        ["Ano ang ibig sabihin ng salitang 'Datu' sa sinaunang Pilipinas?", "Pinuno/Chief", ["Manggagawa","Mandirigma","Pinuno/Chief","Pari"]],
        ["Petsa ng pagtatapos ng Ikalawang Digmaang Pandaigdig sa Pilipinas?", "Setyembre 2, 1945", ["Hulyo 4, 1946","Setyembre 2, 1945","Disyembre 8, 1941","Abril 9, 1942"]],
        ["Kailan ginawang pambansang awit ang 'Lupang Hinirang'?", "1956", ["1898","1946","1956","1986"]],
        ["Sino ang kauna-unahang babaeng Pangulo ng Pilipinas?", "Corazon Aquino", ["Gloria Macapagal Arroyo","Imelda Marcos","Corazon Aquino","Miriam Defensor Santiago"]],
        ["Ang batas na nagdeklara ng English at Filipino bilang opisyal na wika?", "1987 Konstitusyon", ["Batas Komonwelt Blg. 184","1987 Konstitusyon","Saligang Batas 1935","Proclamation No. 1041"]],
        ["Sino ang sumulat ng 'Filibustero' (sa Noli Me Tangere)?", "Crisostomo Ibarra", ["Elias","Pari Damaso","Crisostomo Ibarra","Tiya Isabel"]],
        ["Ang Leyte Gulf Landing noong 1944 ay pinamunuan ni:", "Gen. Douglas MacArthur", ["Gen. Dwight Eisenhower","Gen. Douglas MacArthur","Gen. Tomoyuki Yamashita","Gen. Emilio Aguinaldo"]],
        ["Anong ahensya ng pamahalaan ang nagtatakda ng minimum wage?", "DOLE", ["DTI","NEDA","DOLE","DOF"]],
        ["Ang Saligang Batas 1935 ay na-ratify sa ilalim ng anong uri ng pamamahala?", "Komonwelt", ["Unang Republika","Ikalawang Republika","Komonwelt","Protektorado"]],
        ["Saan nagmula ang mga pinakaunang tao sa Pilipinas ayon sa Teorya ng Land Bridges?", "Iba pang kontinente", ["Mindanao","Iba pang kontinente","Siberia","Africa"]],
        ["Tawag sa batas na nagtatag ng Department of Education (DepEd)?", "Batas Republika Blg. 9155", ["Batas Pambansa 232","Batas Republika Blg. 9155","Batas Komonwelt 184","Act No. 74"]],
        ["Ang Hukbalahap (Hukbong Bayan Laban sa Hapon) ay nag-umpisa noong:", "Ikalawang Digmaang Pandaigdig", ["Rebolusyon ng 1896","Digmaang Filipino-Amerikano","Ikalawang Digmaang Pandaigdig","Batas Militar"]],
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
<title>⭐ <?php echo $subject_name; ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* VARIABLES */
    :root {
        --accent: <?php echo $accent_color; ?>;
        --secondary: <?php echo $secondary_color; ?>;
        --bg-color: <?php echo $background_color; ?>;
        --hover-color: #0056b3; /* Darker accent */
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
<h1><i class="fas fa-landmark"></i> <?php echo $subject_name; ?></h1>
<h2>Pumili ng antas ng hirap upang simulan ang pagsusulit.</h2>

<form method="GET" style="<?php echo isset($_GET['level']) ? 'display:none;' : ''; ?>">
    <div class="difficulty-select">
        <label for="level">Pumili ng Antas ng Hirap:</label>
        <select name="level" id="level" required>
            <option value="">-- Choose Difficulty --</option>
            <option value="easy">Easy (20 Tanong)</option>
            <option value="medium">Medium (20 Tanong)</option>
            <option value="hard">Hard (20 Tanong)</option>
        </select>
        <button type="submit" class="btn start-btn">Simulan ang Pagsusulit</button>
    </div>
</form>

<?php
if(isset($_GET['level']) || isset($_POST['submit'])){
    $level = $_GET['level'] ?? $_POST['level'];
    $current_questions = $questions[$level] ?? [];

    if(!isset($_POST['submit'])){
        // Display Quiz Form
        echo "<form method='POST'>";
        echo "<h3>Antas: " . ucfirst($level) . " (" . count($current_questions) . " Tanong)</h3>";
        
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
        echo "<button name='submit' class='btn' style='margin-top:30px;'>Isumite ang Sagot</button></form>";
        
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
        echo "<div class='result'><b>$score / $total_questions</b><span>Ang iyong Iskor sa Antas " . ucfirst($level) . " !</span></div>";
        
        // CORRECT ANSWERS LIST
        echo "<h3><i class='fas fa-check-circle'></i> Mga Tamang Sagot:</h3>";
        echo "<div class='correct-answer-list'>";
        foreach($current_questions as $i=>$q){
            echo "<p>".($i+1).". Ang tamang sagot ay: <b>".$q[1]."</b></p>";
        }
        echo "</div>";
        
        // NAVIGATION BUTTONS
        echo '<a href="'.$_SERVER['PHP_SELF'].'?level='.$level.'" class="btn back-btn" style="margin-top:20px;">Kumuha Pa ng Pagsusulit ('.$level.')</a>';
        echo '<a href="index.php" class="btn" style="background:#007bff; margin-top:10px;">Bumalik sa Home</a>';
    }
}
?>
</div>
</body>
</html>