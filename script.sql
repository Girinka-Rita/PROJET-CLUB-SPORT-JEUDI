CREATE TABLE membres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telephone VARCHAR(20),
    adresse TEXT,
    date_naissance DATE NOT NULL,
    sport_id INT,  -- id du sport
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('actif', 'inactif') DEFAULT 'actif'
);

CREATE TABLE sports (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    places_max INT DEFAULT 50,  -- optionel: limite de places
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO sports (nom, description) VALUES 
('Tennis', 'Club de Tennis - entraînements mercredi et samedi'),
('Volleyball', 'Volleyball en salle - lundi et jeudi soir'),
('Basketball', 'Basketball - mardi et vendredi');