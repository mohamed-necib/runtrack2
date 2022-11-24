-- Ecrivez dans le fichier “job10.sql” une requête permettant de calculer la superficie de
-- l’ensemble des étages.

SELECT etage.nom AS etage, salles.nom AS BiggestRoom, MAX(capacite) 
    FROM salles
    INNER JOIN `etage` ON salles.id_etage = etage.id;