<?php

class UserController {
    private $userModel;
    private $quizModel;

    public function __construct($userModel, $quizModel) {
        $this->userModel = $userModel;
        $this->quizModel = $quizModel;
    }

    public function saveUsername($username) {
        $this->userModel->saveUsername($username);
    }

    public function getQuizQuestions() {
        return $this->quizModel->getQuestions();
    }
}
?>
