<?php
// Subject-specific settings
$subject_name = "Filipino Language Quiz";
$accent_color = "#e84855"; // Modern Red/Maroon
$secondary_color = "#f9a828"; // Gold/Yellow
$background_color = "#f4f7f6"; // Light Grayish Blue
$success_color = "#06d6a0"; // Green for Success

// Define questions (20 questions per difficulty)
$questions = [
    'easy' => [
        // 20 Questions (Basic Grammar, Pangngalan, Pang-uri, Simple Sentences)
        ["Ano ang kabaligtaran ng 'mabuti'?", "Masama", ["Mabuti","Masama","Maganda","Mali"]],
        ["Alin ang tumutukoy sa ngalan ng tao, bagay, o pook (Pangngalan)?","Bata", ["Tumakbo","Bata","Maganda","Mabilis"]],
        ["Punan ang patlang: Ako ___ masaya.", "ay", ["ay","si","ang","ni"]],
        ["Kasingkahulugan (synonym) ng 'malungkot'?", "Malumbay", ["Masaya","Galit","Malumbay","Walang-gana"]],
        ["Alin ang Pang-uri (adjective)?", "Matalino", ["Tumalon","Matalino","Siya","Aklat"]],
        ["Kabaligtaran ng 'maliit'?", "Malaki", ["Maliit","Mahaba","Malaki","Makipot"]],
        ["Ang salitang 'bahay' ay isang:", "Pangngalan", ["Pandiwa","Pang-uri","Pangngalan","Pang-abay"]],
        ["Punan: ___ Maria ang aklat.", "Kay", ["Si","Kay","Sina","Ang"]],
        ["Piliin ang Panghalip Panao (Personal Pronoun).", "Sila", ["Ako","Pula","Tumalon","Ngayon"]],
        ["Ano ang Pandiwa (Verb) sa 'Ang bata ay kumakain'?", "Kumakain", ["Ang","Bata","Ay","Kumakain"]],
        ["Kasingkahulugan ng 'mabango'.", "Mahalimuyak", ["Mabaho","Mahalimuyak","Mabigat","Magaan"]],
        ["Alin ang salitang ugat ng 'sumasayaw'?", "Sayaw", ["Sayaw","Sawsaw","Sayawan","Sumayaw"]],
        ["Anong bantas ang ginagamit sa dulo ng pasalaysay na pangungusap?", ".", [".","?","!",","]],
        ["Punan: Si Lisa ___ mabilis tumakbo.", "ay", ["ay","at","o","pero"]],
        ["Kabaligtaran ng 'araw'.", "Gabi", ["Umaga","Tanghali","Gabi","Madilim"]],
        ["Ang 'mesa' ay halimbawa ng pangngalan na:", "Di-tiyak", ["Pantangi","Pambalana","Di-tiyak","Tiayak"]],
        ["Piliin ang Pang-ugnay (Conjunction).", "At", ["Sa","Ng","At","Para"]],
        ["Ang salitang 'malinis' ay Pang-uri na tumutukoy sa:", "Kalinisan", ["Dami","Kulay","Kalinisan","Laki"]],
        ["Punan: ___ kaming pumunta sa bukid.", "Kami", ["Tayo","Kami","Sila","Ikaw"]],
        ["Ano ang Pandiwa sa 'Nagsulat si Ben ng liham'?", "Nagsulat", ["Si","Ben","Nagsulat","Liham"]],
    ],
    'medium' => [
        // 20 Questions (Wastong Gamit, Pokus ng Pandiwa, Karaniwang Tayutay)
        ["Tama ang baybay:", "Kolehiyo", ["Kolehiyo","Colehiyo","Kolegio","Colégio"]],
        ["Kasingkahulugan ng 'masaya'?", "Maligaya", ["Malungkot","Galit","Maligaya","Pagod"]],
        ["Kabaligtaran ng 'mabilis'?", "Mabagal", ["Mabilis","Mabagal","Malakas","Mahina"]],
        ["Ang salitang 'pagod' ay isang:", "Pang-uri", ["Pangngalan","Pandiwa","Pang-uri","Panghalip"]],
        ["Anong uri ng salita ang 'doon'?", "Pang-abay", ["Pangngalan","Pandiwa","Pang-uri","Pang-abay"]],
        ["Piliin ang tamang baybay:", "Eskwelahan", ["Iskul","Eskuwela","Iskwelahan","Eskwelahan"]],
        ["Kasingkahulugan ng 'maganda'?", "Marikit", ["Pangit","Malinis","Marikit","Matangkad"]],
        ["Ano ang pokus ng pandiwa sa: 'Binili ni Ana ang tinapay'?", "Layon", ["Tagaganap","Layon","Ganapan","Kagamitan"]],
        ["Alin ang Pang-ukol (Preposition)?", "Sa", ["At","Para","Sa","Kung"]],
        ["Punan: Kumain ___ siya ng isda.", "ng", ["nang","ng","ni","ay"]],
        ["Kabaligtaran ng 'huminto'.", "Umisip", ["Tumigil","Umisip","Mag-aral","Magsimula"]],
        ["Piliin ang Tayutay (Simili) sa:", "Singliwanag ng araw ang ngiti niya.", ["Siya ay tala.","Singliwanag ng araw ang ngiti niya.","Umiyak ang langit.","Bato ang puso mo."]],
        ["Ang 'umalis' ay nasa anong aspekto ng pandiwa?", "Pangnagdaan", ["Pangnagdaan","Pangkasalukuyan","Panghinaharap","Katatapos"]],
        ["Alin ang tamang gamit ng 'daw' at 'raw'?", "Sabi raw ni Jose.", ["Sabi daw ni Jose.","Sabi raw ni Jose.","Daw sabi ni Jose.","Raw sabi ni Jose."]],
        ["Punan: Umuulan ___ umalis pa rin siya.", "pero", ["at","ngunit","pero","kaya"]],
        ["Anong uri ng pangungusap ang 'Pakikuha ang aklat.'?", "Pautos", ["Patanong","Pasalaysay","Pautos","Padamdam"]],
        ["Kasingkahulugan ng 'maliwanag'.", "Maaliwalas", ["Madilim","Maaliwalas","Malinaw","Mabigat"]],
        ["Piliin ang Pangngalang Pambalana (Common Noun).", "Guro", ["Ateneo","Pepsi","Guro","Manila"]],
        ["Ang salitang 'bukas' ay tumutukoy sa:", "Panahon", ["Pook","Tao","Bagay","Panahon"]],
        ["Punan: Kailangan ___ pumunta sa bayan.", "nating", ["natin","nating","nila","kami"]],
    ],
    'hard' => [
        // 20 Questions (Mas Komplikadong Pang-abay, Aspekto, Tayutay, Idyoma)
        ["Alin ang Pang-abay (Adverb) sa 'Siya ay tumakbo nang mabilis'?", "Nang mabilis", ["Siya","Tumakbo","Nang mabilis","Wala"]],
        ["Alin ang tamang bantas (punctuation) pagkatapos ng isang tanong?", "?", [".","!","?",","]],
        ["Alin ang tamang pangungusap?", "Siya ay nag-aral.", ["Siya ay nag-aral.","Siya ay nag-aral ka.","Siya ay nag-aaral ka.","Siya ay nag aral."]],
        ["Gamitin ang tamang salita: Luma ___ kotse.", "kong", ["kong","kung","ng","nang"]],
        ["Piliin ang Tayutay (Figure of Speech) na Simili.", "Parang leon sa tapang", ["Siya ay tala.","Parang leon sa tapang","Bato ang puso","Oh, buhay!"]],
        ["Ang salitang 'sumasayaw' ay nasa anong aspekto ng pandiwa?", "Pangkasalukuyan", ["Pangnagdaan","Pangkasalukuyan","Panghinaharap","Katatapos"]],
        ["Anong uri ng pangungusap ang 'Naku po!'?", "Padamdam", ["Patanong","Pasalaysay","Pautos","Padamdam"]],
        ["Alin ang tamang gamit ng 'ng' at 'nang':", "Bumili ng isda.", ["Bumili nang isda.","Bumili ng isda.","Tumaas nang presyo.","Umalis ng maaga."]],
        ["Kasingkahulugan ng 'humahalakhak'?", "Tumatawa", ["Umiiyak","Sumisigaw","Tumatawa","Kumakain"]],
        ["Piliin ang Tamang Paghahambing.", "Mas maganda si Ana kaysa kay Mia.", ["Maganda si Ana.","Mas maganda si Ana kaysa kay Mia.","Higit na maganda si Ana.","Parehong maganda sila."]],
        ["Ano ang Idyoma (Idiom) na 'Amoy-lupa'?", "Matanda na", ["Mabaho","Mayaman","Matanda na","Mahirap"]],
        ["Anong aspekto ng pandiwa ang 'mag-aaral'?", "Panghinaharap", ["Pangnagdaan","Pangkasalukuyan","Panghinaharap","Pawatas"]],
        ["Alin ang Pang-abay na Pamanahon?", "Noon", ["Doon","Mabilis","Noon","Maingay"]],
        ["Punan: Wala ___ si Mark.", "roon", ["doon","rito","roon","dito"]],
        ["Ano ang Tayutay (Metapora) sa: 'Siya ay bituin sa entablado'?", "Metapora", ["Simili","Metapora","Personipikasyon","Eksaherasyon"]],
        ["Piliin ang Pang-ukol na kabilang sa layon.", "Para sa", ["Sa","Para sa","Tungkol sa","Mula kay"]],
        ["Ano ang tamang baybay:", "Tsokolate", ["Tsolate","Sokolate","Tsokolate","Chokolate"]],
        ["Kasingkahulugan ng 'baliw' (derogatory).", "Ulol", ["Matalino","Baliw","Ulol","Masipag"]],
        ["Ang 'pinag-aralan' ay nasa anong aspekto?", "Pangnagdaan", ["Pangnagdaan","Pangkasalukuyan","Panghinaharap","Katatapos"]],
        ["Ang 'pag-ibig' ay isang Pangngalan na:", "Di-konkreto", ["Konkreto","Di-konkreto","Pantangi","Pambalana"]],
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
<title>🇵🇭 <?php echo $subject_name; ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* VARIABLES */
    :root {
        --accent: <?php echo $accent_color; ?>;
        --secondary: <?php echo $secondary_color; ?>;
        --bg-color: <?php echo $background_color; ?>;
        --hover-color: #c9343f; /* Darker accent */
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
        background: #e69100;
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
        background: #fff8f8; 
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
<h1><i class="fas fa-comments"></i> <?php echo $subject_name; ?></h1>
<h2>Pumili ng antas ng hirap upang simulan ang pagsusulit.</h2>

<form method="GET" style="<?php echo isset($_GET['level']) ? 'display:none;' : ''; ?>">
    <div class="difficulty-select">
        <label for="level">Pumili ng Antas ng Hirap:</label>
        <select name="level" id="level" required>
            <option value="">-- Piliin --</option>
            <option value="easy">Madali (20 Tanong)</option>
            <option value="medium">Katamtaman (20 Tanong)</option>
            <option value="hard">Mahirap (20 Tanong)</option>
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
        echo '<a href="'.$_SERVER['PHP_SELF'].'?level='.$level.'" class="btn" style="background:'.$accent_color.'; margin-top:20px;">Kumuha Pa ng Pagsusulit ('.$level.')</a>';
        echo '<a href="index.php" class="btn home-btn">Bumalik sa Home</a>';
    }
}
?>
</div>
</body>
</html>