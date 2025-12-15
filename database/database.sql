CREATE DATABASE taxibe ;
\c taxibe;

-- Table & Sequence Chauffeur
CREATE SEQUENCE seq_chauffeur START 1;
CREATE TABLE chauffeur (
    id_chauffeur VARCHAR(10) PRIMARY KEY DEFAULT ('CHF' || to_char(nextval('seq_chauffeur'), 'FM000000')),
    nom          VARCHAR(100),
    prenom       VARCHAR(100)
);

INSERT INTO chauffeur (nom, prenom) VALUES
('Dupont', 'Jean'),
('Martin', 'Sophie'),
('Bernard', 'Luc'),
('Durand', 'Claire'),
('Leroy', 'Paul');

-- Table & Sequence Voiture
CREATE SEQUENCE seq_voiture START 1;
CREATE TABLE voiture (
    id_voiture      VARCHAR(10) PRIMARY KEY DEFAULT ('VTR' || to_char(nextval('seq_voiture'), 'FM000000')),
    immatriculation VARCHAR(10),
    marque          VARCHAR(20),
    modele          VARCHAR(20)
);

INSERT INTO voiture (immatriculation, marque, modele) VALUES
('AB-123-CD', 'Renault', 'Clio'),
('EF-456-GH', 'Peugeot', '208'),
('IJ-789-KL', 'Citroën', 'C3'),
('MN-012-OP', 'Toyota', 'Yaris'),
('QR-345-ST', 'Ford', 'Fiesta');

-- Table & Sequence Trajet
CREATE SEQUENCE seq_trajet START 1;
CREATE TABLE trajet (
    id_trajet         VARCHAR(10) PRIMARY KEY DEFAULT ('TRJ' || to_char(nextval('seq_trajet'), 'FM000000')),
    id_voiture        VARCHAR(10),
    id_chauffeur      VARCHAR(10),
    lieu_depart       VARCHAR(100),
    date_depart       TIMESTAMP,
    heure_depart      TIME,
    lieu_arrivee      VARCHAR(100),
    date_arrivee      TIMESTAMP,
    heure_arrivee     TIME,
    montant_recette   NUMERIC(10,2),
    montant_carburant NUMERIC(10,2),
    nb_kilometre      NUMERIC(10,2),
    FOREIGN KEY (id_voiture)   REFERENCES voiture(id_voiture),
    FOREIGN KEY (id_chauffeur) REFERENCES chauffeur(id_chauffeur)
);