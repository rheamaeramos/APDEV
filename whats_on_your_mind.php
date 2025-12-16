<!DOCTYPE html>
<html>
<head>
<title>Simple Question Responder</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; background: #fdf6f0; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
    .container { max-width: 600px; width: 90%; margin: 40px auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
    h2 { text-align: center; color: #ff6600; margin-bottom: 25px; font-weight: 700; }
    textarea { width: 100%; height: 100px; padding: 15px; border-radius: 8px; border: 1px solid #ffc107; font-size: 16px; resize: vertical; box-sizing: border-box; }
    .btn { margin-top: 15px; width: 100%; padding: 12px; background: #ff6600; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 600; transition: background 0.3s; text-decoration: none; display: block; text-align: center; }
    .btn:hover { background: #cc5200; }
    .note, .response { padding: 20px; margin-top: 25px; border-radius: 8px; }
    .note { background: #fff0e6; border: 1px solid #ffcc99; }
    .response { background: #e6f7ff; border: 1px solid #b3e0ff; }
    .note b, .response b { display: block; margin-bottom: 10px; font-size: 1.2em; }
    .btn-home { background: #28a745; margin-top: 20px; }
    .btn-home:hover { background: #1e7e34; }
    .tip { background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
</style>
</head>
<body>
<div class="container">
    <h2>🧠 Simple Question Responder</h2>
    <div class="tip">
        **Tip:** Subukan itanong ang mga keywords tulad ng **'kapital', 'bundok', 'noun', 'formula', 'Celsius',** o **'Pilipinas'**.
    </div>
    <form method="POST">
        <textarea name="question" placeholder="Ask your question here (e.g., Ano ang pinakamataas na bundok?)..." required><?php echo isset($_POST['question']) ? htmlspecialchars($_POST['question']) : ''; ?></textarea>
        <button name="submit" class="btn">Get Answer</button>
    </form>
    <?php
    /**
     * Function: simple_php_answer
     * Nagbibigay ng sagot base sa keyword matching.
     */
    function simple_php_answer($question) {
        $q = strtolower(trim($question));
        
        // --- Malaking Array ng Tanong at Keywords ---
        $qa_pairs = [
            // Araling Panlipunan / History
            ['keywords' => ['capital', 'kapital', 'france'], 'answer' => 'Ang kapital ng Pilipinas ay Maynila (Manila). Ang kapital ng France ay Paris.'],
            ['keywords' => ['president', 'pangulo', 'pilipinas'], 'answer' => 'Si Ferdinand Marcos Jr. ang kasalukuyang Pangulo ng Pilipinas.'],
            ['keywords' => ['bayani', 'hero', 'rizal'], 'answer' => 'Si **Dr. Jose Rizal** ang Pambansang Bayani ng Pilipinas.'],
            ['keywords' => ['bundok', 'mountain', 'highest'], 'answer' => 'Ang **Mt. Apo** ang pinakamataas na bundok sa Pilipinas.'],
            ['keywords' => ['independence', 'kalayaan', '1898'], 'answer' => 'Idineklara ang Kalayaan ng Pilipinas noong **Hunyo 12, 1898**.'],
            
            // Science
            ['keywords' => ['photosynthesis', 'fotosintesis', 'glucose'], 'answer' => 'Ang **Photosynthesis** ay ang proseso kung saan ginagamit ng halaman ang sikat ng araw, tubig, at Carbon Dioxide para gumawa ng glucose.'],
            ['keywords' => ['planet', 'red planet', 'mars'], 'answer' => 'Ang **Mars** ang tinatawag na Red Planet.'],
            ['keywords' => ['h2o', 'tubig', 'chemical'], 'answer' => 'Ang H₂O ay ang chemical formula para sa **Tubig**.'],
            ['keywords' => ['boil', 'boiling', 'temp', 'celsius'], 'answer' => 'Ang tubig ay kumukulo sa **100°C** (Celsius) o 212°F (Fahrenheit).'],
            ['keywords' => ['gravity', 'newton'], 'answer' => 'Ang **Gravity** ay ang puwersa na umaakit sa mga bagay na may mass patungo sa isa’t isa.'],

            // English / Filipino
            ['keywords' => ['noun', 'pangngalan', 'verb', 'pandiwa'], 'answer' => 'Ang **Noun (Pangngalan)** ay tumutukoy sa tao, lugar, bagay, o ideya. Ang **Verb (Pandiwa)** ay aksyon.'],
            ['keywords' => ['adjective', 'pang-uri', 'describe'], 'answer' => 'Ang **Adjective (Pang-uri)** ay salitang naglalarawan o nagbibigay-turing sa pangngalan (noun).'],
            ['keywords' => ['kasingkahulugan', 'synonym', 'happy'], 'answer' => 'Ang kasingkahulugan ng "masaya" ay **maligaya** o **natutuwa**.'],
            
            // Math
            ['keywords' => ['formula', 'area', 'circle'], 'answer' => 'Ang formula para sa area ng circle ay $A = \pi r^2$.'],
            ['keywords' => ['perimeter', 'square', 'parihaba'], 'answer' => 'Ang perimeter ng square ay $P = 4s$, kung saan $s$ ang side length.'],
            ['keywords' => ['pi', '3.14'], 'answer' => 'Ang **Pi ($\pi$)** ay isang mathematical constant, humigit-kumulang **3.14159**.'],
            
            // Generic
            ['keywords' => ['sino ka', 'who are you', 'ikaw ba'], 'answer' => 'Ako ay isang simpleng program na nilikha upang sagutin ang iyong mga katanungan batay sa aking mga nakaimbak na keywords.'],
            ['keywords' => ['oras', 'time', 'petsa', 'date'], 'answer' => 'Wala akong real-time na impormasyon, pero ang current time ngayon ay ' . date("h:i A") . ' at ang date ay ' . date("F d, Y") . '.'],

        ];
        
        // Loop through all QA pairs to find a match
        foreach ($qa_pairs as $pair) {
            foreach ($pair['keywords'] as $keyword) {
                if (strpos($q, $keyword) !== false) {
                    return $pair['answer'];
                }
            }
        }

        // Default response if no match is found
        return "Salamat sa iyong tanong! Ako ay isang simpleng program at hindi ko maintindihan ang iyong katanungan. Subukan mong magtanong tungkol sa mga keywords tulad ng **'bundok', 'formula',** o **'photosynthesis'.**";
    }

    if(isset($_POST['submit'])){
        $question = $_POST['question'];
        $answer = simple_php_answer($question);
        
        echo "<div class='note'><b>Your Question:</b><br>" . nl2br(htmlspecialchars($question)) . "</div>";
        echo "<div class='response'><b>Simple Responder Answer:</b><br>" . nl2br($answer) . "</div>";
    }
    ?>
    <a href="index.php" class="btn btn-home">Back to Home</a>
</div>
</body>
</html>