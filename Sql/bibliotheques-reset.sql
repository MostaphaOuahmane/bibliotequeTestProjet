DELIMITER $$
DROP PROCEDURE IF EXISTS reset_data $$

CREATE PROCEDURE reset_data()
BEGIN
  -- Désactiver contraintes de clé étrangère
  SET FOREIGN_KEY_CHECKS = 0;
  -- Vider les tableaux en repositionnant à 1 leur auto-incrément
  TRUNCATE TABLE auteur;
  TRUNCATE TABLE bibliotheque;
  TRUNCATE TABLE exemplaire;
  TRUNCATE TABLE ouvrage;
  TRUNCATE TABLE personne;
  -- Réasactiver contraintes de clé étrangère
  SET FOREIGN_KEY_CHECKS = 1;

  BEGIN
    -- Recuperation en cas d'exception
    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
	  -- Afficher la cause de l'échec
      SHOW ERRORS;
      -- Annuler la transaction
      ROLLBACK;
    END;  
    START TRANSACTION;
	INSERT INTO auteur(id_auteur, prenom, nom) VALUES
	(1, 'Khaled', 'Hosseini'),
    (2, 'Jane', 'Rowling'),
    (3, 'Alexandre', 'Dumas'),
    (4, 'Agatha', 'Christie');

	INSERT INTO ouvrage(id_ouvrage, titre, id_auteur) VALUES
    (1, 'Les cerfs volants de Kaboul', 1),
    (2, 'Mille soleils splendides', 1),
    (3, 'Harry Potter et la coupe de feu', 2),
    (4, 'Harry Potter et les reliques de la mort', 2),
    (5, 'Les trois mousquetaires', 3),
    (6, 'Le comte de Monte-Cristo', 3),
    (7, "Le crime de l'Orient Express", 4);
    
    INSERT INTO bibliotheque(id_bibliotheque, nom) VALUES
    (1, 'Maximilien Sorre'),
    (2, 'Léonard de Vinci'),
    (3, 'Gustave Eiffel');
    
    INSERT INTO personne(id_personne, email, mot_de_passe, est_bibliothecaire) VALUES
    (1, 'abonne1@gmail.com', SHA2('azerty', 256), 0),
	(2, 'abonne2@gmail.com', SHA2('qsdfgh', 256), 0),
	(3, 'abonne3@gmail.com', SHA2('wxcvb', 256), 0),
	(4, 'abonne4@gmail.com', SHA2('12345', 256), 0),
    (5, 'bibliothecaire1@gmail.com', SHA2('tyuiop', 256), 1),
    (6, 'bibliothecaire2@gmail.com', SHA2('ghjkl', 256), 1);
    
    INSERT INTO exemplaire(id_exemplaire, id_ouvrage, id_bibliotheque) VALUES
    (1, 1, 1),
    (2, 1, 2),
    (3, 1, 3),
    (4, 2, 1),
    (5, 2, 2),
    (6, 3, 1),
    (7, 3, 3),
    (8, 4, 1),
    (9, 4, 3),
    (10, 5, 1),
    (11, 5, 3),
    (12, 6, 1),
    (13, 6, 2),
    (14, 7, 3);
    
    INSERT INTO emprunt(id_exemplaire, id_emprunteur, date_retour, nb_prolongements) VALUES
    (1, 1, '2023-02-25',2),
    (2, 1, '2023-03-15',0),
    (3, 2, '2023-03-03',1),
    (4, 3, '2023-02-28',2),
    (5, 2, '2023-02-28',0);
    COMMIT;
  END;
END $$

CALL reset_data()$$
