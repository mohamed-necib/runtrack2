-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.

SELECT salles.nom, etages.nom FROM salles JOIN etages ON etages.id = salles.id_etage;