<!-- // models/QuestionModel.php -->
<?php

class QuestionModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getQuestionCount() {
        try {
            $query = "SELECT COUNT(*) as count FROM question";
            $statement = $this->db->prepare($query);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC)['count'];
        } catch (PDOException $e) {
            throw new Exception("Error fetching question count: " . $e->getMessage());
        }
    }

    public function getRandomQuestionWithChoicesAndTheme($shownQuestionIds) {
        try {
            // Convert array to comma-separated string for SQL
            $shownQuestionIdsStr = empty($shownQuestionIds) ? 'NULL' : implode(',', $shownQuestionIds);

            // Use NOT IN only if there are shown question IDs
            $notInClause = empty($shownQuestionIds) ? '' : "NOT IN ({$shownQuestionIdsStr})";

            $query = "
                SELECT
                    q.id AS question_id,
                    q.content AS question_content,
                    c.id AS choice_id,
                    c.choice_content,
                    t.name AS theme_name
                FROM
                    question q
                JOIN
                    choice c ON q.id = c.question_id
                JOIN
                    theme t ON q.theme_id = t.id
                WHERE
                    q.id {$notInClause}
                ORDER BY RAND() LIMIT 1
            ";

            $statement = $this->db->prepare($query);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Error fetching random question: " . $e->getMessage());
        }
    }
}
?>
