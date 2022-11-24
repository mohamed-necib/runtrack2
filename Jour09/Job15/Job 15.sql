-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.

SELECT salles.nom AS Biggest_Room, salles.capacite, etages.nom FROM salles JOIN `etages` ON salles.id_etage = etages.id ORDER BY (salles.capacite) DESC LIMIT 1;