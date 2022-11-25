-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

-- nom de l'etage avec la plus grande capacité + le nom de la salle et sa capacite
-- puis renommé la colonne nom par Biggest Room

SELECT salles.nom AS Biggest_Room, salles.capacite, etages.nom FROM salles JOIN `etages` ON salles.id_etage = etages.id ORDER BY (salles.capacite) DESC LIMIT 1;