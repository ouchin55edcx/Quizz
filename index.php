<?php
session_start();

require_once 'controllers/DB_Connection.php';
require_once 'model/QuestionModel.php';

try {
    $db = new DB_Connection();
    $questionModel = new QuestionModel($db);

    // Initialize or retrieve shown question IDs from the session
    $shownQuestionIds = isset($_SESSION['shown_question_ids']) ? $_SESSION['shown_question_ids'] : [];

    // Fetch a random question excluding shown questions
    $randomQuestion = $questionModel->getRandomQuestionWithChoicesAndTheme($shownQuestionIds);

    if ($randomQuestion) {
        // Display or use the data as needed
        print_r($randomQuestion);

        // Add the question ID to the shown question IDs
        $shownQuestionIds[] = $randomQuestion['question_id'];

        // Update the session variable
        $_SESSION['shown_question_ids'] = $shownQuestionIds;

        // Check if all questions have been shown
        $allQuestionsShown = count($shownQuestionIds) === $questionModel->getQuestionCount();
        if ($allQuestionsShown) {
            echo "All questions have been shown.";

            // Reset shown question IDs for a new session
            $_SESSION['shown_question_ids'] = [];
        }
    } else {
        // Handle the case when all questions have been shown
        echo "All questions have been shown.";

        // Reset shown question IDs for a new session
        $_SESSION['shown_question_ids'] = [];
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
