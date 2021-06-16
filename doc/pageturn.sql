DROP DATABASE IF EXISTS pageturn;
CREATE DATABASE pageturn CHARACTER SET 'utf8';
USE pageturn;


CREATE TABLE `User`(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    adress VARCHAR(50) NOT NULL UNIQUE,
    postcode VARCHAR(20) NOT NULL,
    city VARCHAR(50) NOT NULL,
    email VARCHAR(60) NOT NULL,
    birth_date DATE NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(firstname, lastname, adress, postcode, city, email, birth_date)
VALUES
("Kylian", "Mbappe", "9 rue de clairefontaine", "75000", "Paris", "k.mbappe@gmail.com", "1998-12-20"),
("Deschamps", "Didier", "14 avenue de la victoire", "75500", "Paris", "ddlagagne@hotmail.com", "1968-10-15");

CREATE TABLE Book(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    genre VARCHAR(20) NOT NULL,
    synopsis TEXT,
    release_date DATE,
    status TINYINT(1) NOT NULL,
    user_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, genre, synopsis, release_date, status, user_id)
VALUES
("Le Petit Prince", "Saint-Exupery, Antoine", "Novel", "The Little Prince is a novella by French aristocrat, writer, and aviator Antoine de Saint-Exupéry. It was first published in English and French in the US by Reynal & Hitchcock in April 1943, and posthumously in France following the liberation of France as Saint-Exupéry's works had been banned by the Vichy Regime.", "1943-04-06", 1, NULL),
("Harry Potter and the Philosopher's Stone", "Rowling, J.K.", "Novel", "Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry's eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!", "1997-06-26", 1, NULL), 
("The Hound of the Baskervilles", "Conan Doyle, Arthur", "Novel", "The Hound of the Baskervilles is the third of the four crime novels written by Sir Arthur Conan Doyle featuring the detective Sherlock Holmes.", "1902-04-01", 1, NULL),
("A Promised Land", "Obama, Barack", "Biography", "A Promised Land is a memoir by Barack Obama, the 44th President of the United States from 2009 to 2017.", "2020-11-17", 1, NULL);
