CREATE TABLE theme (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL  
);

CREATE TABLE question (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    correct_choice_id INT NOT NULL,
    theme_id INT,
    FOREIGN KEY (theme_id) REFERENCES theme(id)
);

CREATE TABLE choice (
    id INT AUTO_INCREMENT PRIMARY KEY,
    choice_content TEXT NOT NULL,
    question_id INT,
    FOREIGN KEY (question_id) REFERENCES question(id)
);