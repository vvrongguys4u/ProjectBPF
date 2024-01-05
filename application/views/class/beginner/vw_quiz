<?php
// Koneksi ke database (gantilah dengan detail koneksi sesuai dengan server Anda)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inisialisasi skor pengguna
$userScore = 0;

// Fungsi untuk mengambil pertanyaan dari database
function getQuestions($conn) {
    $sql = "SELECT QuizID, Pertanyaan, PilihanJawaban, JawabanBenar FROM quizzes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Fungsi untuk memeriksa jawaban dan memberikan umpan balik
function checkAnswers($conn, $questions) {
    // Inisialisasi skor lokal
    $localScore = 0;

    // Pemeriksaan jawaban untuk setiap pertanyaan
    foreach ($questions as $question) {
        $quizID = $question['QuizID'];

        // Periksa apakah jawaban dipilih
        if (isset($_POST['q' . $quizID])) {
            $userAnswer = strtolower($_POST['q' . $quizID]);
            $correctAnswer = strtolower($question['JawabanBenar']);

            // Jika jawaban benar, tambahkan skor lokal
            if ($userAnswer === $correctAnswer) {
                $localScore += 1;
            }
        }
    }

    // Kembalikan skor lokal
    return $localScore;
}

// Pemrosesan formulir ketika dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Panggil fungsi untuk mengambil pertanyaan dari database
    $questions = getQuestions($conn);

    // Panggil fungsi untuk memeriksa jawaban dan tambahkan skor ke skor pengguna
    $userScore += checkAnswers($conn, $questions);
}

// Tutup koneksi ke database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Form with Database (PHP)</title>
    <!-- Add your CSS and other head elements here -->
    <style>
        .correct {
            color: green;
        }

        .incorrect {
            color: red;
        }
    </style>
</head>

<body>

    <!-- Container for the quiz form -->
    <div class="quiz-form">

        <!-- Header for the quiz form -->
        <div class="form-header">
            <!-- Title for the quiz form -->
            <div class="title quiz">Quiz Form with Database (PHP)</div>
        </div>

        <!-- Inner form container -->
        <div class="form-container">

            <!-- Form for the quiz -->
            <form method="post" class="quiz">

                <?php
                // Tampilkan pertanyaan dari database
                foreach ($questions as $question) {
                    echo '<div class="question">';
                    echo '<p>' . $question['Pertanyaan'] . '</p>';
                    
                    // Pilihan jawaban
                    $options = explode(",", $question['PilihanJawaban']);
                    foreach ($options as $option) {
                        echo '<label>';
                        echo '<input type="radio" name="q' . $question['QuizID'] . '" value="'
                            . strtolower($option) . '"> ' . $option;
                        echo '</label>';
                    }
                    
                    echo '</div>';
                }
                ?>

                <!-- Display user's score -->
                <div class="score-display">
                    <p>Your Score: <?php echo $userScore; ?></p>
                </div>

                <!-- Submit button -->
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Submit Quiz" class="centered-button">
                </div>

            </form>

        </div>
    </div>

</body>

</html>